<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('posts.show',$post->id) }}"><img src="{{ $post->thumbnail->getUrl('thumb') }}" alt="image" class="rounded img-fluid"></a>
            </div>
            <div class="col-md-8">
                <h4 class="card-title">{{ $post->title }}</h4>
                <small class="text-muted">{{ $post->author->fullname }} - Posted at: {{ humanize_date($post->created_at) }}</small><br><br>
                <small class="text-muted">{{ substr(preg_replace ('/<[^>]*>/', ' ', $post->content), 0, 200) }}...</small>
            </div>
        </div>
    </div>
</div>