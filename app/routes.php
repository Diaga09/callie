<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// home
Route::get('/', function()
{
	return View::make('application')->with('title', 'Home');
});

//login

Route::get('login', ['as'   => 'login_url', 'uses' => 'HomeController@login']);
Route::post('login', ['uses' => 'HomeController@signin']);

// register

Route::get('register', ['as' => 'register_url' , 'uses' => 'UsersController@create']);