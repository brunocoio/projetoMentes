<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Category;

class AccountController extends Controller
{
    public function index()
    {
        //dd(Account::first());
        //dd(Account::first()->category);
        $registers = Account::paginate(5);
        $categories = Category::all();
        /**$results = DB::table('accounts')
        *    ->join('categories', 'accounts.category_id', '=', 'categories.id')
        *    ->select('accounts.*', 'categories.*')
        *    ->get();
        */
        return view('admin.accounts.index', compact('registers','categories'));
    }
//
    public function add(){
        $categories = Category::all();
        return view('admin.accounts.add',compact('categories'));
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
        $categories = Category::all();
        return view('admin.accounts.edit',compact('registers','categories'));
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
