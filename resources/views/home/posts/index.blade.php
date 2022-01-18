@extends('layouts.app')

@section('custom-css')
<!-- <link rel="stylesheet" href="/css/post.css" /> -->
<link rel="stylesheet" href="/css/news.css" />

@endsection

@section('content')

<div class="news">

    <div class="card-news">
        <div class="title">
            <h1>Trang tin tức</h1>
        </div>
        <div class="card-container">
            @include ('home/posts/_list')
        </div>
    </div>
</div>
@endsection