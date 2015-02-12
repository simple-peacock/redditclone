<?php



/**
 *
 * User Authentication
 *
 */

// register user- POST
Route::post('/register', array(
	'before' => 'csrf',
	'uses' => 'UsersController@postRegister',
	'as' => 'postRegister'
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

// view user profile
Route::get('/profile/{username}', array(
	'uses' => 'UsersController@viewProfile',
	'as' => 'viewProfile'
));



/**
 *
 * Posts
 *
 */

// main view - show all posts
Route::get('/', array(
	'uses' => 'PostController@index',
	'as' => 'index'
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
	'before' => 'csrf',
	'uses' => 'PostController@createPost',
	'as' => 'createPost'
));

// view a single post
Route::get('/{id}', array(
	'uses' => 'PostController@viewPost',
	'as' => 'viewPost'
));

// vote on a post or comment
Route::get('/vote/{type}/{id}/{upordown}', array(
	'uses' => 'PostController@vote',
	'as' => 'vote'
));



/**
 *
 * Comments
 *
 */

// create a new comment for a given post
Route::post('/{id}/newcomment', array(
	'before' => 'auth',
	'as' => 'createComment',
	'uses' => 'CommentController@createComment'
));
