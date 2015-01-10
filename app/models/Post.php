<?php

class Post extends Eloquent {

	// helper function to get the URL of a post
  	public function getURL()
  	{
    	return URL::action('viewPost', array('id' => $this->id));
  	}
  
	// one-to-many relationship with the Comment model
  	public function comments()
  	{
    	return $this->hasMany('Comment');
  	}


}