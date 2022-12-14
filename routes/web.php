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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cardapio{menu}', 'App\Controllers\MenuController@showPublic')->name('menus.public.show');




Route::middleware('auth')->group(function (){
  Route::resource('users',App\Http\Controllers\UserController::class);
  Route::resource('products',App\Http\Controllers\ProductController::class);
  Route::resource('menus',App\Http\Controllers\MenuController::class);
  //Route::resource('ordes',App\Http\Controller\OrderController::class);
  Route::resource('establishments',App\Http\Controllers\EstablishmentController::class);
  Route::resource('menu.product',App\Http\Controllers\MenuProductController::class)
  ->only(['store', 'destroy']);
});
