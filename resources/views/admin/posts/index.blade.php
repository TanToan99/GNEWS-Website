@extends('admin.layouts.app')

@section('title','Posts')

@section('content')
    <div class="page-header d-flex justify-content-between">
      <h1>Posts</h1>
      <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Add new post
      </a>
    </div>

    @include ('admin/posts/_list')
@endsection