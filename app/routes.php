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



// default demo 
Route::get('/', function()
{
	return View::make('hello');
});



// test route
Route::get('/helloworld', function()
{
	return 'Hello, world!';
});
