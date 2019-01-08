<?php

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

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('categories/{cat_id}', 'SiteController@index')->name('categories.index');

Route::get('products/{id}', 'ProductController@show')->name('products.show');

Route::get('products/{id}/in-cart', 'ProductController@addToCart')->name('products.in-cart');

Auth::routes();

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@refresh')->name('cart.refresh');

Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders/store', 'OrderController@store')->name('orders.store');
