<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $registers = User::paginate(5);
        return view('users.index', compact('registers'));
    }
    //show
    public function add()
    {
        return view('users.add');
    }
    //create
    public function save(Request $req)
    {
        $registers = $req->all();
        User::create($registers);
        return redirect()->route('users');
    }
    //search
    public function edit($id)
    {
        $registers = User::find($id);
        return view('users.edit', compact('registers'));
    }
    //update
    public function update(Request $req, $id)
    {
        $registers = $req->all();
        User::find($id)->update($registers);
        return redirect()->route('users');
    }
    //delete
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('users');
    }
}
