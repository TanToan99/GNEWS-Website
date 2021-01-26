@extends('layouts.app')

@section('title','DSC | {{ $post->title }}')

@section('header')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ $post->thumbnail->getUrl() }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="brand">
                    <h2>{{ $post->title }}</h2>
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
            <small class="text-muted">{{ $post->author->fullname }} </small><br>
            <small class="text-muted"> Posted at: {{ humanize_date($post->created_at) }}</small>
        </div>
    </div>
</div>
@endsection