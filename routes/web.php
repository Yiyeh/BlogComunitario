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

Route::get('/', 'PageController@welcome');

Auth::routes();

Route::get('/p/', ['as' => 'users.posts', 'uses' => 'PageController@posts'] );

Route::get('/p/{slug?}', 'PageController@post');

Auth::routes();

