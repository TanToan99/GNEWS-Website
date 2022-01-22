@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/event.css" /> //tach ra       
    <link rel="stylesheet" href="/css/event-responsive.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
@endsection

@section('content')
<div class="event-container-mb">
    <div class="event-banner-mb">
        <marquee scrollamount="15">
            <img src="/images/event-element/Banner-1.png"  />
        </marquee>
    </div>
    <div class="event-main-mb">
        <div class="event-tree-mb">
            <h1 class="tree-text-h1-mb">Ban đang có <span>5</span> lượt hái</h1>
            <video autoplay muted loop class="tree-img-mb" id="myVideo" >
                <source src="/images/event-element/tree-event.mp4" type="video/mp4">
            </video>
            <p class="tree-text-p-mb">Thời gian hái lộc 20h00 - 21h00</p>
            <a href="#"><img class="tree-btn-mb" src="/images/event-element/button.png" /></a>
        </div>

        <div class="event-menu-mb">
            <div class="menu-element-mb">
                <p>Thể lệ</p>
                <a href="#"><img class="event-icon" src="/images/event-element/rule-icon.png" /></a>
            </div>
            <div class="menu-element-mb">
                <p>Nhiệm vụ</p>
                <img id="eBtnMiMb" class="event-icon"  src="/images/event-element/mission-icon.png" />
                <div id="eModalMiMb" class="e-modal-mi-mb">
                    <div class="e-modal-mb">
                        <span class="e-close-mb">&times;</span>
                        <h1>THỰC HIỆN NHIỆM VỤ ĐỂ NHẬN LƯỢT HÁI LỘC</h1>
                        <div class="list-mb">
                            <div class="pretty p-default p-curve p-thick">
                                <input type="checkbox" />
                                <div class="state p-danger-o">
                                    <label>Like bài viết... </label>
                                </div>
                            </div>
                            <p>+1 Lượt</p>
                        </div>
                        <div class="list-mb">
                            <div class="pretty p-default p-curve p-thick">
                                <input type="checkbox" />
                                <div class="state p-danger-o">
                                    <label>Commnet bài viết... </label>
                                </div>
                            </div>
                            <p>+1 Lượt</p>
                        </div>
                        <div class="list-mb">
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
            <div class="menu-element-mb">
                <p>Lịch sử</p>
                <a href="#"><img class="event-icon" src="/images/event-element/history-icon.png" /></a>
            </div>
        </div>

        <div class="event-chat-mb">
            <div class="menu-element-mb">
                <img id="eBtnChatMb" class="event-icon" src="/images/event-element/history-icon.png" />
                <div id="eModalChatMb" class="e-modal-chat-mb">
                    <div class="e-modal-mb">
                        <span class="e-close-chat-mb">&times;</span>
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
                    </div>
                </div>
                <p>Live Chat</p>
            </div>
        </div>
    </div>




</div>
@endsection