@extends('layouts.master')

@section('index')

	<h3>{{ $user->username }}'s Profile</h3>

	<div>

    <h3>Posts by {{ $user->username }}: </h3>

		@foreach ($user->posts as $post)

			@include('partials.post', array('post' => $post, 'full' => false))

		@endforeach

	</div>

	<div>

    <h3>Comments by {{ $user->username }}: </h3>

		@foreach ($user->comments as $comment)

			<a class="uk-text-large" href="{{ $post->getURL(); }}">{{ $post->title }}</a></br>

			{{ $comment->comment }}

		@endforeach

	</div>

@stop
