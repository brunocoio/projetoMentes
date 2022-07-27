<?php

class CityController extends Controller
{
  /**
   * list regs
   */
  public function read()
  {
    $cities = CityModel::all('cities');
    return ['cities' => $cities];
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
    $reg = CityModel::find($id);

    return $this->view('form', ['reg' => $reg]);
  }
}
