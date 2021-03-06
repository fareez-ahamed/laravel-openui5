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

Route::get('/simple', function()
{
	return View::make('simple');
});

Route::get('/',function()
{
	return View::make('home');
});

Route::group(['prefix' => 'api'],function(){
	Route::resource('customer','CustomerController');
});