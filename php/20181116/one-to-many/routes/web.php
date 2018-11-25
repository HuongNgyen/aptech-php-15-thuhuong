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
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/post/create','PostController@create')->name('posts.create');
Route::get('/posts/{id}','PostController@show')->name('posts.show');

Route::post('/posts','PostController@store')->name('posts.store');
Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');

/*Route::get('/posts', function () {
    $posts = App\Post::with('category')->get();
    return $posts;
});*/

Route::get('/cate/create','CategoryController@create')->name('categories.create');
Route::get('/index','CategoryController@index');
Route::get('/cate', 'CategoryController@demo')->name('categories.demo');
Route::get('/cate/{id}', 'CategoryController@show')->name('categories.show');
Route::post('/cate','CategoryController@store')->name('categories.store');
Route::delete('/cate/{id}','CategoryController@destroy')->name('categories.destroy');
Route::get('/cate/{id}/edit','CategoryController@edit')->name('categories.edit');
Route::put('/cate/{id}','CategoryController@update')->name('categories.update');

Route::get('/rela','PostCategoryController@index')->name('p-c.index');
Route::get('/rela/create', 'PostCategoryController@create')->name('p-c.create');
Route::get('/rela/{id}','PostCategoryController@show')->name('p-c.show');
Route::delete('/rela/{id}','PostCategoryController@destroy')->name('p-c.destroy');
Route::post('/rela', 'PostCategoryController@store')->name('p-c.store');
Route::get('/rela/{id}/edit', 'PostCategoryController@edit')->name('p-c.edit');
Route::put('/rela/{id}', 'PostCategoryController@update')->name('p-c.update');
