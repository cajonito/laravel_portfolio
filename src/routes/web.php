<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::post('/post', 'PostController@create');
Route::get('/post/reset', 'PostController@reset');

Route::get('/todo', 'TodoController@index');
Route::post('/todo', 'TodoController@create');
Route::post('/todo/update', 'TodoController@update');
Route::post('/todo/delete', 'TodoController@delete');
