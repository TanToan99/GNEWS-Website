@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/event-mobile.css" />
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
            <div class="tree-mb">
                @guest
                    <h1 class="event-h1-mb">Đăng nhập để hái lộc</span> lượt hái</h1>
                @else
                    <h1 class="event-h1-mb">Ban đang có <span>{{ auth()->user()->times }}</span> lượt hái</h1>
                @endguest
                <video autoplay muted loop class="tree-video-mb" id="myVideo">
                    <source src="/images/event-element/tree-event.mp4" type="video/mp4">
                </video>
                <p class="tree-p-mb">Thời gian hái lộc 20h00 - 21h00</p>
                @guest
                @else
                    <img class="tree-btn-mb" id="myBtn" src="/images/event-element/button.png" />
                    <div id="eModalQue" class="e-modal-que">
                        <div  class="e-modal-content-que">
                            <span id="close" class="e-close-que">&times;</span>
                            <img src="/images/que-chuc/que-chuc-1.jpg"/>
                        </div>
                    </div>
                @endif
                <div class="event-chat-mb">
                    <div class="menu-element-mb">
                        <img id="eBtnChatMb" class="event-icon-mb" src="/images/event-element/chat-icon.png" />
                        <div id="eModalChatMb" class="e-modal-chat-mb">
                            <div class="e-chat-mb">
                                <span class="e-close-chat">&times;</span>
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
       

        <div class="event-menu-mb">
            <div class="menu-element-mb">
                <p>Thể lệ</p>
                <a href="#"><img class="event-icon-mb " src="/images/event-element/rule-icon.png" /></a>
            </div>
            <div class="menu-element-mb">
                <p>Nhiệm vụ</p>
                <img id="eBtnMiMb" class="event-icon-mb "  src="/images/event-element/mission-icon.png" />
                <div id="eModalMiMb" class="e-modal-mi-mb">
                    <div class="e-modal-mb">
                        <span class="e-close-mb">&times;</span>
                        <h1>THỰC HIỆN NHIỆM VỤ ĐỂ NHẬN LƯỢT HÁI LỘC</h1>
                        <div class="list-mb">
                            <div class="check-mi">
                                <div class="pretty p-default p-curve p-thick">
                                    <input type="checkbox" />
                                    <div class="state p-danger-o">
                                        <label></label>
                                    </div>
                                </div>
                                <p class="label-mi">Like bài viết... LikeLike bài viết... Like bài viết...Like bài viết... Like bài viết...Like bài viết... Like bài viết...Like bài viết... Like bài viết... bài viết...Like bài viết... Like bài viết... </p>
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
                <a href="#"><img class="event-icon-mb " src="/images/event-element/history-icon.png" /></a>
            </div>
        </div>

        
    </div>




</div>
@endsection

@section('custom-js')
<script src="/js/event-mobile.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="/js/newyear.js"></script>
@endsection