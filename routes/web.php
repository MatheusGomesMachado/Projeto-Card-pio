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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::middleware('auth')->group(function (){
  Route::resource('users',App\Http\Controllers\UserController::class);
  Route::resource('products',App\Http\Controllers\ProductController::class);
  Route::resource('menus',App\Http\Controllers\MenuController::class);
  //Route::resource('ordes',App\Http\Controller\OrderController::class);
  //Route::resource('establishment',App\Http\Controller\EstablishmentController::class);
});
