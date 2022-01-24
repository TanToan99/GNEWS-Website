@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/news.css" />

@endsection

@section('content')
    <div class="news">
        <div class="card-news">
            <div class="title">
                <h1>News</h1>
            </div>
            <div class="card-container">
                @include ('posts/_list')
            </div>
        </div>
    </div>
@endsection
