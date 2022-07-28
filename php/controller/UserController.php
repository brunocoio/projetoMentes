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
  public function show($request)
  {
    $id = (int) $request['id'];
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

    if (!$reg->insert()) {
      print json_encode("Erro ao salvar o registro!");
    }

    print json_encode("Registro salvo com sucesso!");

    return $this->read();
  }

  /**
   * update regs to edit
   */
  public function update($request)
  {
    $id = (int) $request['id'];
    $reg = UserModel::find($id);

    $reg->address_id = $this->request->address_id;
    $reg->name = $this->request->name;
    $reg->email = $this->request->email;
    $reg->password = $this->request->password;

    if (!$reg->save()) {
      print json_encode("Erro ao salvar o registro!");
    }

    print json_encode("Registro salvo com sucesso!");

    return $this->read();
  }

  /**
   * delete regs by id
   */
  public function delete($request)
  {
    $id = (int) $request['id'];

    if (!UserModel::destroy($id)) {
      print json_encode("Erro ao removido o registro!");
    }

    print json_encode("Registro removido com sucesso!");

    return $this->read();
  }

  /**
   * count state
   */
  public function countUserByState($stateId)
  {
    $reg = UserModel::getUsersByState($stateId);
    echo json_encode($reg);
  }

  /**
   * count city
   */
  public function countUserByCity($cityId)
  {
    $reg = UserModel::getUsersByCity($cityId);
    echo json_encode($reg);
  }

  /**
   * show radio
   */
  public function showRadio($user)
  {
    $usr = $user;

    if ($usr != 0) {
      if ($reg = UserModel::updateRadio($usr)) {
        return $reg;
      }
    } else {

      if ($reg = UserModel::createRadio()) {
        return $reg;
      }
    }
  }
}
