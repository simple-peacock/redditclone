  
@foreach($errors->all() as $error)
    <div class="uk-alert uk-alert-danger">{{ $error }}</div>
@endforeach
    
  	
<form action="{{ URL::route('postRegister') }}" method="post" class="uk-form">
    	
    {{ Form::token() }}
    	
    <div class="uk-form-row">
      	<input name="username" type="text" placeholder="Username" class="uk-width-1-1">
    </div>
    	
    <div class="uk-form-row">
      	<input name="email" type="email" placeholder="Email (optional)" class="uk-width-1-1">
    </div>

	<div class="uk-form-row">
      	<input name="password" type="password" placeholder="Password" class="uk-width-1-1">
    </div>

	<div class="uk-form-row">
      	<input name="password_confirm" type="password" placeholder="Confirm Password" class="uk-width-1-1">
    </div>

    <div class="uk-form-row">
    	<button class="uk-button">Register</button>
    </div>
  	
</form>