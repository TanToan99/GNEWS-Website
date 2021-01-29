@extends('layouts.app')

@section('title','DSC | Forum')

@section('header')
    @include('shared.header')
@endsection

@section('header')
    @include('shared.header')
@endsection

@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="title text-center">Tìm kiếm</h4>
                @include ('home/posts/_search')
            </div>
            <div class="col-md-9">
                <h4 class="title">Bài đăng mới nhất</h4>
                @include ('home/posts/_list')
            </div>
        </div>
    </div>
</div>
@endsection