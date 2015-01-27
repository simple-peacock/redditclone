<div class="uk-margin-bottom">
    
    @if (!$full)
	<div class="votecol">
  		<a class="arrow up" href="{{ URL::route('upVote', array('id' => $post->id)) }}"></a>
  		<div class="score">{{ $post->points }}</div>
  		<a class="arrow down" href="{{ URL::route('downVote', array('id' => $post->id)) }}"></a>
	</div>
	@endif
    
    <div class="uk-text-bold">
    	@if ($full)
    		<h2>{{ $post->title }}</h2>
    	@elseif ($post->islink == true) 
    		<a class="uk-text-large" href="{{ $post->link }}">{{ $post->title }}</a>
    	@else
    		<a class="uk-text-large" href="{{ $post->getURL(); }}">{{ $post->title }}</a>
    	@endif
  	</div>
    
    <div class="">
    	@if ($full)
    		{{ $post->text }}
    	@endif
    </div>
    
    <div class="uk-article-meta">
    	Posted {{ $post->created_at->diffForHumans() }} by <a href="{{ URL::route('viewProfile', array('username' => $post->user->username)) }}">{{ $post->user->username }}</a>
    	<div class="uk-article-meta">
    	<a class="uk-link-muted" href="{{ $post->getURL(); }}#comments">{{ $post->getNumComments() }}</a>
    </div>
	</div>
</div>