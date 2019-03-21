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

Route::get('/', 'dashboardController@index')->name('dashboard');
Route::get('setting', 'dashboardController@setting')->name('setting');
Route::get('search', 'dashboardController@search')->name('search');
Route::get('updatePass', 'dashboardController@updatePass')->name('updatePass');

Route::resource('category', 'categoryController');
Route::resource('news', 'newsController');

Route::post('/updatepass' , 'dashboardController@update_pass')->name('updatepass');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
