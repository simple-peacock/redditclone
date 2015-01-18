@extends('layouts.master')

@section('main-content')

  	<h3>Register</h3>
  	
  	<form action="{{ URL::route('postRegister') }}" method="post" class="uk-form">
    	
    	<div class="uk-form-row">
      		<input name="username" type="text" placeholder="Username">
    	</div>
    	
    	<div class="uk-form-row">
      		<input name="email" type="email" placeholder="Email Address">
    	</div>

		<div class="uk-form-row">
      		<input name="password" type="password" placeholder="Password">
    	</div>

		<div class="uk-form-row">
      		<input name="password_confirm" type="password" placeholder="Confirm Password">
    	</div>

    	<div class="uk-form-row">
    		<button class="uk-button">Register</button>
    	</div>
  	
  	</form>

@stop