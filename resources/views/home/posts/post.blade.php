@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="/css/post-detail.css" />

@endsection

@section('content')

<div class="detail-container">
    <div class="detail-flex">
        <div class="detail-header">
            <div class="detail-title">
                <h2 >{{ $post->title }}</h2>
                <div class="Detail-copyright">
                    <small class="text-muted">{{ $post->author->name }} - Posted at: {{ $post->created_at }}</small>
                    <small class="text-like"><i class="far fa-heart"></i></small>
                </div>
            </div>
            <img class="detail-img" src="{{ $post->thumbnail->getUrl() }}" alt="">
        </div>
        <div class="detail-content">
            <div class="detail-description">
            {!! $post->content !!}
            </div>
        
        </div>
    </div>
</div>
@endsection
