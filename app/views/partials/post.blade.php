<article class="uk-article">
    <h2 "uk-article-title"><a href="{{ $post->getURL(); }}">{{ $post->title }}</a></h2>
    <p class="uk-article-lead">{{ $post->text }}</p>
    <p class="uk-article-meta">Posted {{ $post->created_at->diffForHumans() }}</p>
</article>