@extends('layouts.app')


@section('custom-css')
    <link rel="stylesheet" href="/css/event.css" />
    <link rel="stylesheet" href="/css/event-responsive.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
@endsection

@section('content') 
<div class="event-container">
    <div class="event-banner">
        <marquee scrollamount="15">
            <img src="/images/event-element/Banner-1.png" />
        </marquee>
    </div>
    <div class="event-main">
        <div class="bg-element-1">
            <video autoplay muted loop class="bg-video" id="myVideo" >
                <source src="/images/event-element/bg-motion-2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="event-tree">
            @guest
            <h1 class="tree-text-h1">Đăng nhập để hái lộc</span> lượt hái</h1>
            @else
            <h1 class="tree-text-h1">Ban đang có <span>{{ auth()->user()->times }}</span> lượt hái</h1>
            @endguest
            <video autoplay muted loop class="tree-img" id="myVideo" >
                <source src="/images/event-element/tree-event.mp4" type="video/mp4">
            </video>
            <p class="tree-text-p">Thời gian hái lộc 20h00 - 21h00</p>
            <a href="#"><img class="tree-btn" src="/images/event-element/button.png" /></a>
        </div>
        <!-- event menu -->
        <div class="event-menu">
            <div class="event-rule">
                <p>Thể lệ</p>
                <img id="eBtnRule" class="eventicon" src="/images/event-element/rule-icon.png" />
                <div id="eModalRule" class="e-modal-rule">
                    <div class="e-modal-content-rule">
                        <span class="e-close-rule">&times;</span>
                        <h1>LUẬT CHƠI</h1>
                        <p>abcdf</p>
                    </div>
                </div>
            </div>
            <div class="event-rule">
                <p>Nhiệm vụ</p>
                <img id="eBtnMi" class="eventicon" src="/images/event-element/mission-icon.png" />
                <div id="eModalMi" class="e-modal-mi">
                    <div class="e-modal-content-mi">
                        <span class="e-close-mi">&times;</span>
                        <h1>THỰC HIỆN NHIỆM VỤ ĐỂ NHẬN LƯỢT HÁI LỘC</h1>
                        <div class="list-element">
                            <div class="pretty p-default p-curve p-thick">
                                <input type="checkbox" />
                                <div class="state p-danger-o">
                                    <label>Like bài viết... </label>
                                </div>
                            </div>
                            <p>+1 Lượt</p>
                        </div>
                        <div class="list-element">
                            <div class="pretty p-default p-curve p-thick">
                                <input type="checkbox" />
                                <div class="state p-danger-o">
                                    <label>Commnet bài viết... </label>
                                </div>
                            </div>
                            <p>+1 Lượt</p>
                        </div>
                        <div class="list-element">
                            <div class="pretty p-default p-curve p-thick">
                                <input type="checkbox" />
                                <div class="state p-danger-o">
                                    <label>Share bài viết... </label>
                                </div>
                            </div>
                            <p>+1 Lượt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-rule">
                <p>Lịch sử</p>
                <img id="eBtnHi" class="eventicon" src="/images/event-element/history-icon.png" />
                <div id="eModalHi" class="e-modal-hi">
                    <div class="e-modal-content-hi">
                        <span class="e-close-hi">&times;</span>
                        <h1>LỊCH SỬ HÁI LỘC</h1>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
        </div>
        <!-- end event menu -->
        <!-- event chat -->
        <div class="event-chat" id="app">
            <h1>Live Chat</h1>
            @guest
                <h1>You need login first!</h1>
            @else
            <div class="event-chat-main">
                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                </div>
            </div>
                @endif
            </div>

            <div class="event-noti">
            </div>
        </div>
    </div>
</div>

@include('event/_event-mobile')
    @endsection

    @section('custom-js')
        <script src="/js/event.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    @endsection
