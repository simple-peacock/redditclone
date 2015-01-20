<?php

class Post extends Eloquent {

	// one-to-many relationship with the Comment model
  	public function comments()
  	{
    	return $this->hasMany('Comment');
  	}
  	
  	// Posts belong to Users
  	public function user()
  	{
  		return $this->belongsTo('User');
  	
  	}
  	
  	// helper function to get the URL of a post
  	public function getURL()
  	{
    	return URL::action('viewPost', array('id' => $this->id));
  	}
	
	// helper function to get a string of the number of comments
  	public function getNumComments()
  	{
    	$num = $this->comments()->count();

    	if ($num == 1)
    	{
      		return '1 comment';
    	} elseif ($num == 0)
    	{
    		return 'comment';
    	}

    	return $num . ' comments';
  	}

}