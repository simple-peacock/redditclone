@extends('layouts.master')

@section('main-content')
    View Post
    
	@include('partials.post', array('post' => $post))

	<div>
    	<h3>Comments</h3>
    	@if (count($post->comments) === 0)
      		<p>No comments yet on this post.</p>
    	@else
      		@foreach ($post->comments as $comment)
        		<div>
          			<!-- <p><strong>{{ $comment->name }} says...</strong></p> -->
          			<blockquote>{{ $comment->comment }}</blockquote>
        		</div>
      		@endforeach
    	@endif
  	</div>
	
	<h3>New Comment</h3>
  	
  	<form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post" class="uk-form">
    	<div class="uk-form-row">
      		<textarea name="comment" placeholder="New Comment..."></textarea>
    	</div>
    	<div class="uk-form-row">
    		<button class="uk-button">Submit</button>
    	</div>
  	</form>

@stop