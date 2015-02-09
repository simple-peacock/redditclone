
{{ Form::open(array('route' => array('createComment', $post->id), 'class' => 'uk-form')) }}

  <fieldset>

    <div class="uk-form-row">
      {{ Form::textarea('comment', '', array('class' => 'uk-form-width-large', 'placeholder' => 'Write here...', 'rows' => 10)) }}
    </div>

    <div class="uk-form-row">
      {{ Form::button('Submit', array('class' => 'uk-button', 'type' => 'submit')) }}
    </div>

  </fieldset>

{{ Form::close() }}
