@extends('admin.layouts.app')

@section('content')
    <div class="page-header d-flex justify-content-between">
        <h1>Gifts</h1>
        <a href="{{ route('admin.gifts.create') }}" class="btn btn-primary btn-sm align-self-center">
            <i class="fa fa-plus-square" aria-hidden="true"></i> Add Gifts
        </a>
    </div>
    @include('admin/gifts/_list')
@endsection
