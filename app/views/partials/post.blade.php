<article class="uk-article">
    
	<div class="votecol">
  		<div class="arrow up"></div>
  		<div class="score">12</div>
  		<div class="arrow down"></div>
	</div>
    
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
    	@else
    		{{ str_limit($post->text, 100) }}
    	@endif
    </div>
    
    <div class="uk-article-meta">
    	Posted {{ $post->created_at->diffForHumans() }}
    	<a class="uk-link-muted" href="{{ $post->getURL(); }}#comments">{{ $post->getNumComments() }}</a>
    </div>

</article>