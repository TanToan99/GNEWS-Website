@extends('layouts.app')
@section('custom-css')
    <link rel="stylesheet" href="/css/post-detail.css" />
@endsection

@section('content')

    <div class="detail-container">
        <div class="detail-flex">
            <div class="detail-header">
                <div class="detail-title">
                    <h2>{{ $post->title }}</h2>
                    <div class="Detail-copyright">
                        <small class="text-muted">{{ $post->author->name }} -
                            {{ $post->created_at->toDateString() }}</small>
                        <a class="text-like" href="javascript:void(0)" onclick="like({{ $post->id }})">
                            @if ($post->liked())
                                <i class="fas fa-heart" id="likei{{ $post->id }}" style=" color: red;"></i>
                            @else
                                <i class="far fa-heart" id="likei{{ $post->id }}" style=" color: red;"></i>
                            @endif
                        </a>
                        <small id="likeCount">{{ $post->likeCount }} likes</small>
                    </div>
                </div>
                <img class="detail-img" src="{{ $post->thumbnail->getUrl() }}" alt="">
            </div>
            <div class="detail-content">
                <div class="detail-description">
                    {!! $post->content !!}
                </div>

            </div>
            <div class="detail-content">
                <div class="fb-comments" data-href="https://gnewsclub.com/post/{{ $post->id }}" data-width="100%"
                    data-numposts="5"></div>
            </div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=522765778912732&autoLogAppEvents=1"
                        nonce="2OTNCf7a"></script>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        function like(id) {
            console.log(id);
            let token = $("meta[name='csrf-token']").attr("content");
            $.post({
                type: 'POST',
                crossDomain: true,
                url: '/posts/like',
                data: {
                    'id': id,
                    '_token': token
                },
                success: function(data) {
                    document.getElementById('likeCount').innerText = data.like_total + " likes";
                    var $elem = $("#likei" + id);
                    if ($elem.hasClass("fas")) {
                        $elem.removeClass('fas');
                        $elem.addClass('far');
                    } else if ($elem.hasClass("far")) {
                        $elem.removeClass('far');
                        $elem.addClass('fas');
                    }
                },
                error: function(jqXHR, exception) {
                    console.log(jqXHR);
                }
            });
        };
    </script>
@endsection
