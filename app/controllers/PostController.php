<?php

class PostController extends BaseController {

	// show all posts
	public function index()
	{
      	return View::make('layouts.main-content', array('posts' => Post::all()));
	}
	
	// get single post - after posting
	
	// create new post with a form

}