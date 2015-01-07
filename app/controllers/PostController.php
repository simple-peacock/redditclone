<?php

class PostController extends BaseController {

	// show all posts
	public function index()
	{
      	return View::make('layouts.main-content', array('posts' => Post::all()));
	}
	
	
	
	// create new post with a form
	public function newPost()
	{
		return View::make('layouts.newpost');	
	}
	
	  
	  
	  
  	public function createPost()
  	{
    	
    	$post = new Post();
    	$post->title = Input::get('title');
    	$post->text = nl2br(Input::get('text'));
    	$post->save();

    	//return Redirect::route('viewPost', array('id' => $post->id));
    	return Redirect::route('index');
  	}



  	// view a post by id
  	public function viewPost($postid)
  	{
    	
    	$post = Post::findOrFail($postid);

    	return View::make('layouts.viewpost', array(
      		'post' => $post
    	));
  	}

}