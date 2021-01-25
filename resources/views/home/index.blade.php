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
                <div class="tab-pane">
                    Developer Student Club (DSC) là cộng đồng được phát triển bởi Google_Developers tại các trường đại học. <br>Với mong muốn xây dựng môi trường giúp các bạn sinh viên phát triển bản thân từ nguồn tài nguyên của 𝐆𝐨𝐨𝐠𝐥𝐞 và vận dụng những hành trang đó để các bạn cùng chung tay sáng tạo, hiện thực hóa ý tưởng thành các giải pháp cho cộng đồng, cho doanh nghiệp địa phương.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h3 class="title">
                    Tại sao DSC được xây dựng?
                </h3>
                <div class="tab-pane">
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
                <div class="tab-pane">
                    DSC sẽ tổ chức những buổi Workshop/Techtalk với chủ đề xoay quanh các công nghệ của Google, nhằm giúp các bạn sinh viên nâng cao kiến thức, kĩ năng chuyên môn. Đến với những buổi Workshop/Techtalk này, các bạn sinh viên sẽ không những có cơ hội được gặp gỡ, lắng nghe những chia sẻ từ phía diễn giả (speaker), mà còn là sân chơi dành cho các bạn đam mê công nghệ giao lưu, học hỏi. Từ đó, các bạn sẽ tích lũy thêm được kiến thức cho bản thân.                        
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div id="nav-tabs">
        <h3 class="title text-center">DSC IN YOUR MIND</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body ">
                        <img src="/Image/mind8.jpg" alt="" class="rounded img-fluid">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <h4 class="title text-center">Vũ Thu Thủy</h4>
                                <p class="">DSC là một clb mới nhưng không lạ đối với sinh viên Đại học Greenwich (Việt Nam). Được biết đã có
                                    những DSC khác ở nhiều Đại học khác trên địa bàn Đà Nẵng và trên cả nước, đã đạt một số thành tựu
                                    nhất định nhưng hiện DSC mới du nhập vào “làng CLB” tại Đại học Greenwich (Việt Nam) cơ sở Đà Nẵng.
                                    Hy vọng DSC sẽ sớm phát triển và đem lại nhiều nguồn kiến thức thú vị hơn cho sinh viên và tạo nên
                                    những giá trị mới mẻ cho môi trường quốc tế này.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body ">
                        <img src="/image/mind3.jpg" alt="" class="rounded img-fluid">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <h4 class="title text-center">Hồ Ngọc Trâm Anh</h4>
                                <p class="">Hai từ mà chị muốn nói về DSC là “chủ động” và “chuyên nghiệp”. Các bạn rất chủ động
                                    trong việc tìm kiếm những cơ hội mới. Đối với môi trường linh hoạt và năng động như
                                    Đại học Greenwich (Việt Nam) thì việc chủ động là hết sức cần thiết để không bị chìm
                                    giữa những CLB khác. Bên cạnh đó, DSC còn rất chuyên nghiệp khi tổ chức những buổi
                                    talkshow cực kì chất lượng và bổ ích dành cho các bạn đang có nhu cầu tìm hiểu những
                                    kiến thức về IT.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body ">
                        <img src="/image/mind2.jpg" alt="" class="rounded img-fluid">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <h4 class="title text-center">Lữ Quốc Đạt</h4>
                                <p class="">Anh nghĩ DSC là một môi trường khá đa dạng và năng động vì hội tụ những sinh viên đầy
                                    nhiệt huyết đến từ các chuyên ngành khác nhau. Giúp các bạn có thể chia sẻ kinh nghiệm
                                    và trau dồi kiến thức nhiều hơn. Mong rằng DSC càng ngày nhận được nhiều sự ủng hộ và
                                    phát triển lớn mạnh hơn nữa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection