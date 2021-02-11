@extends('layouts.app')

@section('title','DSC | Home')

@include('shared.header')
@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/Image/DSCWhat.png" alt="" class="rounded img-fluid">
            </div>
            <div class="col-md-9">
                <h3 class="title">
                    What is DSC?
                </h3>
                <div class="tab-pane text-justify">
                    Developer Student Club (DSC) is a community developed by Google_Developers at universities.
                    <br>With the desire to build an environment to help students develop themselves from the 
                    resources of 𝐆𝐨𝐨𝐠𝐥𝐞 and apply those luggage for you to join hands in creating, realizing 
                    ideas into solutions for the community. , for local businesses.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h3 class="title">
                    Why was the DSC built?
                </h3>
                <div class="tab-pane text-justify">
                    Through activities / events, DSC wishes to help the students bridge the gap between # Reason and #Propical. At the same time, motivating and inspiring students to create products applying technology, contributing to positive change for the community.🥰
                </div>
            </div>
            <div class="col-md-3">
                <img src="/Image/DSCWhy.png" alt="" class="rounded img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="/Image/DSCHow.png" alt="" class="rounded img-fluid">
            </div>
            <div class="col-md-9">
                <h3 class="title">
                    How does DSC work?
                </h3>
                <div class="tab-pane text-justify">
                    DSC will organize Workshop / Techtalk sessions on topics around Google technologies to help students
                    improve their knowledge and professional skills. Coming to these Workshop / Techtalk sessions,
                    students will not only have the opportunity to meet and listen to the speakers, but also a playground
                    for those who are passionate about exchange technology and learn. From there, you will accumulate
                    more knowledge for yourself.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-basic">
    <div class="container">
        <div id="nav-tabs">
            <div class="section" id="carousel">
                <h3 class="title text-center">DSC IN YOUR MIND</h3>
                <div class="row">
                    <div class="col-md-12 mr-auto ml-auto">
                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <ol class="carousel-indicators" style="bottom:-18">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="6" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="7" class=""></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind8.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Vũ Thu Thủy - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> DSC is new but not strange with students from Greenwich University (Vietnam).
                                                    I know that there are different DSCs at other universities in Da Nang and within the country, which had some certain achievements but now DSC-UoG
                                                    (Danang campus) has recently entered the "club village" at the University of Greenwich (Vietnam) Da Nang campus. I hope DSC will soon develop and
                                                    bring more interesting sources of knowledge to students and create new values for this international environment. <small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind3.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Hồ Ngọc Trâm Anh - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> The two words that I want to talk about DSC are "active"
                                                    and "professional". Members are very proactive in finding new opportunities. In a flexible and dynamic environment like
                                                    University of Greenwich (Vietnam), being proactive is essential to not sinking among other clubs. In addition, DSC is very
                                                    professional when organizing extremely useful and quality talk shows for those who need to learn information about IT.<small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item active card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind2.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Lữ Quốc Đạt - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> I think DSC is a quite
                                                    diverse and dynamic environment because it brings together passionate students from
                                                    different majors. This helps students to share experiences and improve their knowledge
                                                    more. I hope that the DSC will receive more and more support and grow stronger. <small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind1.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Nguyễn Thị Ngọc Trinh - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small>Initially, I thought that members
                                                    of DSC were all men and they would be quite reserved since this is an IT club. However, when I
                                                    interact and communicate with them, I were surprised because not only the number of women was
                                                    high, but members were also cute and active. In addition, workshops that are organised by DSC
                                                    are also prepared very thoughtfully and professionally in order to cultivate useful knowledge
                                                    for students.<small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind4.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Nguyễn Võ Gia Miên - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> As far as I know, DSC is an IT
                                                    club but I am quite surprised by the way it is communicated. Members always look for humorous
                                                    and witty ways to write. This makes the students not feel discouraged even though the topic
                                                    revolves around technology. I hope DSC will grow more and more and create its own emphasis
                                                    to enhance its value. <small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind5.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Nguyễn Hoàng Giang - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> I think this is a highly academic
                                                    club. Members of the DSC are always passionate, young and reckless. In addition, I also find the
                                                    tuning in each knowledge that you share or the community connection that the club creates. Technology
                                                    is changing every hour and DSC keeps updating and evolving. I think this is not just a club, this
                                                    is a community, an ecosystem of interesting people with a passion for technology. Hope you can
                                                    continue to develop the club, connect more young people who dare to challenge and engage. <small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind7.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Võ Thị Thục Đoan - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> A club with a passionate and cute
                                                    leader. Always take professional standards first. Having new ideas and extremely cute members.
                                                    Organising interesting workshops that cause curiosity for students majoring in IT and those
                                                    who want to learn about information technology in particular. Although I have not worked much
                                                    with DSC yet, I hope it will always keep the enthusiasm and rapidly developing. <small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item card-body container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/Image/mind6.jpg" alt="" class="rounded img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="title">Hồ Thị Tuyết Sương - Student Relations Office</h4>
                                                <p class="text-justify"><small class="fa fa-quote-left"></small> My first impression about DSC is a highly academic club
                                                    developed by Google. Therefore, students have opportunities to access useful knowledge, especially new technology from
                                                    Google. I hope that DSC will be flourish and bring achievements and glory to our school.<small class="fa fa-quote-left"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a> -->
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
@endsection