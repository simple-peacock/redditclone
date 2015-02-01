<li>
				
	<div class="votecol">
  		<a class="arrow up" href="{{ URL::route('upVoteComment', array('id' => $comment->id)) }}"></a>
  		<div class="score">{{ $comment->points }}</div>
  		<a class="arrow down" href="{{ URL::route('downVoteComment', array('id' => $comment->id)) }}"></a>
	</div>
        			
    <article class="uk-comment">
        		
        <header class="uk-comment-header">
        	<img class="uk-comment-avatar" src="img/placeholder_avatar.svg" alt="">
        	<div class="uk-comment-title">{{ $comment->user->username }}</div>
        	<div class="uk-comment-meta">{{ $comment->created_at->diffForHumans() }}</div>
    	</header>
          			
        <div class="uk-comment-body">{{ $comment->comment }}</div>
          			
    </article>
        			
</li>