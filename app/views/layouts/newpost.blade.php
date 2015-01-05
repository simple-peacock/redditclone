@extends('layouts.master')

@section('main-content')
  <h3>New Post</h3>
  <form action="{{ URL::route('createPost') }}" method="post" class="uk-form">
    <div class="uk-form-row">
      <input name="title" type="text" placeholder="Title" />
    </div>
    <div class="uk-form-row">
      <textarea name="text" placeholder="Write here..."></textarea>
    </div>
    <div class="uk-form-row">
    	<button class="uk-button">Submit</button>
    </div>
  </form>

@stop
