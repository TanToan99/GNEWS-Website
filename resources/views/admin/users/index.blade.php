@extends('admin.layouts.app')

@section('content')
    <div class="page-header">
      <h1>Users</h1>
      <a href="{{ route('admin.export') }}" class="btn btn-sm btn-info">Xuất Excel</a>
    </div>

    @include ('admin/users/_list')
@endsection
