@extends('layouts.master')

@section('main-content')

  	<h3>Login</h3>
  	
  	@if(Session::has('message'))
        <p class="uk-alert">{{ Session::get('message') }}</p>
    @endif
    
  	
  	<form action="{{ URL::route('postLogin') }}" method="post" class="uk-form">
    	
    	{{ Form::token() }}
    	
    	<div class="uk-form-row">
      		<input name="username" type="text" placeholder="Username">
    	</div>

		<div class="uk-form-row">
      		<input name="password" type="password" placeholder="Password">
    	</div>

    	<div class="uk-form-row">
    		<button class="uk-button">Login</button>
    	</div>
  	
  	</form>

@stop