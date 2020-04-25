<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::prefix('cart')->group(function(){
    Route::get('/', 'CartController@index')->name('cart');
    Route::get('/user', 'CartController@show')->name('cart.show');
    Route::post('/', 'CartController@store')->name('cart.store');
    Route::delete('{product_id}', 'CartController@destroy')->name('cart.destroy');
});
Route::prefix('products')->group(function() {
    Route::get('/', 'ProductController@index');
    Route::get('/all', 'ProductController@all');
});
Route::prefix('order')->group(function(){
    Route::get('/history', 'OrderController@index')->name('history');
    Route::get('/confirmation', 'CartController@confirmation')->name('confirmation')->middleware(['auth', 'order.confirmation']);
    Route::post('/', 'OrderController@store')->name('order.store');
    Route::post('{order}', 'OrderController@update')->name('order.update');
});
Route::get('/checkout', 'CartController@checkout')->name('checkout')->middleware('checkout');
Auth::routes();
