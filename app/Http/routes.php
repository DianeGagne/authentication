<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/home');
});

Route::get('loggedin', 'SignInController@loggedin');

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses'=> 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

//beads routes
Route::get('beads', ['as' => 'beads', 'uses' => 'Beads\BeadsController@getBeads']);
Route::get('beads/{id}', 'Beads\BeadsController@show');
Route::get('favorites', ['as' => 'favorites', 'uses' => 'Beads\BeadsController@showFavorites']);
Route::post('favorites', ['as' => 'addFavorites', 'uses' => 'Beads\BeadsController@addFavorites']);