<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $registers = Category::paginate(5);
        return view('admin.categories.index', compact('registers'));
    }
//show
    public function add(){
        return view('admin.categories.add');
    }
//create
    public function save(Request $req){
        $registers = $req->all();
        Category::create($registers);
        return redirect()->route('admin.categories');
    }
//search
    public function edit($id){
        $registers = Category::find($id);
        return view('admin.categories.edit',compact('registers'));
    }
//update
    public function update(Request $req, $id){
        $registers = $req->all();
        Category::find($id)->update($registers);
        return redirect()->route('admin.categories');
    }
//delete
    public function delete($id){
        Category::find($id)->delete();
        return redirect()->route('admin.categories');
    }
}
