@extends('layouts.app')


@section('header')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ $post->thumbnail->getUrl() }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="brand">
                    <h2 style="color: white;">{{ $post->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section section-basic">
    <div class="container">
        {!! $post->content !!}
        <div class="text-right">
            <small class="text-muted">{{ $post->author->name }} </small><br>
            <small class="text-muted"> Posted at: {{ $post->created_at }}</small>
        </div>
    </div>
</div>
@endsection
