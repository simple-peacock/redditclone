@extends('layouts.master')

@section('index')

	<h3>{{ $user->username }}'s Profile</h3>

	<div>

    <h3>Posts by {{ $user->username }}: </h3>

		@foreach ($user->posts as $post)

		  {{ $post->title }}</br>

		@endforeach

	</div>

	<div>

    <h3>Comments by {{ $user->username }}: </h3>

		@foreach ($user->comments as $comment)

			{{ $comment->comment }}</br>

		@endforeach

	</div>

@stop
