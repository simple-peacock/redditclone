<?php

class PostController extends BaseController {


	/**
	 *
	 * Posts index - show all posts on the front page
	 *
	 */

	public function index()
	{
    return View::make('layouts.index', array('posts' => Post::orderBy('points','DESC')->paginate(10)));
	}



	/**
	 *
	 * New Post - the view
	 *
	 */

	public function newPost()
	{
		return View::make('layouts.newpost');
	}



	/**
	 *
	 * New Post - function to create a post
	 *
	 */

	public function createPost()
	{

  	$user = User::findOrFail(Auth::id());

  	$post = new Post();
  	$post->title = Input::get('title');

  	if (Input::has('text')) {

  		$post->text = nl2br(Input::get('text'));

  	} elseif (Input::has('url')) {

			// validate that we have entered a correctly formatted URL
			$validator = Validator::make(array('url' => Input::get('url')),
				array(
						'url' => 'url'
				));

			if ($validator->passes()) {

	  		$post->islink = true;
	  		$post->link = Input::get('url');

			} else {

				return Redirect::back()->with('message', 'Invalid URL.')->withErrors($validator)->withInput();

			}
  	}

  	$post->points = 0;

  	$user->posts()->save($post);

  	return Redirect::route('index');

	}



	/**
	 *
	 * View a single post by id
	 *
	 */

	public function viewPost($postid)
	{

		$post = Post::findOrFail($postid);

		$comments = $post->comments()->orderBy('points', 'DESC')->get();

  	return View::make('layouts.viewpost', array(

			'post' => $post,
			'comments' => $comments

		));

	}



	/**
	 *
	 * Vote on a post or comment
	 *
	 */

	public function vote($type, $id, $upordown)
	{

		if(!Auth::check())
		{

			return Redirect::back()->with('message', 'Please login to vote!');

		} else {

			if($type == 'post') {

				$post = Post::findOrFail($id);

				if($upordown == 'up') {

					$post->points++;

				} elseif($upordown == 'down') {

					$post->points--;

				}

				$post->save();

				return Redirect::route('index');


			} elseif ($type == 'comment') {

				$comment = Comment::findOrFail($id);

				if($upordown == 'up') {

					$comment->points++;

				} elseif($upordown == 'down') {

					$comment->points--;

				}

				$comment->save();

				return Redirect::back();

			}
		}

	} // end of vote() function

} // end of PostController
