<?php

class StateController extends Controller
{
  /**
   * list regs
   */
  public function read()
  {
    $regs = StateModel::all('states');
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
    $reg = StateModel::find($id);

    return $this->view('form', ['reg' => $reg]);
  }
}
