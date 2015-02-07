<?php

class CommentController extends BaseController {


  /**
   *
   * Create a comment on a given post id
   *
   */

  public function createComment($id)
  {

    // get the post that the user commented on
    $user = User::findOrFail(Auth::id());

    // create a new comment
    $comment = new Comment();
    $comment->post_id = $id;
    $comment->comment = nl2br(Input::get('comment'));
    $comment->points = 0;

    // save the comment with a relation to the post
    $user->comments()->save($comment);

    // go back to the post
    return Redirect::route('viewPost', array('id' => $id));

  } // end createComment function

} // end CommentController
