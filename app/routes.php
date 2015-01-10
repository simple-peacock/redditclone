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


// main view - show all posts
Route::get('/', array(
	'uses' => 'PostController@index',
	'as' => 'index'
));


// create post - the form
Route::get('/new', array(
	'uses' => 'PostController@newPost',
	'as' => 'newPost'
));


// create post - POST
Route::post('/new', array(
	'uses' => 'PostController@createPost',
	'as' => 'createPost'
));


// view a single post
Route::get('/{id}', array(
	'uses' => 'PostController@viewPost',
	'as' => 'viewPost'
));

// create a new comment for a given post
Route::post('/{id}/newcomment', array(
  'as' => 'createComment',
  'uses' => 'PostController@createComment'
));