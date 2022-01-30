@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/profile.css" />
@endsection

@section('content')
    <div class="container-profile">
        <div class="card-profile">
            <div class="card-left">
                <a class="activev" href="javascript:void(0)" onclick="like(1)" id="a1">Thông tin cơ bản</a>
                <a href="#" href="javascript:void(0)" onclick="like(2)" id="a2">Liên kết Facebook</a>
                <a href="#" href="javascript:void(0)" onclick="like(3)" id="a3">Người giới thiệu</a>
            </div>
            <div class="card-right">
                <div class="card-main" id="b1" style="display: block">
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
                <div class="card-main" id="b2">
                    <h2>Liên kết Facebook</h2>
                    @if ($user->link_fb == null)
                        <span>(Lưu ý: Chỉ cập nhật liên kết FB đúng 1 lần)</span>
                        <form class="card-input" method="POST" action="{{ route('profile.addFB') }}">
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
                                <a href="{{ $user->link_fb }}">
                                    <p class="info-user">{{ $user->uid_fb }}</p>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="card-main" id="b3">
                    <h2>Giới thiệu</h2>
                    @if ($user->invited_id == null)
                        <span>(Lưu ý: Chỉ nhập email người giới thiệu đúng 1 lần)</span>
                        <form class="card-input" method="POST" action="{{ route('profile.invite') }}">
                            @csrf
                            <input name="inviter">
                            <button type="submit">Link</button>
                        </form>
                        @if (session('class'))
                            <span class="alert">{{ session('message') }}</span>
                        @endif
                    @else
                        <div style="margin-top: 1em;">
                            <div class="info-object">
                                <p class="info-element">Người giới thiệu:</p>
                                <p class="info-user">{{ $user->inviter->name }}</p>
                            </div>
                        </div>
                    @endif
                    
                    <div class="info-object">
                        <p class="info-element">Bạn đã mời:</p>
                        <p class="info-user">{{ $user->invite_count }} người bạn</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        function like(id) {
            $('#a1').removeClass('activev');
            $('#a2').removeClass('activev');
            $('#a3').removeClass('activev');
            $('#a' + id).addClass('activev');
        };
    </script>
@endsection
