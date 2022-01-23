@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/news.css" />
    <style>
        .card-container p {
            padding: 20px 10%;
            font-weight: 450;
            line-height: 1.8;
            text-align: justify;
        }

        .card-container span {
            font-weight: 700;
            color: var(--cam);
        }

        .card-container img {
            width: 70%;
        }

        .title h1 {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            color: var(--cam);
        }

        @media (max-width: 1440px) {
            .card-container p {
                padding: 20px 5%;
            }

            img {
                width: 80%;
            }
        }

        @media (max-width: 1200px) {
            .card-container p {
                padding: 20px 1%;
            }

            img {
                width: 90%;
            }
        }

        .timeline {
            position: relative;
            width: 660px;
            margin: 0 auto;
            margin-top: 20px;
            padding: 1em 0;
            list-style-type: none;
        }

        .timeline:before {
            position: absolute;
            left: 50%;
            top: 0;
            content: ' ';
            display: block;
            width: 6px;
            height: 100%;
            margin-left: -3px;
            background: var(--cam);

            z-index: 5;
        }

        .timeline li {
            padding: 1em 0;
        }

        .timeline li:after {
            content: "";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        .direction-l {
            position: relative;
            width: 300px;
            float: left;
            text-align: right;
        }

        .direction-r {
            position: relative;
            width: 300px;
            float: right;
        }

        .flag-wrapper {
            position: relative;
            display: inline-block;
            color: var(--cam);
            text-align: center;
            font-weight: 600;
        }

        .flag {
            position: relative;
            display: inline;
            padding: 6px 10px;
            border-radius: 5px;

            font-weight: 600;
            text-align: left;
        }

        .direction-l .flag {}

        .direction-r .flag {}

        .direction-l .flag:before,
        .direction-r .flag:before {
            position: absolute;
            top: 50%;
            right: -40px;
            content: ' ';
            display: block;
            width: 12px;
            height: 12px;
            margin-top: -10px;
            background: #fff;
            border-radius: 10px;
            border: 4px solid rgb(255, 80, 80);
            z-index: 10;
        }

        .direction-r .flag:before {
            left: -40px;
        }

        .direction-l .flag:after {
            content: "";
            position: absolute;
            left: 100%;
            top: 50%;
            height: 0;
            width: 0;
            margin-top: -8px;
            border: solid transparent;
            border-left-color: rgb(248, 248, 248);
            border-width: 8px;
            pointer-events: none;
        }

        .direction-r .flag:after {
            content: "";
            position: absolute;
            right: 100%;
            top: 50%;
            height: 0;
            width: 0;
            margin-top: -8px;
            border: solid transparent;
            border-right-color: rgb(248, 248, 248);
            border-width: 8px;
            pointer-events: none;
        }

        .time-wrapper {
            display: inline;

            line-height: 1em;
            font-size: 0.66666em;
            color: rgb(250, 80, 80);
            vertical-align: middle;
        }

        .direction-l .time-wrapper {
            float: left;
        }

        .direction-r .time-wrapper {
            float: right;
        }

        .time {
            display: inline-block;
            padding: 4px 6px;
            font-weight: 700;
            font-size: 19px;
        }

        .desc {
            margin: 1em 0.75em 0 0;

            font-size: 0.77777em;
            font-style: italic;
            line-height: 1.5em;
        }

        .direction-r .desc {
            margin: 1em 0 0 0.75em;
        }

        /* ================ Timeline Media Queries ================ */

        @media screen and (max-width: 660px) {

            .timeline {
                width: 100%;
                padding: 4em 0 1em 0;
            }

            .timeline li {
                padding: 2em 0;
            }

            .direction-l,
            .direction-r {
                float: none;
                width: 100%;

                text-align: center;
            }

            .flag-wrapper {
                text-align: center;
            }

            .flag {
                background: rgb(255, 255, 255);
                z-index: 15;
            }

            .direction-l .flag:before,
            .direction-r .flag:before {
                position: absolute;
                top: -30px;
                left: 50%;
                content: ' ';
                display: block;
                width: 12px;
                height: 12px;
                margin-left: -9px;
                background: #fff;
                border-radius: 10px;
                border: 4px solid rgb(255, 80, 80);
                z-index: 10;
            }

            .direction-l .flag:after,
            .direction-r .flag:after {
                content: "";
                position: absolute;
                left: 50%;
                top: -8px;
                height: 0;
                width: 0;
                margin-left: -8px;
                border: solid transparent;
                border-bottom-color: rgb(255, 255, 255);
                border-width: 8px;
                pointer-events: none;
            }

            .time-wrapper {
                display: block;
                position: relative;
                margin: 4px 0 0 0;
                z-index: 14;
            }

            .direction-l .time-wrapper {
                float: none;
            }

            .direction-r .time-wrapper {
                float: none;
            }

            .desc {
                position: relative;
                margin: 1em 0 0 0;
                padding: 1em;
                background: rgb(245, 245, 245);
                -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);
                -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);

                z-index: 15;
            }

            .direction-l .desc,
            .direction-r .desc {
                position: relative;
                margin: 1em 1em 0 1em;
                padding: 1em;

                z-index: 15;
            }

        }

        @media screen and (min-width: 400px ?? max-width: 660px) {

            .direction-l .desc,
            .direction-r .desc {
                margin: 1em 4em 0 4em;
            }

        }

    </style>
@endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=522765778912732&autoLogAppEvents=1"
        nonce="hH03Yqat"></script>
    <div class="news">
        <div class="card-news">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div class="card-container">
                <p> <span>GNews</span> là một Câu lạc bộ Truyền thông của trường Đại học Greenwich Việt Nam cơ sở Đà Nẵng.
                    Ban đầu, câu
                    lạc bộ này được thành lập bởi 4 bạn sinh viên có niềm đam mê với báo chí. Dần dần sau gần 3 năm, GNews
                    đã phát triển theo đúng hướng và thông qua mỗi đợt tuyển thành viên mới thì hiện tại con số thành viên
                    là hơn 25 bạn.</p>
                <img src="/images/aboutus.jpg" alt="CLB MEMBER">
                <p>Với câu slogan là Higher - Further - Faster GNews luôn nỗ lực để là một đơn vị Truyền thông có thể
                    mang đến những thông tin nóng hổi một cách nhanh chóng và chính xác. Với phạm vi hoạt động ban đầu là
                    đưa những tin tức liên quan đến cơ sở Đại học Greenwich Việt Nam ở Đà Nẵng, thì bây giờ GNews đã phát
                    triển và mở rộng phạm vi đăng tải những thông tin Truyền thông của tất cả các cơ sở của Đại học
                    Greenwich Việt Nam trên toàn quốc. Với sự chăm chỉ và nỗ lực, qua mỗi học kỳ GNews luôn được Đại học
                    Greenwich Việt Nam cơ sở Đà Nẵng công nhận là Câu lạc bộ xuất sắc và trao giải trong mỗi Lễ Tôn vinh vào
                    cuối kỳ. Ngoài việc được công nhận là Câu lạc bộ xuất sắc thì GNews còn tham gia một số cuộc thi và nhận
                    về những giải thưởng như: Giải câu lạc bộ xuất sắc khi tham gia cuộc thi “PCT Media”,.. Song song với
                    việc tham gia các cuộc thi thì GNews còn hợp tác với Đại học Greenwich Việt Nam cơ sở Đà Nẵng khi là đơn
                    vị Truyền thông chính của cuộc thi “Nét đẹp qua Ống kính” mùa 2. Thêm vào đó đã kết hợp với các CLB và
                    đơn vị khác để tổ chức các sự kiện lớn nhỏ ở Thành phố Đà Nẵng. Ngoài ra, GNews đã xuất bản Nội san I và
                    nhận được nhiều phản hồi tích cực từ các bạn sinh viên ở cơ sở Đà Nẵng. Hiện tại, GNews đang sáng tạo
                    các nội dung và tổng hợp các thông tin mới mẻ để lên kế hoạch xuất bản cho Nội san.
                    <br>GNews không chỉ là một Câu lạc bộ trẻ mà còn là nơi để các bạn sinh viên thực hiện và hết mình vì
                    niềm đam mê Truyền thông của mình. Chúng mình đã, đang và vẫn sẽ luôn nối tiếp “ngọn lửa” này đến với
                    những thế hệ thành viên sau và phát triển hơn mỗi này để đúng với câu slogan Higher - Further - Faster !
                </p>
            </div>

            <div class="title">
                <h1>Timeline</h1>
            </div>
            <ul class="timeline">

                <!-- Item 1 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Thời gian thành lập</span>
                        </div>
                        <div class="desc">17/04/2017</div>
                    </div>
                </li>

                <!-- Item 2 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag">Số lượng thành viên</span>
                        </div>
                        <div class="desc">Sau gần 3 năm thành lập, số lượng thành viên là 25 bạn</div>
                    </div>
                </li>

                <!-- Item 3 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Ban</span>
                        </div>
                        <div class="desc">GNews có 4 ban chính: Content, Creative, Event và HR</div>
                    </div>
                </li>
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag">Số sự kiện đã làm</span>
                        </div>
                        <div class="desc">Số sự kiện không đếm được, quá nhiều</div>
                    </div>
                </li>
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Số lần được tôn vinh</span>
                        </div>
                        <div class="desc">CLB ghẻ tôn vinh 3 lần</div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
@endsection

@section('custom-js')
@endsection
