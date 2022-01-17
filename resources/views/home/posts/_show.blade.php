<div class="card">
    <div class="card-list ">
        <div class="card-list-group">
            <div class="card-list-img">
                <a href="{{ route('posts.show',$post->id) }}"><img src="{{ $post->thumbnail->getUrl('thumb') }}" alt="image" class="card-img"></a>
            </div>
            <div class="card-element">
                <a href="{{ route('posts.show',$post->id) }}"><h4 class="card-title">{{ $post->title }}</h4></a>
                <p class="card-small">{{ $post->author->fullname }} - Posted at: {{ humanize_date($post->created_at) }}</p>
                <p class="card-text">{{ substr(preg_replace ('/<[^>]*>/', ' ', $post->content), 0, 300) }} ...</p>
            </div>
        </div>
    </div>
</div>
