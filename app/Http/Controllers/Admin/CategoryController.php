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
        $registers = Category::all();
        return view('admin.categories.index', compact('registers'));
    }

    public function add(){
        return view('admin.categories.add');
    }

    public function save(Request $req){
        $itens = $req->all();
        Category::create($itens);
        return redirect()->route('admin.categories');
    }

    public function edit(){
        return view('admin.categories.edit');
    }

    public function update(){
        return view('admin.categories.update');
    }

    public function delete(){
        return view('admin.categories.delete');
    }
}
