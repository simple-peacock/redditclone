<article class="uk-article">
    
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
    	Posted {{ $post->created_at->diffForHumans() }}
    	<a class="uk-link-muted" href="{{ $post->getURL(); }}#comments">{{ $post->getNumComments() }}</a>
    </div>

</article>