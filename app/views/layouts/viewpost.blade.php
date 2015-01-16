@extends('layouts.master')

@section('main-content')
    
	@include('partials.post', array('post' => $post, 'full' => true))

	<div class="uk-margin-large-top">
    	<h4>Comments</h4>
    	@if (count($post->comments) === 0)
      		<p>No comments yet on this post.</p>
    	@else
    		<ul class="uk-comment-list" id="comments">
      		@foreach ($post->comments as $comment)
        		<li>
        		<div class="uk-comment">
          			<!-- <p><strong>{{ $comment->name }} says...</strong></p> -->
          			<div class="uk-comment-body">{{ $comment->comment }}</div>
        		</div>
        		</li>
      		@endforeach
      		</ul>
    	@endif
  	</div>
	
	<h4>New Comment:</h4>
  	
  	<form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post" class="uk-form">
    	<fieldset>
    	<div class="uk-form-row">
      		<textarea class="uk-form-width-large" rows="10" name="comment" placeholder="Write here..."></textarea>
    	</div>
    	<div class="uk-form-row">
    		<button class="uk-button">Submit</button>
    	</div>
    	</fieldset>
  	</form>

@stop