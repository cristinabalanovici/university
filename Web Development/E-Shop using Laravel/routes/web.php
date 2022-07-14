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
    return view('landing-page');
})->name('landing-page');
Route::get('shop', 'App\Http\Controllers\ProductsPageController@index')->name('shop.index');
Route::get('shop/{product}', 'App\Http\Controllers\ProductsPageController@show')->name('shop.show');
Route::get('cart', [App\Http\Controllers\ProductsPageController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsPageController::class, 'addToCart'])->name('add.to.cart');


Route::get('/crud', 'App\Http\Controllers\ProductsPageController@crud')->name('crud.crud');
Route::get('/create', 'App\Http\Controllers\ProductsPageController@crudcreate')->name('crud.create');
 Route::post('/create', 'App\Http\Controllers\ProductsPageController@store')->name('crud.store');
 Route::get('/{product}/show', 'App\Http\Controllers\ProductsPageController@crudshow')->name('crud.show');
 Route::get('/{product}/edit', 'App\Http\Controllers\ProductsPageController@edit')->name('crud.edit');
 Route::patch('/{product}/update', 'App\Http\Controllers\ProductsPageController@crudupdate')->name('crud.update');
 Route::delete('/{product}/delete', 'App\Http\Controllers\ProductsPageController@destroy')->name('crud.destroy');


Route::patch('update-cart', [App\Http\Controllers\ProductsPageController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductsPageController::class, 'remove'])->name('remove.from.cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', 'App\Http\Controllers\HomeController@logout');