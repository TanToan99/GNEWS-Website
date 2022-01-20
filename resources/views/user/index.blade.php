@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/profile.css" />

@endsection

@section('content')
    <div class="container-profile">
        <div class="card-profile">
            <div class="card-left">
                <a href="#">Thông tin cơ bản</a>
                <a href="#">Liên kết Facebook</a>
            </div>
            <div class="card-right">
                <div class="card-main">
                    <h2>Thông tin cơ bản</h2>
                    <div class="card-info">
                        <div class="card-ava-user">
                            <img src="{{ $user->avatar }}" class="card-ava" />
                        </div>
                        <div class="card-info-user">
                            <div class="info-object">
                                <p class="info-element">Name: </p>
                                <p class="info-user">{{ $user->name }}</p>
                            </div>
                            <div class="info-object">
                                <p class="info-element">Email: </p>
                                <p class="info-user">{{ $user->email }}</p>
                            </div>
                            <div class="info-object">
                                <p class="info-element">Student ID: </p>
                                <p class="info-user">{{ $student_id }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-main">
                    <h2>Liên kết Facebook</h2>
                        @if ($user->link_fb == null)
                            <span>(Lưu ý: Chỉ cập nhật liên kết FB đúng 1 lần)</span>
                            <form class="card-input" method="POST" action="{{ route('add_link_facebook') }}">
                                @csrf
                                <input name="link_fb">
                                <button type="submit">Link</button>
                            </form>
                            @if (session('class'))
                                <span class="alert">{{ session('message') }}</span>
                            @endif
                        @else
                            <div style="margin-top: 1em;">
                                <div class="info-object">
                                    <p class="info-element">UID:</p>
                                    <p class="info-user">{{ $user->uid_fb }}</p>
                                </div>
                                <div class="info-object">
                                    <p class="info-element">Link FB:</p>
                                    <a href="{{$user->link_fb}}"><p class="info-user">{{ $user->link_fb }}</p></a>
                                </div>
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>


@endsection
