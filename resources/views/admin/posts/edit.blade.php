@extends('admin.layouts.app')

@section('content')
    <p>Edit post</p>
    <form method="POST" action="{{ route('admin.posts.update',$post) }}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group" style="text-align: center;">
            <img src="{{ $post->thumbnail->getUrl('thumb') }}" alt="image" class="img-thumbnail ">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" required="" name="title" type="text" value="{{ $post->title }}" id="title">
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail image(If dont change, no need to input)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control trumbowyg-form" id="content" name="content">{{ $post->content }}</textarea>
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="pull-left">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
            <input class="btn btn-primary" type="submit" value="Update">
        </div>
    </form>
    <form method="POST" action="{{ route('admin.posts.destroy',$post) }}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input class="btn btn-primary" type="submit" value="Delete">
    </form>
@endsection
