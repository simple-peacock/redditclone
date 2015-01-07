@extends('layouts.master')

@section('main-content')
    Main Content
    
    <div>
    	<a href="{{ URL::route('newPost') }}" class="uk-button">New Post</a>
    </div>
    
    @foreach ($posts as $post)
    <article class="uk-article">
      <h2 "uk-article-title">{{ $post->title }}</h2>
      <p class="uk-article-lead">{{ $post->text }}</p>
      <p class="uk-article-meta">Posted {{ $post->created_at->diffForHumans() }}</p>
    </article>
    @endforeach
@stop