<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\UserController;

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
    return view('site.login');
});
//site
/**
 * Home
 * [V] RESOURCES > VIEWS > SITE *
 * [V] HTTP > CONTROLLERS > SITE > HomeController
 * [X] APP > MODELS > -
 * [X] DATABASE > MIGRATIONS -
 */
Route::get('/', [HomeController::class, 'index'], ['name' => 'site.login']);
//login
/**
 * Home
 * [V] RESOURCES > VIEWS > LOGIN *
 * [V] HTTP > CONTROLLERS > SITE > LoginController
 * [X] APP > MODELS > -
 * [X] DATABASE > MIGRATIONS -
 */
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login/in', [LoginController::class, 'in'])->name('site.login.in');
Route::get('/login/out', [LoginController::class, 'out'])->name('site.login.out');
//admin
/**
 * Category
 * [V] RESOURCES > VIEWS > ADMIN *
 * [V] HTTP > CONTROLLERS > ADMIN > CategoryController
 * [V] APP > MODELS > Category
 * [V] DATABASE > MIGRATIONS *
 */
Route::group(['middleware' => 'auth'],  function () {
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/categories/add', [CategoryController::class, 'add'])->name('admin.categories.add');
    Route::post('/admin/categories/save', [CategoryController::class, 'save'])->name('admin.categories.save');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit')->where('id', '[0-9]+');
    Route::put('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update')->where('id', '[0-9]+');
    Route::get('/admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete')->where('id', '[0-9]+');
    /**
     * User
     * [V] RESOURCES > VIEWS > ADMIN *
     * [V] HTTP > CONTROLLERS > ADMIN > UserController
     * [V] APP > MODELS > User
     * [V] DATABASE > MIGRATIONS *
     */
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/add', [UserController::class, 'add'])->name('admin.users.add');
    Route::post('/admin/users/save', [UserController::class, 'save'])->name('admin.users.save');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit')->where('id', '[0-9]+');
    Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update')->where('id', '[0-9]+');
    Route::get('/admin/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete')->where('id', '[0-9]+');
    /**
     * Account
     * [V] RESOURCES > VIEWS > ADMIN *
     * [V] HTTP > CONTROLLERS > ADMIN > AccountController
     * [V] APP > MODELS > Account
     * [V] DATABASE > MIGRATIONS *
     */
    Route::get('/admin/accounts', [AccountController::class, 'index'])->name('admin.accounts');
    Route::get('/admin/accounts/add', [AccountController::class, 'add'])->name('admin.accounts.add');
    Route::post('/admin/accounts/save', [AccountController::class, 'save'])->name('admin.accounts.save');
    Route::get('/admin/accounts/edit/{id}', [AccountController::class, 'edit'])->name('admin.accounts.edit')->where('id', '[0-9]+');
    Route::put('/admin/accounts/update/{id}', [AccountController::class, 'update'])->name('admin.accounts.update')->where('id', '[0-9]+');
    Route::get('/admin/accounts/delete/{id}', [AccountController::class, 'delete'])->name('admin.accounts.delete')->where('id', '[0-9]+');
});
