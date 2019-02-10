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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/users', 'Admin\UserController@index')->name('users');



Auth::routes();

Route::get('/user', 'UserController@index')->name('users');
Route::get('/create', 'UserController@create')->name('create');
Route::get('/user/{id}/edit', 'UserController@edit')->name('edit');


