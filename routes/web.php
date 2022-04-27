<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//index
Route::get('/', function () {
    return view('home');
});

//site
/**
 * Home
 * [V] RESOURCES > VIEWS > SITE *
 * [V] HTTP > CONTROLLERS > SITE > HomeController
 * [X] APP > MODELS > -
 * [X] DATABASE > MIGRATIONS -
*/
Route::get('/',[HomeController::class,'index'],['name' =>'site.home']);

//login
/**
 * Home
 * [V] RESOURCES > VIEWS > LOGIN *
 * [V] HTTP > CONTROLLERS > SITE > LoginController
 * [X] APP > MODELS > -
 * [X] DATABASE > MIGRATIONS -
*/
Route::get('/login',[LoginController::class,'index'])->name('site.login');
Route::post('/login/in',[LoginController::class,'in'])->name('site.login.in');
Route::get('/login/out',[LoginController::class,'out'])->name('site.login.out');

//admin
/**
 * Category
 * [V] RESOURCES > VIEWS > ADMIN *
 * [V] HTTP > CONTROLLERS > ADMIN > CategoryController
 * [V] APP > MODELS > Category
 * [V] DATABASE > MIGRATIONS *
*/
Route::group(['middleware'=>'auth'],  function (){
    Route::get('/admin/categories',[CategoryController::class,'index'])->name('admin.categories');
    Route::get('/admin/categories/add',[CategoryController::class,'add'])->name('admin.categories.add');
    Route::post('/admin/categories/save',[CategoryController::class,'save'])->name('admin.categories.save');
    Route::get('/admin/categories/edit/{id}',[CategoryController::class,'edit'])->name('admin.categories.edit');
    Route::put('/admin/categories/update/{id}',[CategoryController::class,'update'])->name('admin.categories.update');
    Route::get('/admin/categories/delete/{id}',[CategoryController::class,'delete'])->name('admin.categories.delete');
});
