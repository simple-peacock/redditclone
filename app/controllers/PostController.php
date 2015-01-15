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
    	$post->points = 0;
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
  	
  	
	// create a comment for a given post
  	public function createComment($id)
  	{
    	// get the post that the user commented on
    	$post = Post::findOrFail($id);

    	// create a new comment
    	$comment = new Comment();
    	$comment->comment = nl2br(Input::get('comment'));

    	// save the comment with a relation to the post
    	$post->comments()->save($comment);

    	// go back to the post
    	return Redirect::route('viewPost', array('id' => $post->id));
  	}
  	
  	public function downVote($id)
  	{
  	
  	}
  	
  	public function upVote($id)
  	{
  	
  	}

}