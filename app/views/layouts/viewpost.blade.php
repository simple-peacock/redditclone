@extends('layouts.master')

@section('main-content')
    View Post
    
	@include('partials.post', array('post' => $post))

	show all comments
	
	add a new comment - form

@stop