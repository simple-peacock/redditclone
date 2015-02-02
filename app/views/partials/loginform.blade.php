  	
<form action="{{ URL::route('postLogin') }}" method="post" class="uk-form">
    	
	{{ Form::token() }}
    	
    <div class="uk-form-row">
      	<input name="username" type="text" placeholder="Username" class="uk-width-1-1">
    </div>

	<div class="uk-form-row">
      	<input name="password" type="password" placeholder="Password" class="uk-width-1-1">
    </div>

    <div class="uk-form-row">
    	<button class="uk-button">Login</button>
    </div>
  	
  </form>