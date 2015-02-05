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

    	if (Input::has('text')) {

    		$post->text = nl2br(Input::get('text'));

    	} elseif (Input::has('url')) {

    		$post->islink = true;
    		$post->link = Input::get('url');
    	}

    	$post->points = 0;

    	$user->posts()->save($post);

    	//return Redirect::route('viewPost', array('id' => $post->id));
    	return Redirect::route('index');
  	}



  	// view a post by id
  	public function viewPost($postid)
  	{

    	$post = Post::findOrFail($postid);

		$comments = $post->comments()->orderBy('points', 'DESC')->get();

    	return View::make('layouts.viewpost', array(
      		'post' => $post, 'comments' => $comments
    	));
  	}



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
		}


}
