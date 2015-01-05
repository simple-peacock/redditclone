@extends('layouts.master')

@section('main-content')
    Main Content
    
    <a href="{{ URL::route('newPost') }}" class="uk-button">
    New Post
  	</a>
    
    @foreach ($posts as $post)
      <h1>{{ $post->title }}</h2>
      <p>{{ $post->text }}</p>
    @endforeach
@stop