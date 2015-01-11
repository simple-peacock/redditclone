@extends('layouts.master')

@section('main-content')

	<div>
    	<a href="{{ URL::route('index') }}" class="uk-button">Back Home</a>
	</div>

  	<h3>New Post</h3>
  	<form action="{{ URL::route('createPost') }}" method="post" class="uk-form">
    	<div class="uk-form-row">
      		<input class="uk-form-width-large" name="title" type="text" placeholder="Title" />
    	</div>
    	<div class="uk-form-row">
      		<textarea class="uk-form-width-large" rows="10" name="text" placeholder="Write here..."></textarea>
    	</div>
    	<div class="uk-form-row">
    		<button class="uk-button">Submit</button>
    	</div>
  	</form>

@stop
