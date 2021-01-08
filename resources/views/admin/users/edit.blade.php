@extends('admin.layouts.app')

@section('content')
    <p><strong>Pofile - {{ $user->email }}</strong></p>

    @include('admin/users/_form')
@endsection
