<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login','AuthController@login');
Route::get('/getuser','AuthController@getUserLogin');
Route::resource('users', 'Users\UserController');
Route::resource('products', 'Admin\Products\ProductController');
Route::resource('groupcategories', 'Admin\GroupCategories\GroupCategoryController');
Route::resource('categories', 'Admin\Categories\CategoryController');
Route::resource('news', 'Admin\News\NewsController');
Route::resource('slides', 'Admin\Slides\SlideController');
Route::resource('orders', 'Admin\Orders\OrderController');
Route::resource('orders.details', 'Admin\Orders\OrderDetailController');
Route::get('reports', 'Admin\Reports\ReportController@report');

