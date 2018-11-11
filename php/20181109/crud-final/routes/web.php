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
    return view('welcome');
});
//show nhieu nguoi
Route::get('users','UserController@index')->name('users.index');
//show 1 nguoi
Route::get('users/{id}','UserController@show')->name('user.show');

//delete
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

//create
Route::post('/users', 'UserController@store')->name('users.store');
//create nayf neu link la /users/create thi dua dong nay len truoc route show vi laravel tuong create la {id}
Route::get('create','UserController@create')->name('users.create');

//update
Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{id}','UserController@update')->name('users.update');

//trung ten trung phuong thuc khac function thi khong dc
//trung ten khac phuong thuc thi van chay