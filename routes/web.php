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

Route::get('/', 'PageController@index')->name('home');
Route::get('/product', 'PageController@product')->name('single.product');
Route::get('/checkout', 'PageController@checkout')->name('checkout');

/*Vue apis*/

Route::post('/api-store','ShoppingCartController@store');
Route::get('/api-init','ShoppingCartController@init');
Route::get('/api-remove','ShoppingCartController@remove');

