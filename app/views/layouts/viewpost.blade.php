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

      @include('partials.commentform')

    </div>

  @else

    <div class="uk-margin-large-top">

      <p>Please login to write a comment.</p>

    </div>

  @endif



@stop
