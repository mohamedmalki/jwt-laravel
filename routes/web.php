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

Route::get('/', [
	'as' => 'auth.login.index',
	'uses' => 'Auth\LoginController@index'
]);

Route::post('/', [
	'as' => 'auth.login.post',
	'uses' => 'Auth\LoginController@post'
]);


Route::group(['middleware' => 'auth'], function() {

	Route::resource('users','UserController');
	Route::resource('posts','PostController');

});
