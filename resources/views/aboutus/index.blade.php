@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="/css/aboutus.css" />
@endsection

@section('content')
<div class="about-pc">
    <section class="about">
        <div class="about-banner">
            <img class="img-pc" src="images/bg-aboutus.svg">
            <img class="img-mb" src="images/bg-aboutus-mb.svg">
        </div>
        <div class="about-text">
            <div class="about-title">
                <h1> " HIGHER<span style="font-weight: 200">-</span></h1>
                <p>-FURTHER</p>
                <h1>FASTER "</h1>
            </div>
            <div class="about-intro">
                <p><span>GNews Club</span> là <span>Câu Lạc Bộ Truyền thông</span> của trường Đại học Greenwich Việt Nam - cơ sở Đà Nẵng.</p>
            </div>
            <div class="about-descr">
                <p>Với sứ mệnh truyền thông đại chúng, GNews luôn nỗ lực cập nhật nhanh chóng và chính xác những tin tức liên quan đến Đại học Greenwich Việt Nam tại cơ sở Đà Nẵng, trong những năm gần đây, GNews đã phát triển và mở rộng <span>phạm vi toàn quốc</span> để đăng tải trang thông tin trên các cơ sở của Đại học Greenwich Việt Nam.<br><br>Ngoài việc được công nhận là Câu lạc bộ xuất sắc qua mỗi học kỳ, GNews đã thu về <span>nhiều thành tích</span> từ các cuộc thi đa dạng quy mô và hình thức, cùng <span>hợp tác</span> với các CLB và đơn vị khác để tổ chức các sự kiện lớn nhỏ tại Thành phố Đà Nẵng. </p>
            </div>
        </div>
    </section>
    <section class="roadmap">
        <div class="block-1">
            <div class="block-orange">
                <h1>17.04.2020</h1>
                <div class="orange">
                    <p>Chính thức thành lập Greenwich Newspaper Club</p>
                </div>
            </div>
            <i class="fal fa-chevron-right"></i>
            <div class="block-white">
                <h1>30 Thành viên</h1>
                <div class="white">
                    <p>Sau gần 2 năm thành lập</p>
                </div>
            </div>
            <i class="fal fa-chevron-right"></i>
            <div class="block-orange">
                <h1>4 Ban</h1>
                <div class="orange">
                    <p>Content,<br>Creative (Design, Photo, Edit video),<br>Event,<br>HR</p>
                </div>
            </div>
            <i class="fal fa-chevron-right"></i>
            <div class="block-white">
                <h1>Gần 2000 followers</h1>
                <div class="white">
                    <p>Fanpage GNews Club</p>
                </div>
            </div>
            <i class="fal fa-chevron-right"></i>
        </div>
        <div class="block-1">
            <div class="block-orange">
                <h1>Hơn 100 sự kiện lớn nhỏ</h1>
                <div class="orange">
                    <p>Greenwich Esport Championship 2020,<br>Talkshow Sex Education,<br>Hương tháng 10,<br>SOUL,<br>Tết dần đến,...</p>
                </div>
            </div>
            <i class="fal fa-chevron-right v2"></i>
            <div class="block-white">
                <h1>4 Lần tôn vinh CLB hoạt động xuất sắc</h1>
                <div class="white">
                    <p>Spring 2020,<br>Summer 2020,<br>Fall 2020,<br>Summer 2021</p>
                </div>
            </div>
            <i class="fal fa-chevron-right v2"></i>
            <div class="block-orange">
                <h1>6 kênh truyền thông</h1>
                <div class="orange">
                    <p>Facebook,<br>Instagram,<br>Tiktok,<br>Youtube,<br>Linkedin</p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="roadmap-mb">
    <div class="block-2">
        <div class="block-orange">
            <h1>17.04.2020</h1>
            <div class="orange">
                <p>Chính thức thành lập Greenwich Newspaper Club</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
        <div class="block-white">
            <h1>30 Thành viên</h1>
            <div class="white">
                <p>Sau gần 2 năm thành lập</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
    </div>
    <div class="block-2">
        <div class="block-orange">
            <h1>4 Ban</h1>
            <div class="orange">
                <p>Content,<br>Creative (Design, Photo, Edit video),<br>Event,<br>HR</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
        <div class="block-white">
            <h1>Gần 2000 followers</h1>
            <div class="white">
                <p>Fanpage GNews Club</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
    </div>
    <div class="block-2">
         <div class="block-orange">
            <h1>Hơn 100 sự kiện lớn nhỏ</h1>
            <div class="orange">
                <p>Greenwich Esport Championship 2020,<br>Talkshow Sex Education,<br>SOUL,<br>Tết dần đến,...</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
        <div class="block-white">
            <h1>4 Lần tôn vinh CLB hoạt động xuất sắc</h1>
            <div class="white">
                <p>Spring 2020,<br>Summer 2020,<br>Fall 2020,<br>Summer 2021</p>
            </div>
        </div>
        <i class="fal fa-chevron-right"></i>
    </div>
    <div class="block-2">
        <div class="block-orange">
            <h1>6 kênh truyền thông</h1>
            <div class="orange">
                <p>Facebook,<br>Instagram,<br>Tiktok,<br>Youtube,<br>Linkedin</p>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom-js')
@endsection