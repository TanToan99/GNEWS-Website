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
                            <img src="/images/favicon.png" class="card-ava"/>
                        </div>
                        <div class="card-info-user">
                            <p class="info-element">Họ và Tên:</p>
                            <p class="info-user">Nguyễn Văn Lộc</p>
                            <p class="info-element">Email:</p>
                            <p class="info-user">locnvgcd18350@fpt.edu.vn</p>
                            <p class="info-element">Mã số sinh viên:</p>
                            <p class="info-user">GCD18350</p>
                        </div>
                    </div>
                </div>
                <div class="card-main">
                    <h2>Liên kết Facebook</p>
                    <div class="card-info">
                        <input>
                        <button>Liên kết</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
@endsection
