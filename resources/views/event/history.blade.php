@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/history.css" />
@endsection

@section('content')
<div class="history-container">
    <h1 class="history-title">Lịch sử hái lộc</h1>
    <div class="history-main">
        <div class="history-bar">
            <div class="history-load" style="width: 33%;" ></div>
        </div>

        <div class="history-bar-mb">
            <div class="history-load-mb" style="height:33%;" ></div>
        </div>

        <div class="history-date">
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        @if(count($day1) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day1 as $gift)
                            <li>Đã hái <span>{{ $gift->gift->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        
                        @if(count($day2) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day2 as $gift)
                            <li>Đã hái <span>{{ $gift->gift->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        
                        @if(count($day3) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day3 as $gift)
                            <li>Đã hái <span>{{ $gift->gift->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('custom-js')

@endsection