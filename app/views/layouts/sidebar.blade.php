
@if (Auth::check())
	<div>
    	<a href="{{ URL::route('newPost') }}" class="uk-button uk-button-primary uk-width-1-1 uk-button-large">New Post</a>
	</div>

@else

	@include('partials.loginform')

@endif

