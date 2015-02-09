
{{ Form::open(array('route' => 'createPost', 'class' => 'uk-form')) }}

  <div class="uk-form-row">
    {{ Form::text('title', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Title')) }}
  </div>

  <div class="uk-form-row">
    {{ Form::text('url', '', array('class' => 'uk-width-1-1', 'placeholder' => 'URL')) }}
  </div>

  <div class="uk-form-row">
    {{ Form::button('Submit', array('class' => 'uk-button', 'type' => 'submit')) }}
  </div>

{{ Form::close() }}
