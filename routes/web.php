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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/','index');
Route::get('/products','ProductController@getIndex')->name('products.index')/*->middleware('auth')*/;
Route::get('/add-to-cart/{id}','ProductController@getAddToCart')->name('products.addToCart');
//Login and register routes
Auth::routes();
//




