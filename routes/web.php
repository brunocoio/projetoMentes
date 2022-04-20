<?php

use Illuminate\Support\Facades\Route;

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
//admin
/**
 * Category
 * [X] RESOURCES > VIEWS
 * [V] HTTP > CONTROLLERS > ADMIN > CategoryController
 * [V] APP > MODELS > Category
 * [V] DATABASE > MIGRATIONS *
*/
Route::get('/admin/categories', ['as'=>'admin.categories', 'uses'=>'App\Http\Controllers\Admin\CategoryController@index']);
Route::get('/admin/categories/add', ['as'=>'admin.categories.add', 'uses'=>'App\Http\Controllers\Admin\CategoryController@add']);
Route::post('/admin/categories/save', ['as'=>'admin.categories.save', 'uses'=>'App\Http\Controllers\Admin\CategoryController@save']);
Route::get('/admin/categories/edit/{id}', ['as'=>'admin.categories.edit', 'uses'=>'App\Http\Controllers\Admin\CategoryController@edit']);
Route::put('/admin/categories/update/{id}', ['as'=>'admin.categories.update', 'uses'=>'App\Http\Controllers\Admin\CategoryController@update']);
Route::get('/admin/categories/delete/{id}', ['as'=>'admin.categories.delete', 'uses'=>'App\Http\Controllers\Admin\CategoryController@delete']);
