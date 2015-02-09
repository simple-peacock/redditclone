@extends('layouts.master')

@section('index')

  <h3>New Post</h3>

  <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tab-content'}">

    <li class="uk-width-1-6"><a href="">Link</a></li>
  	<li class="uk-width-1-6"><a href="">Text Post</a></li>

  </ul>

  <ul id="tab-content" class="uk-switcher uk-margin">

  	<li>@include('partials.linkpostform')</li>

    <li>@include('partials.textpostform')</li>

  </ul>

@stop
