@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="css/news.css" />
@endsection

@section('content')
    @include('shared.slide')
    <div class="news">
        <div class="title">
            <h1>TIN NỔI BẬT</h1>
        </div>

        <div class="card-container">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <img src="{{ $post->thumbnail->getUrl() }}" alt="rover" />
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="tag">{{ $post->created_at }}</span>
                            <h4 class="card-title">
                                {{ $post->title }}
                            </h4>
                            <span class="card-link">{{ substr(preg_replace ('/<[^>]*>/', ' ', $post->content), 0, 100) }}...</span>
                        </div>
                        <div class="card-option">
                            <a href="{{ route('posts.show',$post->id) }}" class="card-link">Xem thêm</a>
                            <a href="{{ route('posts.show',$post->id) }}"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
