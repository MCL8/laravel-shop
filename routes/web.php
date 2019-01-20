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
Route::get('about', 'SiteController@about')->name('site.about');
Route::get('delivery', 'SiteController@delivery')->name('site.delivery');
Route::get('payment', 'SiteController@payment')->name('site.payment');

Route::get('category/{cat_id}', 'CategoryController@index')->name('category.index');

Route::get('products/{id}', 'ProductController@show')->name('products.show');

Route::get('products/{id}/in-cart', 'ProductController@addToCart')->name('products.in-cart');

Auth::routes();

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@refresh')->name('cart.refresh');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart/confirm', 'CartController@confirm')->name('cart.confirm');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/', function(){
            return view('admin.index');
        })->name('admin.index');

        Route::resource('products', 'AdminProductController')->only(['index','create', 'store', 'edit', 'update', 'destroy']);

        Route::resource('categories', 'AdminCategoryController')->only(['index','create', 'store', 'edit', 'update', 'destroy']);

        Route::resource('orders', 'AdminOrderController')->only(['index', 'show', 'edit', 'update', 'destroy']);
    });
});