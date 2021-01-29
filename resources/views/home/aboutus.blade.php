@extends('layouts.app')

@section('title','DSC | About Us')
@section('custom-js')
<link href="{{ asset('/css/aboutus.css') }}" rel="stylesheet">
@endsection

@section('header')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('image/bg.png');">
   <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
   <div>
      <div class="wrapper">
         <div class="box-area">
            <div class="box front-box"></div>
            <div class="box front-middle-box"></div>
            <div class="box right-box"></div>
            <div class="box back-middle-box"></div>
            <div class="box back-box"></div>
            <div class="box left-box"></div>
            <div class="box top-box"></div>
            <div class="box bottom-box"></div>
         </div>
      </div>
   </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
               <div class="brand">
                   <h1>Developer Student Club</h1>
                   <h3>Universiry of Greenwich (Da Nang campus)</h3>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section section-basic">
   <div class="container">
      <h3 class="title text-center">TEAM LEAD</h3>
      <div class="tab-pane text-justify mb-5">
         𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) gồm 2 mảng chính là Tech và non-Tech (Business, Marketing và Design).
         Chúng mình mong muốn thúc đẩy sự sáng tạo của các bạn đến từ nhiều chuyên ngành khác nhau, đồng
         thời, tạo cơ hội cho các bạn phát triển kỹ năng làm việc và mở rộng mối quan hệ cá nhân.
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/image/member/mynt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>DSC Lead</h5>
            <p>Ngô Tiểu My</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2">
            <img src="/image/member/tungls.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Business</h5>
            <p>Lê Sơn Tùng</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/duonghpn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Marketing</h5>
            <p>Huỳnh Phạm Nguyệt Dương</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/chinl.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Design</h5>
            <p>Nguyễn Linh Chi</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/lamnh.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Technical</h5>
            <p>Nguyễn Hoàng Lâm</p>
         </div>
      </div>
      <hr>
   </div>

   <div class="container">
      <h3 class="title text-center">TEAM TECHNICAL</h3>
      <div class="tab-pane text-justify mb-5">
         Team Technical có thể được xem là trái tim của 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬). Đây là nơi lí tưởng
         cho các bạn sinh viên có thể cùng nhau tạo ra các dự án và giải pháp công nghệ. Technical cũng là team lên
         nội dung cho các buổi Workshop/Techtalk do 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) tổ chức. Để là một thành viên của Tech,
         các bạn không chỉ cần đam mê lập trình, có kiến thức về CNTT,...mà còn phải có khả năng làm việc nhóm, hoà
         đồng, năng động. Và hơn hết chính là khát khao học hỏi và phát triển không ngừng.
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/image/member/lamnh.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Technical</h5>
            <p>Nguyễn Hoàng Lâm</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2"></div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/nampt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Phạm Trung Nam</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/toanlnt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Lê Ngọc Tấn Toàn</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/nguyetbtm.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Bùi Thị Minh Nguyệt</p>
         </div>
         <div class="col-sm-2 ml-auto"></div>
      </div>
      <hr>
   </div>

   <div class="container">
      <h3 class="title text-center">TEAM BUSINESS</h3>
      <div class="tab-pane text-justify mb-5">
         Team Business chịu trách nhiệm cho mọi vấn đề về tài chính, giấy tờ, đối ngoại, quan hệ công chúng,...của câu lạc bộ.
         Họ còn là người hoạch định tiềm năng kinh doanh của các giải pháp công nghệ do DSC đưa ra. Có thể nói, Business chính là những
         người mang DSC đến gần hơn với cộng đồng
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/image/member/tungls.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Business</h5>
            <p>Lê Sơn Tùng</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2">
            <img src="/image/member/yttm.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Thị Mỹ Ý</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/quangtld.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Lê Đức Quang</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/hieunv.png" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Nguyễn Văn Hiếu</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/thaonnn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Nguyễn Ngô Như Thảo</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/image/member/mylnt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Lê Nguyễn Thảo My</p>
         </div>
      </div>
      <hr>
   </div>

   
   <div class="container">
      <h3 class="title text-center">TEAM DESIGN</h3>
      <div class="tab-pane text-justify mb-5">
         Thế giới công nghệ tưởng chừng khô khan, cứng nhắc, nhưng khi đi qua trí tưởng tượng và sức sáng tạo
               không giới hạn của các bạn Designers đã trở nên thu hút và thú vị hơn rất nhiều phải không nào? Đây chính là nơi
               để các bạn phô diễn khả năng nghệ thuật của mình đấy!
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/image/member/chinl.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Design</h5>
            <p>Nguyễn Linh Chi</p>
         </div>
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/image/member/truongpp.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Phạm Phú Trường</p>
         </div>
      </div>
      <hr>
   </div>
</div>
@endsection