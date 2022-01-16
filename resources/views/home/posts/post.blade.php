@extends('layouts.app')


@section('content')

<div class="section section-basic">
    <div class="container">
        <div class="row">
            <img src="{{ $post->thumbnail->getUrl() }}" alt="">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="brand">
                    <h2 style="color: white;">{{ $post->title }}</h2>
                </div>
            </div>
            {!! $post->content !!}
            <div class="text-right">
                <small class="text-muted">{{ $post->author->name }} </small><br>
                <small class="text-muted"> Posted at: {{ $post->created_at }}</small>
            </div>
        </div>
    </div>
</div>
@endsection
