@extends('admin.layouts.app')

@section('content')
    <h1>Media create</h1>
    <form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input accept="image/*" class="form-control" required="" name="image" type="file" id="image">
        </div>
        <a href="admin.media.index" class="btn btn-secondary">Back</a>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
@endsection
