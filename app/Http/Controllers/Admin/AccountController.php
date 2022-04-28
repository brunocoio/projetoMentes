<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        $registers = Account::paginate(5);
        return view('admin.accounts.index', compact('registers'));
    }
//
    public function add(){
        return view('admin.accounts.add');
    }
//create
    public function save(Request $req){
        $registers = $req->all();
        Account::create($registers);
        return redirect()->route('admin.accounts');
    }
//search
    public function edit($id){
        $registers = Account::find($id);
        return view('admin.accounts.edit',compact('registers'));
    }
//update
    public function update(Request $req, $id){
        $registers = $req->all();
        Account::find($id)->update($registers);
        return redirect()->route('admin.accounts');
    }
//delete
    public function delete($id){
        Account::find($id)->delete();
        return redirect()->route('admin.accounts');
    }
}
