<?php

class Post extends Eloquent {

  // helper function to get the URL of a post
  public function getURL()
  {
    return URL::action('viewPost', array('id' => $this->id));
  }


}