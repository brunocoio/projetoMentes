<?php

class UserController extends Controller
{
  /**
   * list regs
   */
  public function read()
  {
    $regs = UserModel::all();
    return $this->view('home', ['regs' => $regs]);
  }
  /**
   * show regs to create
   */
  public function showall()
  {
    return $this->view('form');
  }
  /**
   * show regs to edit
   */
  public function show($value)
  {
    $id = (int) $value['id'];
    $reg = UserModel::find($id);

    return $this->view('form', ['reg' => $reg]);
  }
  /**
   * insert
   */
  public function create()
  {
    $reg = new UserModel;
    $reg->name = $this->request->name;
    $reg->email = $this->request->email;
    $reg->password = $this->request->password;
    $reg->address_id = $this->request->address_id;

    if ($reg->insert()) {
      print json_encode("Registro salvo com sucesso!");
      return $this->read();
    }
    print json_encode("Erro ao salvar o registro!");
  }
  /**
   * update regs to edit
   */
  public function update($value)
  {
    $id = (int) $value['id'];
    $reg = UserModel::find($id);
    $reg->address_id = $this->request->address_id;
    $reg->name = $this->request->name;
    $reg->email = $this->request->email;
    $reg->password = $this->request->password;

    if ($reg->save()) {
      print json_encode("Registro salvo com sucesso!");
      return $this->read();
    }
    print json_encode("Erro ao salvar o registro!");
  }
  /**
   * delete regs by id
   */
  public function delete($value)
  {
    $id = (int) $value['id'];

    if ($reg = UserModel::destroy($id)) {
      print json_encode("Registro removido com sucesso!");
      return $this->read();
    }
    print json_encode("Erro ao removido o registro!");
  }
  /**
   * show radio
   */
  public function showRadio($user){   
    $usr = $user; 
    if($usr != 0){
      if ($reg = UserModel::updateRadio($usr)) {
        return $reg;
      }
    }else{
      if ($reg = UserModel::createRadio()) {
        return $reg;
      }
    }
  }
}
