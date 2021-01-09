@extends('admin.layouts.app')

@section('content')
    <h1>@lang('Create post')</h1>
    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @php
            $posted_at = old('posted_at') ?? (isset($post) ? $post->posted_at->format('Y-m-d\TH:i') : null);
        @endphp
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" required="" name="title" type="text" id="title">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail image</label>
            <input type="file" name="thumbnail" class="form-control">
            @error('thumbnail')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control trumbowyg-form" id="content" name="content"></textarea>
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
        <input class="btn btn-primary" type="submit" value="Update">
    </form>
@endsection