
{{ Form::open(array('route' => 'createPost', 'class' => 'uk-form')) }}

  <div class="uk-form-row">
    {{ Form::text('title', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Title')) }}
  </div>

  <div class="uk-form-row">
    {{ Form::textarea('text', '', array('class' => 'uk-width-1-1', 'placeholder' => 'Write here...', 'rows' => 10)) }}
  </div>

  <div class="uk-form-row">
    {{ Form::button('Submit', array('class' => 'uk-button', 'type' => 'submit')) }}
  </div>

{{ Form::close() }}
