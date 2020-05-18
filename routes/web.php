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




Route::get('/', 'ProductController@index')->name('shopping');
Route::get('/product/{slug}', 'ProductController@show')->name('product.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');
Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show');
Route::get('/checkout/{amount}', 'ProductController@checkout')->name('cart.checkout');
Route::post('/charge', 'ProductController@charge')->name('cart.charge')->middleware('auth');

Route::put('/products/{product}', 'ProductController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove');


