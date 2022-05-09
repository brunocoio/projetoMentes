<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $registers = User::paginate(5);
        return view('admin.users.index', compact('registers'));
    }
//show
    public function add(){
        return view('admin.users.add');
    }
//create
    public function save(Request $req){
        $registers = $req->all();
        User::create($registers);
        return redirect()->route('admin.users');
    }
//search
    public function edit($id){
        $registers = User::find($id);
        return view('admin.users.edit',compact('registers'));
    }
//update
    public function update(Request $req, $id){
        $registers = $req->all();
        User::find($id)->update($registers);
        return redirect()->route('admin.users');
    }
//delete
    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('admin.users');
    }
}
