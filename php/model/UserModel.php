<?php
class UserModel
{
  private $attributes;
  /**
   * construct
   */
  public function __construct()
  {
  }
  /**
   * set regs
   */
  public function __set(string $attribute, $val)
  {
    $this->attributes[$attribute] = $val;
    return $this;
  }
  /**
   * get regs
   */
  public function __get(string $attribute)
  {
    return $this->attributes[$attribute];
  }
  /**
   * isset regs
   */
  public function __isset($attribute)
  {
    return isset($this->attributes[$attribute]);
  }
  /**
   * insert reg
   */
  public function insert()
  {
    $columns = $this->validate($this->attributes);
    if (!isset($this->id)) {
      $query = "INSERT INTO users (" .
        implode(', ', array_keys($columns)) .
        ") VALUES (" .
        implode(', ', array_values($columns)) . ");";
    }
    if ($connect = Connect::getInstance()) {
      $stmt = $connect->prepare($query);
      if ($stmt->execute()) {
        return $stmt->rowCount();
      }
    }
    return false;
  }
  /**
   * save reg
   */
  public function save()
  {
    $columns = $this->validate($this->attributes);
    if (isset($this->id)) {
      foreach ($columns as $key => $value) {
        if ($key !== 'id') {
          $items[] = "{$key}={$value}";
        }
      }
      //clear itens
      unset($items[4]);
      unset($items[5]);
      unset($items[6]);
      unset($items[7]);
      unset($items[8]);
      unset($items[9]);
      $query = "UPDATE users SET " . implode(', ', $items) . " WHERE id='{$this->id}';";
    }
    if ($connect = Connect::getInstance()) {
      $stmt = $connect->prepare($query);
      if ($stmt->execute()) {
        return $stmt->rowCount();
      }
    }
    return false;
  }
  /**
   * val regs sintax
   */
  private function escape($value)
  {
    if (is_string($value) & !empty($value)) {
      return "'" . addslashes($value) . "'";
    } elseif (is_bool($value)) {
      return $value ? 'TRUE' : 'FALSE';
    } elseif ($value !== '') {
      return $value;
    } else {
      return 'NULL';
    }
  }
  /**
   * validate regs
   */
  private function validate($value)
  {
    $result = array();
    foreach ($value as $k => $v) {
      if (is_scalar($v)) {
        $result[$k] = $this->escape($v);
      }
    }
    return $result;
  }
  /**
   * list
   */
  public static function all()
  {
    $connect = Connect::getInstance();
    $stmt = $connect->prepare("SELECT * FROM users;");
    $result = array();
    if ($stmt->execute()) {
      while ($rs = $stmt->fetchObject(UserModel::class)) {
        $result[] = $rs;
      }
    }
    if (count($result) > 0) {
      return $result;
    }
    return false;
  }
  /**
   * count regs
   */
  public static function count()
  {
    $connect = Connect::getInstance();
    $count = $connect->exec("SELECT count(*) FROM users;");
    if ($count) {
      return (int) $count;
    }
    return false;
  }
  /**
   * search by id
   */
  public static function find($id)
  {
    $connect = Connect::getInstance();
    $stmt = $connect->prepare("SELECT * FROM users AS User LEFT JOIN addresses AS Addr ON User.address_id = Addr.id_address WHERE User.id = '{$id}';");
    //$stmt = $connect->prepare("SELECT * FROM users WHERE id='{$id}';");
    if ($stmt->execute()) {
      if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchObject('UserModel');
        if ($result) {
          return $result;
        }
      }
    }
    return false;
  }
  /**
   * detroy by id
   */
  public static function destroy($id)
  {
    $connect = Connect::getInstance();
    if ($connect->exec("DELETE FROM users WHERE id='{$id}';")) {
      return true;
    }
    return false;
  }
  /**
   * update Radio
   */
  public static function updateRadio($usr)
  {
    $connect = Connect::getInstance();
    $stmt = $connect->prepare(" SELECT * FROM addresses INNER JOIN cities ON addresses.city_id = cities.id_cities INNER JOIN states ON addresses.state_id = states.id_states;");
    $result = array();
    if ($stmt->execute()) {
      while ($rs = $stmt->fetchObject(UserModel::class)) {
        $check = (isset($rs->id_address) && ($rs->id_address === $usr)) ? 'checked' : null;
        echo "
        <div class='form-check border border-light rounded'>
          <input class='form-check-input' type='radio' name='address_id' id='address_id' value='$rs->id_address' {$check}>
          <label class='form-check-label' for='$rs->id_address'>
            End: {$rs->address}<br />
            N: {$rs->numeral} | CEP: {$rs->zipcode}<br />
            Cidade: {$rs->name_cities} | Estado: {$rs->name_states}<br />
          </label>
        </div>
        ";
      }
    }
    if (count($result) > 0) {
      return $result;
    }
    return false;
  }
  /**
   * create Radio
   */
  public static function createRadio()
  {
    $connect = Connect::getInstance();
    $stmt = $connect->prepare(" SELECT * FROM addresses INNER JOIN cities ON addresses.city_id = cities.id_cities INNER JOIN states ON addresses.state_id = states.id_states;");
    $result = array();
    if ($stmt->execute()) {
      while ($rs = $stmt->fetchObject(UserModel::class)) {
        echo "
        <div class='form-check border border-light rounded'>
          <input class='form-check-input' type='radio' name='address_id' id='address_id' value='$rs->id_address'>
          <label class='form-check-label' for='$rs->id_address'>
            End: {$rs->address}<br />
            N: {$rs->numeral} | CEP: {$rs->zipcode}<br />
            Cidade: {$rs->name_cities} | Estado: {$rs->name_states}<br />
          </label>
        </div>
        ";
      }
    }
    if (count($result) > 0) {
      return $result;
    }
    return false;
  }
}
