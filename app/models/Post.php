<?php

class Post extends Eloquent {

  /**
   *
   * Define a one-to-many relationship with the Comment model
   *
   */

	public function comments()
	{
  	return $this->hasMany('Comment');
	}



  /**
   *
   * posts belong to users
   *
   */

	public function user()
	{
		return $this->belongsTo('User');

	}



  /**
   *
   * Helper function to get the URL of a post
   *
   */

	public function getURL()
	{
  	return URL::action('viewPost', array('id' => $this->id));
	}



  /**
   *
   * Helper function to get the number of comments as a string
   *
   */

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
