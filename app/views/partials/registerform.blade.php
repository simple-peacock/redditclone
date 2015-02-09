
@foreach($errors->all() as $error)

    <div class="uk-alert uk-alert-danger">{{ $error }}</div>

@endforeach

{{ Form::open(array('route' => 'postRegister', 'class' => 'uk-form')) }}

  <div class="uk-form-row">
    {{ Form::text('username', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Username')) }}
  </div>

  <div class="uk-form-row">
    {{ Form::email('email', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Email (optional)')) }}
  </div>

	<div class="uk-form-row">
    {{ Form::password('password', array('class' => 'uk-width-1-1', 'placeholder' => 'Password')) }}
  </div>

	<div class="uk-form-row">
    {{ Form::password('password_confirm', array('class' => 'uk-width-1-1', 'placeholder' => 'Confirm Password')) }}
  </div>

  <div class="uk-form-row">
    {{ Form::button('Register', array('class' => 'uk-button', 'type' => 'submit')) }}
  </div>

{{ Form::close() }}
