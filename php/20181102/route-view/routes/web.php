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

/*dấu / đằng sau public */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/huong',function (){
    return view('thuhuong');
});

Route::get('/index', 'controller@index');

Route::get('/tt', 'UserController@index');

Route::get('/table','tableController@index');

