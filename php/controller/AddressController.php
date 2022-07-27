<?php

class AddressController extends Controller
{
  /**
   * list regs
   */
  public function read()
  {
    $addresses = AddressModel::all('addresses');
    return ['addresses' => $addresses];
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
    $reg = AddressModel::find($id);

    return $this->view('form', ['reg' => $reg]);
  }
}
