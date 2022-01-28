@extends('layouts.app')


@section('custom-css')
    <link rel="stylesheet" href="/css/event.css" />
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
            {{-- <div class="bg-element-1">
                <video autoplay muted loop class="bg-video" id="myVideo">
                    <source src="/images/event-element/bg-motion-2.mp4" type="video/mp4">
                </video>
            </div> --}}
            <div class="event-tree">
                @guest
                    <h1 class="tree-text-h1">Đăng nhập để hái lộc</span> lượt hái</h1>
                @else
                    <h1 class="tree-text-h1">Bạn đang có <span>{{ auth()->user()->times }}</span> lượt hái</h1>
                @endguest
                <video autoplay muted loop class="tree-img" id="myVideo">
                    <source src="/images/event-element/tree-event.mp4" type="video/mp4">
                </video>
                <p class="tree-text-p">Thời gian hái lộc 20h00 - 21h00</p>
                @guest
                @else
                    <img class="tree-btn" id="myBtn" src="/images/event-element/button.png" />
                    <div id="eModalQue" class="e-modal-que">
                        <div class="e-modal-content-que">
                            <span id="close" class="e-close-que">&times;</span>
                            <img src="/images/que-chuc/que-chuc-1.jpg" />
                        </div>
                    </div>
                    @endif
                </div>



                <!-- event menu -->
                <div class="event-menu">
                    <div class="event-rule">
                        <p>Thể lệ</p>
                        <a href="#"><img id="eBtnRule" class="eventicon" src="/images/event-element/rule-icon.png" /></a>
                    </div>
                    @guest
                    @else
                        <div class="event-rule">
                            <p>Nhiệm vụ</p>
                            <img id="eBtnMi" class="eventicon" src="/images/event-element/mission-icon.png" />
                            <div id="eModalMi" class="e-modal-mi">
                                <div class="e-modal-content-mi">
                                    <span class="e-close-mi">&times;</span>
                                    <h1>THỰC HIỆN NHIỆM VỤ ĐỂ NHẬN LƯỢT HÁI LỘC</h1>
                                    @foreach ($missions as $mission)
                                        <div class="list-element">
                                            <div class="check-mi">
                                                <div class="pretty p-default p-curve p-thick">
                                                    <input type="checkbox" checked onclick="return false;" />
                                                    <div class="state p-danger-o">
                                                        <label>{{ $mission->name }}</label>
                                                    </div>
                                                    <p class="label-mi">Like bài viết...Like bài viết...Like bài
                                                        viết... </p>
                                                </div>
                                                <p>+{{ $mission->times }} Lượt</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="event-rule">
                            <p>Lịch sử</p>
                            <a href="{{ route('history') }}"><img id="eBtnHi" class="eventicon"
                                    src="/images/event-element/history-icon.png" /></a>
                        </div>
                        @endif
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
                <div id="ads" style="display:none">
                    <img src="" alt="">
                </div>
            @endsection

            @section('custom-js')
                <script src="/js/event.js"></script>
                <script src="{{ mix('js/app.js') }}"></script>
                <script>
                    let count = 0;
                    let cheatCode = ["g", "n", "e", "w", "s"];
                    let index = 0;
                    document.addEventListener('keydown', function(event) {
                        if (event.key === cheatCode[index]) {
                            index += 1;
                        } else {
                            index = 0;
                        }

                        if (count == 0 && index == 5) {
                            alert("Đã tăng khả năng trúng card lên 90%!");
                        }
                        if (index == 5) {
                            count += 1;
                            index = 0;
                        }

                        if (count == 3) {
                            alert("Có tin người vcl!");
                        }
                    });
                </script>
                <script type="text/javascript" src="/js/newyear.js"></script>
            @endsection
