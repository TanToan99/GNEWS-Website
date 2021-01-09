@extends('admin.layouts.app')

@section('content')
    <p><strong>Profile - {{ $user->email }}</strong></p>

    @include('admin/users/_form')
@endsection
