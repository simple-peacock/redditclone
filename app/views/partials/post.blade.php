<article class="uk-article">
    <div class="uk-text-bold"><a href="{{ $post->getURL(); }}">{{ $post->title }}</a></div>
    <div class="">{{ $post->text }}</div>
    <div class="uk-article-meta">
    	Posted {{ $post->created_at->diffForHumans() }}
    	<a class="uk-link-muted" href="{{ $post->getURL(); }}#comments">{{ $post->getNumComments() }}</a>
    </div>
</article>