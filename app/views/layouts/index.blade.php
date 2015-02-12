@extends('layouts.master')

@section('index')

  @if(Session::has('message'))

    <p class="uk-alert">{{ Session::get('message') }}</p>

  @endif

  @if (count($posts) === 0)

    <p class="lead">No content yet. <a href="{{ URL::route('newPost') }}">Add a new post!</a></p>

  @else



    @foreach ($posts as $post)

      @include('partials.post', array('post' => $post, 'full' => false))

    @endforeach

  @endif

  <ul class="uk-pagination">

    <li>{{ $posts->links('pagination::uikit') }}</li>

  </ul>

@stop
