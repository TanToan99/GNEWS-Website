@extends('layouts.app')

@section('title','DSC | Home')

@include('shared.header')
@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/image/DSCWhat.png" alt="" class="rounded img-fluid">
            </div>
            <div class="col-md-9">
                <h3 class="title">
                    DSC là gì?
                </h3>
                <div class="tab-pane text-justify">
                    Developer Student Club (DSC) là cộng đồng được phát triển bởi Google_Developers tại các trường đại học. <br>Với mong muốn xây dựng môi trường giúp các bạn sinh viên phát triển bản thân từ nguồn tài nguyên của 𝐆𝐨𝐨𝐠𝐥𝐞 và vận dụng những hành trang đó để các bạn cùng chung tay sáng tạo, hiện thực hóa ý tưởng thành các giải pháp cho cộng đồng, cho doanh nghiệp địa phương.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h3 class="title">
                    Tại sao DSC được xây dựng?
                </h3>
                <div class="tab-pane text-justify">
                Thông qua các hoạt động/sự kiện, DSC mong muốn giúp các bạn sinh viên thu hẹp khoảng cách giữa #Lí_thuyết và #Thực_tiễn. Đồng thời truyền động lực, cảm hứng đến với các bạn sinh viên để họ tạo nên những sản phẩm ứng dụng công nghệ, góp phần thay đổi tích cực cho cộng đồng🥰
                </div>
            </div>
            <div class="col-md-3">
                <img src="/image/DSCWhy.png" alt="" class="rounded img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="/image/DSCHow.png" alt="" class="rounded img-fluid">
            </div>
            <div class="col-md-9">
                <h3 class="title">
                    DSC hoạt động như thế nào?
                </h3>
                <div class="tab-pane text-justify">
                    DSC sẽ tổ chức những buổi Workshop/Techtalk với chủ đề xoay quanh các công nghệ của Google, nhằm giúp các bạn sinh viên nâng cao kiến thức, kĩ năng chuyên môn. Đến với những buổi Workshop/Techtalk này, các bạn sinh viên sẽ không những có cơ hội được gặp gỡ, lắng nghe những chia sẻ từ phía diễn giả (speaker), mà còn là sân chơi dành cho các bạn đam mê công nghệ giao lưu, học hỏi. Từ đó, các bạn sẽ tích lũy thêm được kiến thức cho bản thân.                        
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
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item card-body container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="/Image/mind8.jpg" alt="" class="rounded img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="title">Vũ Thu Thủy - Cán bộ CTSV Đại Học Greenwich Việt Nam(CS Đà Nẵng)</h4>
                                            <p class="text-justify"><small class="fa fa-quote-left"></small> DSC là một clb mới nhưng không lạ đối với sinh viên Đại học Greenwich (Việt Nam). Được biết đã có
                                                những DSC khác ở nhiều Đại học khác trên địa bàn Đà Nẵng và trên cả nước, đã đạt một số thành tựu
                                                nhất định nhưng hiện DSC mới du nhập vào “làng CLB” tại Đại học Greenwich (Việt Nam) cơ sở Đà Nẵng.
                                                Hy vọng DSC sẽ sớm phát triển và đem lại nhiều nguồn kiến thức thú vị hơn cho sinh viên và tạo nên
                                                những giá trị mới mẻ cho môi trường quốc tế này. <small class="fa fa-quote-left"></small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item card-body container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="/image/mind3.jpg" alt="" class="rounded img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="title">Hồ Ngọc Trâm Anh - Cán bộ CTSV Đại Học Greenwich Việt Nam(CS Đà Nẵng)</h4>
                                                    <p class="text-justify"><small class="fa fa-quote-left"></small> Hai từ mà chị muốn nói về DSC là “chủ động” và “chuyên nghiệp”. Các bạn rất chủ động
                                                        trong việc tìm kiếm những cơ hội mới. Đối với môi trường linh hoạt và năng động như
                                                        Đại học Greenwich (Việt Nam) thì việc chủ động là hết sức cần thiết để không bị chìm
                                                        giữa những CLB khác. Bên cạnh đó, DSC còn rất chuyên nghiệp khi tổ chức những buổi
                                                        talkshow cực kì chất lượng và bổ ích dành cho các bạn đang có nhu cầu tìm hiểu những
                                                        kiến thức về IT. <small class="fa fa-quote-left"></small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active card-body container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="/image/mind2.jpg" alt="" class="rounded img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="title">Lữ Quốc Đạt - Cán bộ CTSV Đại Học Greenwich Việt Nam(CS Đà Nẵng)</h4>
                                            <p class="text-justify"><small class="fa fa-quote-left"></small> Anh nghĩ DSC là một môi trường khá đa dạng và năng động vì hội tụ những sinh viên đầy
                                                nhiệt huyết đến từ các chuyên ngành khác nhau. Giúp các bạn có thể chia sẻ kinh nghiệm
                                                và trau dồi kiến thức nhiều hơn. Mong rằng DSC càng ngày nhận được nhiều sự ủng hộ và
                                                phát triển lớn mạnh hơn nữa. <small class="fa fa-quote-left"></small></p>
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