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
Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::get('/confirmation', 'CartController@confirmation')->name('confirmation');
Route::get('/history', 'CartController@history')->name('history');
Route::prefix('products')->group(function() {
    Route::get('/', 'ProductController@index');
    Route::get('/all', 'ProductController@all');
});
Auth::routes();
