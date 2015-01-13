<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Reddit Clone in Laravel</title>
  {{ HTML::style('uikit/css/uikit.almost-flat.min.css') }}
</head>
<body>
<div class="uk-container uk-container-center uk-margin-top">
	
	<nav class="uk-navbar uk-margin-bottom">
    	<ul class="uk-navbar-nav">
        	<li class="uk-active"><a href="">Home</a></li>
        	<li><a href="">About</a></li>
        	<li class="uk-parent"><a href="">Login</a></li>
    	</ul>
	</nav>

<div class="uk-grid" data-uk-grid-margin>

<div class="uk-width-medium-3-4">
	<h1 class="uk-heading-large">Reddit Clone in Laravel</h1>
	@yield('main-content')
</div>

<div class="uk-width-medium-1-4">
	
	@include('layouts.sidebar')
	
</div>

</div> 
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
{{ HTML::script('uikit/js/uikit.min.js') }} 

</body>
</html>