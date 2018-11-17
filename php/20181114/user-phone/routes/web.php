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

Route::get('/index', function(){
    return view('main');
});

Route::get('/rela','UserPhoneController@index')->name('u-p.index');
//select *
Route::get('/user','UserController@index')->name('users.index');

//xem 1 nguoi
Route::get('/user/{id}','UserController@show')->name('users.show');
//form them nguoi dung
Route::get('/create', 'UserController@create')->name('users.create');
 
// Thêm người dùng
Route::post('/user', 'UserController@store')->name('users.store');

// Xóa người dùng
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
// Form sửa người dùng
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
// Cập nhật
Route::put('users/{id}', 'UserController@update')->name('users.update');

// Bảng Phone 
Route::get('/phones', 'PhoneController@index')->name('phones.index');
 
// Form thêm người dùng. create này nếu link là /users/create thì đưa dòng này lên trước route show vì laravel tưởng create là id
Route::get('/phones/create', 'PhoneController@create')->name('phones.create');
 
// Thêm người dùng
Route::post('/phones', 'PhoneController@store')->name('phones.store');
// Xem chi tiết 1 người dùng
Route::get('/phones/{id}', 'PhoneController@show')->name('phones.show');
// Xóa người dùng
Route::delete('/phones/{id}', 'PhoneController@destroy')->name('phones.destroy');
// Form sửa người dùng
Route::get('/phones/{id}/edit', 'PhoneController@edit')->name('phones.edit');
// Cập nhật
Route::put('phones/{id}', 'PhoneController@update')->name('phones.update');

