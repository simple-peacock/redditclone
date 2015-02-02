
@if (Auth::check())
	<div>
    	<a href="{{ URL::route('newPost') }}" class="uk-button uk-button-primary uk-width-1-1 uk-button-large">New Post</a>
	</div>

@else

	<ul class="uk-tab" data-uk-tab="{connect:'#tab-loginregister'}">
  	
  		<li class=""><a href="">Login</a></li>
  		<li class=""><a href="">Register</a></li>
  	
  	</ul>
  	
  	<ul id="tab-loginregister" class="uk-switcher uk-margin">
  	
  		<li>@include('partials.loginform')</li>
		
		<li>@include('partials.registerform')</li>
	</ul>

@endif

