@extends('layouts.master')

@section('index')

  <h3>New Post</h3>

  <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tab-content'}">

    <li class="uk-width-1-6"><a href="">Link</a></li>
  	<li class="uk-width-1-6"><a href="">Text Post</a></li>

  </ul>

  <ul id="tab-content" class="uk-switcher uk-margin">

  	<li>

      {{ Form::open(array('route' => 'createPost', 'class' => 'uk-form')) }}

    		<div class="uk-form-row">
          {{ Form::text('title', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Title')) }}
    		</div>

        <div class="uk-form-row">
          {{ Form::text('url', '', array('class' => 'uk-width-1-1', 'placeholder' => 'URL')) }}
    		</div>

        <div class="uk-form-row">
          {{ Form::button('Submit', array('class' => 'uk-button', 'type' => 'submit')) }}
    		</div>

      {{ Form::close() }}

    </li>


    <li>

      {{ Form::open(array('route' => 'createPost', 'class' => 'uk-form')) }}

        <div class="uk-form-row">
          {{ Form::text('title', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Title')) }}
    		</div>

        <div class="uk-form-row">
          {{ Form::textarea('text', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Write here...', 'rows' => 10)) }}
    		</div>

        <div class="uk-form-row">
          {{ Form::button('Submit', array('class' => 'uk-button', 'type' => 'submit')) }}
    		</div>

      {{ Form::close() }}

  	</li>

  </ul>

@stop
