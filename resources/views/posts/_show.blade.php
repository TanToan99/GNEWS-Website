

<div class="card">
    <div class="card-header">
        <a href="{{ route('posts.show',$post->id) }}"><img src="{{ $post->thumbnail->getUrl() }}" alt="rover" /></a>
    </div>
    <div class="card-body">
        <div>
            <span class="tag">{{ $post->created_at->toDateString() }}</span>
                <h4 class="card-title">
                    {{ $post->title }}
                </h4>
            <span class="card-link">{{ substr(preg_replace ('/<[^>]*>/', ' ', $post->content), 0, 100) }}...</span>
        </div>
        <div class="card-option">
            <a href="{{ route('posts.show',$post->id) }}" class="card-link">Xem thêm</a>
            <a href="{{ route('posts.show',$post->id) }}"><i class="fal fa-angle-double-right"></i></a>
        </div>
    </div>
</div> 