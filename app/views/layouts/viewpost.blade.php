@extends('layouts.master')

@section('index')

  @if(Session::has('message'))

    <p class="uk-alert">{{ Session::get('message') }}</p>

  @endif

	@include('partials.post', array('post' => $post, 'full' => true))

	<div class="uk-margin-large-top">

      <p class="uk-text-bold">Comments:</p>

      @if (count($post->comments) === 0)

        There are no comments yet.

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

      <p class="uk-text-bold">Leave a comment:</p>

      @include('partials.commentform')

    </div>

  @else

    <div class="uk-margin-large-top">

      <p>Please login to leave a comment.</p>

    </div>

  @endif



@stop
