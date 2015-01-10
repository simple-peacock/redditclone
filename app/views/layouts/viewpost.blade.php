@extends('layouts.master')

@section('main-content')
    View Post
    
	@include('partials.post', array('post' => $post))

	show all comments
	
	<h3>New Comment</h3>
  	
  	<form action="{{ URL::route('createComment') }}" method="post" class="uk-form">
    	<div class="uk-form-row">
      		<textarea name="text" placeholder="New Comment..."></textarea>
    	</div>
    	<div class="uk-form-row">
    		<button class="uk-button">Submit</button>
    	</div>
  	</form>

@stop