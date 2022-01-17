@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="/css/post.css" />

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
@endsection

@section('content')
    
<div class="section section-basic">
    <div class="post-container">
        <div class="post-flex">
            <div class="post-search">
                <h4 class="post-title">Search</h4>
                @include ('home/posts/_search')
            </div>
            <div class="post-list">
                <h4 class="post-list-title">Latest post</h4>
                @include ('home/posts/_list')
            </div>
        </div>
    </div>
</div>
@endsection