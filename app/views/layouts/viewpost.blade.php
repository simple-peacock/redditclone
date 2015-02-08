@extends('layouts.master')

@section('index')

  @if(Session::has('message'))

    <p class="uk-alert">{{ Session::get('message') }}</p>

  @endif

	@include('partials.post', array('post' => $post, 'full' => true))

	<div class="uk-margin-large-top">

      <p class="uk-text-bold">Comments:</p>

      @if (count($post->comments) === 0)

        No comments yet on this post.

      @else

        <ul class="uk-comment-list" id="comments">

          @foreach ($comments as $comment)

            @include('partials.comment')

          @endforeach

        </ul>

    	@endif
  </div>

	@if (Auth::check())

    <div class="uk-margin-large-top">

      <p class="uk-text-bold">New Comment:</p>

      <form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post" class="uk-form">

        <fieldset>

        	<div class="uk-form-row">
        			<textarea class="uk-form-width-large" rows="10" name="comment" placeholder="Write here..."></textarea>
        	</div>

        	<div class="uk-form-row">
        	   <button class="uk-button">Submit</button>
        	</div>

      	</fieldset>

      <form>

    </div>

  @else

    <div class="uk-margin-large-top">

      <p>Please login to write a comment.</p>

    </div>

  @endif



@stop
