@extends('layouts.master')

@section('main-content')

  	<h3>New Post</h3>
  	
  	<ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tab-content'}">
  	
  		<li class="uk-width-1-6"><a href="">Link</a></li>
  		<li class="uk-width-1-6"><a href="">Text Post</a></li>
  	
  	</ul>
  	
  	<ul id="tab-content" class="uk-switcher uk-margin">
  	
  		<li>
  		
  	  	<form action="{{ URL::route('createPost') }}" method="post" class="uk-form">
    		<div class="uk-form-row">
      			<input class="uk-width-1-1" name="title" type="text" placeholder="Title" />
    		</div>
    		<div class="uk-form-row">
      			<input class="uk-width-1-1" name="url" type="text" placeholder="URL" />
    		</div>
    		<div class="uk-form-row">
    			<button class="uk-button">Submit</button>
    		</div>
  		</form>
  	
  		</li>
  	
  	
  		<li>
  		
  		<form action="{{ URL::route('createPost') }}" method="post" class="uk-form">
    		<div class="uk-form-row">
      			<input class="uk-width-1-1" name="title" type="text" placeholder="Title" />
    		</div>
    		<div class="uk-form-row">
      			<textarea class="uk-width-1-1" rows="10" name="text" placeholder="Write here..."></textarea>
    		</div>
    		<div class="uk-form-row">
    			<button class="uk-button">Submit</button>
    		</div>
  		</form>
  	
  		</li>
  	
  	</ul>

@stop
