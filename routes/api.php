<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('login',[
	'as' => 'login.login',
	'uses' => 'Api\Auth\LoginController@login'
]);

Route::get('/refresh',[
	'as' => 'login.refresh',
	'uses' => 'Api\Auth\LoginController@refresh'
]);

Route::get('/posts',[
	'as' => 'posts.index',
	'uses' => 'Api\PostController@index'
]);

Route::get('/posts/self',[
	'as' => 'posts.self',
	'uses' => 'Api\PostController@slef'
]);

Route::post('/posts',[
	'as' => 'posts.store',
	'uses' => 'Api\PostController@store'
]);