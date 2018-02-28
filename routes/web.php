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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/sobre-nos', 'AboutController@index')->name('about');
Route::get('/formularios', 'FormsController@index')->name('forms');
Route::match(['get', 'post'], '/contato', 'ContactController@index')->name('contact');