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
         𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) includes 2 main segments: Tech and non-Tech (Business, Marketing and Design). We want to promote your creativity from many different disciplines, 
         at the same time, give you the opportunity to develop your work skills and broaden personal relationships.
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/mynt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>DSC Lead</h5>
            <p>Ngô Tiểu My</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2">
            <img src="/Image/Member/tungls.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Business</h5>
            <p>Lê Sơn Tùng</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/duonghpn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Marketing</h5>
            <p>Huỳnh Phạm Nguyệt Dương</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/chinl.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Design</h5>
            <p>Nguyễn Linh Chi</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/lamnh.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Technical</h5>
            <p>Nguyễn Hoàng Lâm</p>
         </div>
      </div>
      <hr>
   </div>

   <div class="container">
      <h3 class="title text-center">TEAM TECHNICAL</h3>
      <div class="tab-pane text-justify mb-5">
         Team Technical can be seen as the heart of 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬). This is the ideal place
         for you students can create technology projects and solutions together. Technical is also team up
         content for the Workshop / Techtalk sessions organized by 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬). To be a member of Tech,
         you not only need to have passion for programming, have knowledge of IT, ... but also have the ability to work
         in groups, sociable and dynamic. And most of all, it is the desire to learn and develop continuously.
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/lamnh.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Technical</h5>
            <p>Nguyễn Hoàng Lâm</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2"></div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/nampt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Phạm Trung Nam</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/toanlnt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Lê Ngọc Tấn Toàn</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/nguyetbtm.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Bùi Thị Minh Nguyệt</p>
         </div>
         <div class="col-sm-2 ml-auto"></div>
      </div>
      <hr>
   </div>

   <div class="container">
      <h3 class="title text-center">BUSINESS TEAM </h3>
      <div class="tab-pane text-justify mb-5">
         Team Business is responsible for all financial matters, paperwork, external relations, public relations, ... of the club.
         They are also the business potential planners of the technology solutions offered by DSC. It can be said, Business is what
         people bring DSC closer to the community
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/tungls.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Business</h5>
            <p>Lê Sơn Tùng</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2">
            <img src="/Image/Member/yttm.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Thị Mỹ Ý</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/quangtld.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Lê Đức Quang</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/hieunv.png" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Nguyễn Văn Hiếu</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/thaonnn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Nguyễn Ngô Như Thảo</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/mylnt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Lê Nguyễn Thảo My</p>
         </div>
      </div>
      <hr>
   </div>
   <div class="container">
      <h3 class="title text-center">MARKETING TEAM </h3>
      <div class="tab-pane text-justify mb-5">
         Team Marketing plays an important role in bringing the image of 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) closer to the students.
         Through media campaigns, or publications on fanpage, ... Marketing can promote Club programs and events to the
         public.
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/duonghpn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Marketing</h5>
            <p>Huỳnh Phạm Nguyệt Dương</p>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-2">
            <img src="/Image/Member/philth.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Lê Thị Hoàng Phi</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/toanta.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Thái Anh Toàn</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/anhtn.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Nguyên Anh</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/thinhtd.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Trần Đình Thịnh</p>
         </div>
         <div class="col-sm-2 ml-auto">
            <img src="/Image/Member/minhnpt.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Nguyễn Phan Thanh Minh</p>
         </div>
      </div>
      <hr>
   </div>
   <div class="container">
      <h3 class="title text-center">DESIGN TEAM </h3>
      <div class="tab-pane text-justify mb-5">
         The world of technology seems to be dry and rigid, but when you go through your unlimited
         imagination and creativity, Designers has become much more attractive and interesting, right?
         This is the place for you to show off your artistic abilities!
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/chinl.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <h5>Head Design</h5>
            <p>Nguyễn Linh Chi</p>
         </div>
      </div>
      <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/truongpp.jpg" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Phạm Phú Trường</p>
         </div>
      </div>
      <!-- <div class="row text-center justify-content-md-center">
         <div class="col-sm-2">
            <img src="/Image/Member/huyhk.png" alt="Rounded Image" class="rounded-circle img-fluid">
            <p>Huỳnh Khắc Huy</p>
         </div>
      </div> -->
      <hr>
   </div>
</div>
@endsection