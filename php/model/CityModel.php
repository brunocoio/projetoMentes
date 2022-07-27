<?php
class CityModel
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
  public static function all($tb)
  {
    $connect = Connect::getInstance();
    $stmt = $connect->prepare("SELECT * FROM $tb;");
    $result = array();
    if ($stmt->execute()) {
      while ($rs = $stmt->fetchObject(StateModel::class)) {
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
    $count = $connect->exec("SELECT count(*) FROM cities;");
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
    $stmt = $connect->prepare("SELECT * FROM cities WHERE id='{$id}';");
    if ($stmt->execute()) {
      if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchObject('CityModel');
        if ($result) {
          return $result;
        }
      }
    }
    return false;
  }
}
