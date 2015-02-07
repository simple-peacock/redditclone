<?php

class Comment extends Eloquent {


	/**
	 *
	 * Define a one-to-many relationship with the Post model
	 *
	 */

	public function post()
  {

			return $this->belongsTo('Post');

	}



	/**
	 *
	 * Define a one-to-many relationship with the User model
	 *
	 */

	public function user()
  {

		return $this->belongsTo('User');

	}

}
