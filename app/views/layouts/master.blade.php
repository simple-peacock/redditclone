<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Reddit Clone in Laravel</title>
  {{ HTML::style('uikit/css/uikit.almost-flat.min.css') }}
  {{ HTML::style('css/mystyles.css') }}
</head>
<body>
<div class="uk-container uk-container-center uk-margin-top">
	
	<nav class="uk-navbar uk-margin-bottom">
		
		<a href="" class="uk-navbar-brand">Reddit Clone in Laravel</a>
    	
    	<ul class="uk-navbar-nav">
        	<li><a href="{{ URL::route('index') }}">Home</a></li>
    	</ul>
    	
    	@if(Auth::check())
    		<div class="uk-navbar-flip">
    			<ul class="uk-navbar-nav ">
        	
    				<li class="uk-text-muted uk-navbar-content">Welcome, {{ Auth::user()->username }}</li>
    				<li><a href="{{ URL::route('logout') }}">Logout</a></li>
    		
    			</ul>
    		</div>
		@endif
	
	</nav>

<div class="uk-grid" data-uk-grid-margin>

<div class="uk-width-medium-3-4">
	@yield('main-content')
</div>

<div class="uk-width-medium-1-4">
	
	@include('layouts.sidebar')
	
</div>

</div> 
<footer class="uk-text-center uk-margin-large-top uk-margin-large-bottom">

<i class="uk-icon-github uk-icon-large"></i>

<p><a href="https://github.com/simple-peacock/redditclone">View source on GitHub</a></p>
</footer>

</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
{{ HTML::script('uikit/js/uikit.min.js') }} 

</body>
</html>