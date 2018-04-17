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

 Route::get('/','SPController@getAllSp');
 Route::get('/login','UserController@ViewLogin');
 Route::get('/dichvu','SPController@DichVu');

 Route::get('/categories','SPController@getAllSp');
 Route::get('/categories/{id}','SPController@getSp');
 Route::get('/gioithieu','SPController@GioiThieu');
 Route::get('/logout','UserController@Logout');
 Route::get('/register','UserController@ViewRegister');
 Route::Post('/login','UserController@Login');
 Route::Post('/register','UserController@Register');
 Route::Get('/tintuc','TTController@DsTinTuc');
 Route::Get('/baiviet/{id}','TTController@BaiViet');
 Route::get('/chitietsanpham/{id}','SpController@GetSp');
 Route::get('/api_get_product/{id}','SpController@getProductApi');

 Route::get('/cart/add/{id}','CartController@addCart');
 Route::get('/cart/ajax/add/{id}','CartController@addAjaxCart');
 Route::get('/cart/ajax/delete/{id}','CartController@deleteAjaxCart');
 Route::get('/cart/delete/{rowId}','CartController@deleteCart');
 Route::get('/cart','CartController@getCart');
 Route::post('/cart','CartController@update');
 Route::get('/checkout','CheckoutController@index');


Route::get('/groupcategory/{id}','GroupCategoryController@getProduct');
Route::get('/search','SearchController@search');

