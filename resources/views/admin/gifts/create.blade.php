@extends('admin.layouts.app')

@section('content')
    <h1>Gift create</h1>
    <form method="POST" action="{{ route('admin.gifts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Name</label>
            <input class="form-control" required="" name="name">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input accept="image/*" class="form-control" required="" name="img" type="file" id="image">
        </div>
        <div class="form-group">
            <label>Danh mục <font color="red">*</font></label>
            <select name="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <a href="admin.media.index" class="btn btn-secondary">Back</a>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
@endsection
