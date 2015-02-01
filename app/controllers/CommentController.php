<?php

class CommentController extends BaseController {	
	
	// create a comment for a given post
  	public function createComment($id)
  	{
    	// get the post that the user commented on
    	//$post = Post::findOrFail($id);
    	$user = User::findOrFail(Auth::id());

    	// create a new comment
    	$comment = new Comment();
    	$comment->post_id = $id;
    	$comment->comment = nl2br(Input::get('comment'));
    	$comment->points = 0;

    	// save the comment with a relation to the post
    	//$post->comments()->save($comment);
    	$user->comments()->save($comment);

    	// go back to the post
    	return Redirect::route('viewPost', array('id' => $id));
  	}
  	
  	
  	public function upVoteComment($id)
  	{
  		$comment = Comment::findOrFail($id);
  		$comment->points++;
  		$comment->save();
  		
  		return Redirect::back();
  	}
  	
  	
  	public function downVoteComment($id)
  	{
  		$comment = Comment::findOrFail($id);
  		$comment->points--;
  		$comment->save();
  		
  		return Redirect::back();
  	}
}