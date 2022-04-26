<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }
    public function in(Request $req)
    {
      $itens = $req->all();
      if(Auth::attempt(['email'=>$itens['email'],'password'=>$itens['password']])){
        return redirect()->route('admin.cursos');
      }

      return redirect()->route('site.login');
    }
    public function out()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
}
