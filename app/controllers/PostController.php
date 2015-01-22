<?php

class PostController extends BaseController {

	// show all posts
	public function index()
	{
      	return View::make('layouts.main-content', array('posts' => Post::orderBy('points','DESC')->paginate(2)));
	}
	
	
	
	// create new post with a form
	public function newPost()
	{
		return View::make('layouts.newpost');	
	}
	
	  
	  
	  
  	public function createPost()
  	{
    	
    	$user = User::findOrFail(Auth::id());
    	
    	$post = new Post();
    	$post->title = Input::get('title');
    	$post->text = nl2br(Input::get('text'));
    	$post->points = 0;
    	
    	// $post->save();
    	
    	$user->posts()->save($post);

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
    	$user = User::findOrFail(Auth::id());

    	// create a new comment
    	$comment = new Comment();
    	$comment->comment = nl2br(Input::get('comment'));

    	// save the comment with a relation to the post
    	//$post->comments()->save($comment);
    	$user->posts()->comments()->save($comment);

    	// go back to the post
    	return Redirect::route('viewPost', array('id' => $post->id));
  	}
  	
  	public function upVote($id)
  	{
  		$post = Post::findOrFail($id);
  		$post->points++;
  		$post->save();
  		
  		return Redirect::route('index');
  	}
  	
  	public function downVote($id)
  	{
  		$post = Post::findOrFail($id);
  		$post->points--;
  		$post->save();
  		
  		return Redirect::route('index');
  	}

}