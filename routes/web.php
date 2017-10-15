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

Route::get('/','PagesController@home');

Route::get('/aboutUs','PagesController@aboutUs');

//  Products
Route::get('/products','ProductController@list');
Route::get('/product/create','ProductController@new')->middleware('auth');
Route::get('viewproduct/{product}','ProductController@show');
Route::post('/product/create','ProductController@create')->middleware('auth');

Route::get('/product/update/{product}','ProductController@update')->middleware('auth');
Route::post('/product/edit','ProductController@edit')->middleware('auth');
//  Brands
Route::get('/viewbrand','BrandController@list')->middleware('auth');
Route::get('/viewbrand/{brand}','BrandController@show')->middleware('auth');

Route::get('/brand/create','BrandController@new')->middleware('auth');
Route::get('/brand/update/{brand}','BrandController@update')->middleware('auth');

Route::post('/brand/edit','BrandController@edit')->middleware('auth');
Route::post('/brand/create','BrandController@create')->middleware('auth');

//  Categories
Route::get('/viewcategory','CategoryController@list')->middleware('auth');
Route::get('/viewcategory/{category}','CategoryController@show')->middleware('auth');

Route::get('/category/create','CategoryController@new')->middleware('auth');
Route::get('/category/update/{category}','CategoryController@update')->middleware('auth');

Route::post('/category/edit','CategoryController@edit')->middleware('auth');
Route::post('/category/create','CategoryController@create')->middleware('auth');


// Colours
Route::get('/viewcolour','ColourController@list')->middleware('auth');

Route::get('/viewcolour/{colour}','ColourController@show');
Route::get('/colour/create','ColourController@new');
Route::get('/colour/update/{colour}','ColourController@update')->middleware('auth');

Route::post('/colour/edit','ColourController@edit')->middleware('auth');

Route::post('/colour/create','ColourController@create')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');