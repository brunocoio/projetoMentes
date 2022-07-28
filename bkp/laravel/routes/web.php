<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/**
 * Index
 */
Route::get('/', function () {
    return view('home');
});

/**
 * User
 * [V] RESOURCES > VIEWS *
 * [V] HTTP > CONTROLLERS > UserController
 * [V] APP > MODELS > User
 * [X] DATABASE > MIGRATIONS *
 */
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::post('/users/save', [UserController::class, 'save'])->name('users.save');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit')->where('id', '[0-9]+');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update')->where('id', '[0-9]+');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete')->where('id', '[0-9]+');
