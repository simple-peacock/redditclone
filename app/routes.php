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

// register view
Route::get('/register', array(
	'uses' => 'UsersController@getRegister',
	'as' => 'getRegister'
));

// register - POST
Route::post('/register', array(
	'before' => 'csrf',
	'uses' => 'UsersController@postRegister',
	'as' => 'postRegister'
));

// login view
Route::get('/login', array(
	'uses' => 'UsersController@getLogin',
	'as' => 'getLogin'
));

// login - POST
Route::post('/login', array(
	'before' => 'csrf',
	'uses' => 'UsersController@postLogin',
	'as' => 'postLogin'
));

// logout
Route::get('/logout', array(
	'uses' => 'UsersController@logout',
	'as' => 'logout'
));

// create post - the form
Route::get('/new', array(
	'before' => 'auth',
	'uses' => 'PostController@newPost',
	'as' => 'newPost'
));


// create post - POST
Route::post('/new', array(
	'before' => 'auth',
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
	'before' => 'auth',
	'as' => 'createComment',
	'uses' => 'PostController@createComment'
));

// up vote a post
Route::get('/{id}/upvotep', array(
	'uses' => 'PostController@upVotePost',
	'as' => 'upVotePost'
));

// down vote a post
Route::get('/{id}/downvotep', array(
	'uses' => 'PostController@downVotePost',
	'as' => 'downVotePost'
));

// up vote a comment
Route::get('/{id}/upvotec', array(
	'uses' => 'PostController@upVoteComment',
	'as' => 'upVoteComment'
));

// down vote a comment
Route::get('/{id}/downvotec', array(
	'uses' => 'PostController@downVoteComment',
	'as' => 'downVoteComment'
));

// view user profile
Route::get('/profile/{username}', array(
	'uses' => 'UsersController@viewProfile',
	'as' => 'viewProfile'
));





