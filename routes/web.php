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

Route::get('/index', 'PagesController@index')->name('home.index');
Route::redirect('/','index');
Route::redirect('/home','index');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/about', 'PagesController@about')->name('about');
