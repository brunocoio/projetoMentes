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
      if(Auth::attempt($req->only(['email','password']))){
        return redirect()->route('admin.categories');
      }

      return redirect()->route('site.login');
    }
    public function out()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
}
