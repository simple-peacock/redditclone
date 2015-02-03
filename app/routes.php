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
	'uses' => 'PostController@createPost',
	'as' => 'createPost'
));

// view a single post
Route::get('/{id}', array(
	'uses' => 'PostController@viewPost',
	'as' => 'viewPost'
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

// up vote a comment
Route::get('/{id}/upvotec', array(
	'uses' => 'CommentController@upVoteComment',
	'as' => 'upVoteComment'
));

// down vote a comment
Route::get('/{id}/downvotec', array(
	'uses' => 'CommentController@downVoteComment',
	'as' => 'downVoteComment'
));
