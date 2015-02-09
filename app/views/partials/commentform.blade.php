<!-- <form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post" class="uk-form"> -->
{{ Form::open(array('route' => array('createComment', $post->id), 'class' => 'uk-form')) }}


  <fieldset>

    <div class="uk-form-row">
        <textarea class="uk-form-width-large" rows="10" name="comment" placeholder="Write here..."></textarea>
    </div>

    <div class="uk-form-row">
       <button class="uk-button">Submit</button>
    </div>

  </fieldset>

{{ Form::close() }}
