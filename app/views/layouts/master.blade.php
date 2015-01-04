<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Reddit Clone in Laravel</title>
  {{ HTML::style('uikit/css/uikit.min.css') }}
</head>
<body>
<div class="uk-container">
<div class="uk-grid" data-uk-grid-margin>

<div class="uk-width-medium-3-4">
	@yield('main-content')
</div>

<div class="uk-width-medium-1-4">
	@yield('sidebar')
</div>

</div> 
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
{{ HTML::script('uikit/js/uikit.min.js') }} 

</body>
</html>