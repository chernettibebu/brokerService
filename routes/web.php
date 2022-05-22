<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Account/create_account', [AccountController::class, 'register'])->name('Account/create_account');
Route::post('/Account/create_account', [AccountController::class, 'store'])->name('Account/create_account');
Route::get('/Service/register', [ServiceController::class, 'register'])->name('/Service/register');
Route::post('/Service/register', [Servicecontroler::class, 'store'])->name('/Service/register');



////Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
 Route::get('/Service/list', [ServiceController::class, 'get_all'])->name('Service/list');
// Route::get('/Catagory/get_all', [CatagoryController::class, 'get_all'])->name('Catagory/get_all');
// Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
// Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
// Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
 Route::get('/Service/search/{id}', [ServiceController::class, 'get_by_id']);
// Route::get('/Catagory/search/{id}', [CatagoryController::class, 'get_by_id']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
