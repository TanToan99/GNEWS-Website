@extends('layouts.app')

@section('title','DSC | Forum')

@section('header')
    @include('shared.header')
@endsection

@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="title text-center">Tìm kiếm</h4>
                @include ('home/forum/_search')
            </div>
            <div class="col-md-9">
                <h4 class="title">Bài đăng mới nhất</h4>
                @include ('home/forum/_list')
            </div>
        </div>
    </div>
</div>
@endsection