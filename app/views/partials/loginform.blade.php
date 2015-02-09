
{{ Form::open(array('route' => 'postLogin', 'class' => 'uk-form')) }}

  <div class="uk-form-row">
		{{ Form::text('username', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Username')) }}
  </div>

	<div class="uk-form-row">
		{{ Form::password('password', array('class' => 'uk-width-1-1', 'placeholder' => 'Password')) }}
  </div>

  <div class="uk-form-row">
		{{ Form::button('Login', array('class' => 'uk-button', 'type' => 'submit')) }}
  </div>

{{ Form::close() }}
