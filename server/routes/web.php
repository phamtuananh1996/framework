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

Route::get('/', function () {
    return view("index");
});
 Route::get('/login','UserController@ViewLogin');
 Route::get('/logout','UserController@Logout');
 Route::get('/register','UserController@ViewRegister');
 Route::Post('/login','UserController@Login');
 Route::Post('/register','UserController@Register');
 Route::Post('/getmsg','SPController@getAllSp');
