@extends('admin.layouts.app')

@section('content')
    <div class="page-header d-flex justify-content-between">
      <h1>Media</h1>
      <a href="{{ route('admin.media.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> Add Image
      </a>
    </div>

    @include('admin/media/_list')
@endsection
