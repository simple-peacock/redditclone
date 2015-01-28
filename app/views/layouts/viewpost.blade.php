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
					          			      		        			<div class="votecol">
  		<a class="arrow up" href="{{ URL::route('upVote', array('id' => $post->id)) }}"></a>
  		<div class="score">{{ $post->points }}</div>
  		<a class="arrow down" href="{{ URL::route('downVote', array('id' => $post->id)) }}"></a>
	</div>
        			<div>
        			<article class="uk-comment">
        		
        		    	<header class="uk-comment-header">
        					<img class="uk-comment-avatar" src="img/placeholder_avatar.svg" alt="">
        					<div class="uk-comment-title">{{ $comment->user->username }}</div>
        					<div class="uk-comment-meta">{{ $comment->created_at->diffForHumans() }}</div>
    					</header>
          			
          			

          			
          				<div class="uk-comment-body">{{ $comment->comment }}</div>
          			
        			</article>
        			</div>
        			
        		</li>
      		@endforeach
      		</ul>
    	@endif
  	</div>
	
	@if (Auth::check())
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
	@endif
	
@stop