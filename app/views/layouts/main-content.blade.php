@extends('layouts.master')

@section('main-content')
    
    @if (count($posts) === 0)
    	<p class="lead">No content yet. <a href="{{ URL::route('newPost') }}">Add a new post!</a></p>
  	@else
    	@foreach ($posts as $post)
			@include('partials.post', array('post' => $post))
    	@endforeach
    @endif
    
    <div>
    	<a href="{{ URL::route('newPost') }}" class="uk-button">New Post</a>
    </div>
@stop