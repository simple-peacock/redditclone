@extends('layouts.master')

@section('main-content')
    Main Content
    @foreach ($posts as $post)
      <h1>{{ $post->title }}</h2>
      <p>{{ $post->text }}</p>
    @endforeach
@stop