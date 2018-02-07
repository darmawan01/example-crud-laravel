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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostsController@index')->name('post.index');
Route::get('/post/create', 'PostsController@create')->name('post.create');
Route::post('/post/create', 'PostsController@store')->name('post.store');
Route::get('/post/{post}/edit', 'PostsController@edit')->name('post.edit');
Route::patch('/post/{post}/update', 'PostsController@update')->name('post.update');
Route::delete('/post/{post}/destroy', 'PostsController@destroy')->name('post.destroy');
