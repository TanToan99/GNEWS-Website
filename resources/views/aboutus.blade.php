<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="favicon.ico" />
   <title>DSC UoG</title>
   <link href="{{ asset('/css/Aboutus/box.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/header.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/section.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body>
   <header class="site-header" style="font-size: 70%">
      <div class="navbar">
         <div class="LogoText">
            <a href="{{ URL::to('/Home') }}" title="DSC UoG" class="hide-text">
               <img id="Logo" alt="DSC UoG" src="/Image/DSCLogo.png">
            </a>
            <span id="text-mask"><a href="{{ URL::to('/Home') }}" style="font-size: 70%">DSC UoG (Danang campus)</a> </span>
            <ul class="Navbar">
               <li><a class="acti" href="{{ URL::to('../Home') }}">Home</a></li>
               <li><a href="https://www.facebook.com/dsc.uog">Fanpage</a></li>
               <li><a href="{{ URL::to('/AboutUs') }}">About Us</a></li>
               @if(!Auth::check())
               <li><a class="login" href="{{ URL::to('auth/google') }}">Login</a></li>
               @else
               <li class="username"><a>{{ Auth::user()->fullname }}</a></li>
               @endif
            </ul>
         </div>
      </div>
   </header>
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
   <div class="back">
      <img src="/Image/br.png" alt="">
   </div>
   <section>
      <div class="member">
         <div class="teamlead">
            <h3 id="teamh3">Team Lead</h3>
            <img id=imageteamhead src="/Image/slide4.jpg" alt="">
            <li id="intro">𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) gồm 2 mảng chính là Tech và non-Tech (Business, Marketing và Design).
               Chúng mình mong muốn thúc đẩy sự sáng tạo của các bạn đến từ nhiều chuyên ngành khác nhau, đồng
               thời, tạo cơ hội cho các bạn phát triển kỹ năng làm việc và mở rộng mối quan hệ cá nhân.</li>
            <div class="imageteam">
               <div class="leaddsc">
                  <li id="act">Lead of DSC UoG</li>
                  <img src="/Image/Member/NTM.jpg" alt="">
                  <li id="namemem">Ngô Tiểu My</li>
               </div>
               <div class="memberdetailfour">
                  <div>
                     <li id="act">Head of Business Team</li>
                     <img src="/Image/Member/LST.jpg" alt="">
                     <li id="namemem">Lê Sơn Tùng</li>
                  </div>
                  <div>
                     <li id="act">Head of Marketing Team</li>
                     <img src="/Image/Member/HPND.jpg" alt="">
                     <li id="namemem">Huỳnh Phạm Nguyệt Dương</li>
                  </div>
                  <div>
                     <li id="act">Head of Design Team</li>
                     <img src="/Image/Member/NLC.jpg" alt="">
                     <li id="namemem">Nguyễn Linh Chi</li>
                  </div>
                  <div>
                     <li id="act">Head of Technical Team</li>
                     <img src="/Image/Member/NHL.jpg" alt="">
                     <li id="namemem">Nguyễn Hoàng Lâm</li>
                  </div>
               </div>
            </div>
         </div>
         <div class="teamtech">
            <h3 id="teamh3">Technical Team</h3>

            <li id="intro">Team Technical có thể được xem là trái tim của 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬). Đây là nơi lí tưởng
               cho các bạn sinh viên có thể cùng nhau tạo ra các dự án và giải pháp công nghệ. Technical cũng là team lên
               nội dung cho các buổi Workshop/Techtalk do 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) tổ chức. Để là một thành viên của Tech,
               các bạn không chỉ cần đam mê lập trình, có kiến thức về CNTT,...mà còn phải có khả năng làm việc nhóm, hoà
               đồng, năng động. Và hơn hết chính là khát khao học hỏi và phát triển không ngừng.</li>
            <div class="imageteam">
               <div class="headteam">
                  <li id="act">Head of Technical Team</li>
                  <img src="/Image/Member/NHL.jpg" alt="">
                  <li id="namemem">Nguyễn Hoàng Lâm</li>
               </div>
               <div class="memberdetail">
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/PTN.jpg" alt="">
                     <li id="namemem">Phạm Trung Nam</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/LNTT.jpg" alt="">
                     <li id="namemem">Lê Ngọc Tấn Toàn</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/BTMN.jpg" alt="">
                     <li id="namemem">Bùi Thị Minh Nguyệt</li>
                  </div>

               </div>
            </div>
         </div>
         <div class="teambusiness">
            <h3 id="teamh3">Business Team</h3>

            <li id="intro">Team Business chịu trách nhiệm cho mọi vấn đề về tài chính, giấy tờ, đối ngoại, quan hệ công chúng,...của câu lạc bộ.
               Họ còn là người hoạch định tiềm năng kinh doanh của các giải pháp công nghệ do DSC đưa ra. Có thể nói, Business chính là những
               người mang DSC đến gần hơn với cộng đồng.</li>
            <div class="imageteam">
               <div class="headteam">
                  <li id="act">Head of Business Team</li>
                  <img src="/Image/Member/LST.jpg" alt="">
                  <li id="namemem">Lê Sơn Tùng</li>
               </div>
               <div class="memberdetail">
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/TTMY.jpg" alt="">
                     <li id="namemem">Trần Thị Mỹ Ý</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/TLDQ.jpg" alt="">
                     <li id="namemem">Trần Lê Đức Quang</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/NVH.png" alt="">
                     <li id="namemem">Nguyễn Văn Hiếu</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/NNNT.jpg" alt="">
                     <li id="namemem">Nguyễn Ngô Như Thảo</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/LNTM.jpg" alt="">
                     <li id="namemem">Lê Nguyễn Thảo My</li>
                  </div>

               </div>
            </div>
         </div>
         <div class="teammarketing">
            <h3 id="teamh3">Marketing Team</h3>

            <li id="intro">Team Marketing đóng vai trò quan trọng trong việc đưa hình ảnh của 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) đến gần hơn với các bạn sinh viên.
               Thông qua các chiến dịch truyền thông, hay các ấn phẩm trên fanpage,... Marketing có thể quảng bá các chương trình, sự kiện của CLB đến với
               đông đảo công chúng.</li>
            <div class="imageteam">
               <div class="headteam">
                  <li id="act">Head of Marketing Team</li>
                  <img src="/Image/Member/HPND.jpg" alt="">
                  <li id="namemem">Huỳnh Phạm Nguyệt Dương</li>
               </div>
               <div class="memberdetailfour">
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/TDT.jpg" alt="">
                     <li id="namemem">Trần Đình Thịnh</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/NPTM.jpg" alt="">
                     <li id="namemem">Nguyễn Phan Thanh Minh</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/TAT.jpg" alt="">
                     <li id="namemem">Thái Anh Toàn</li>
                  </div>
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/LTHP.jpg" alt="">
                     <li id="namemem">Lê Thị Hoàng Phi</li>
                  </div>


               </div>
            </div>
         </div>
         <div class="teammarketing">
            <h3 id="teamh3">Design Team</h3>

            <li id="intro">Thế giới công nghệ tưởng chừng khô khan, cứng nhắc, nhưng khi đi qua trí tưởng tượng và sức sáng tạo
               không giới hạn của các bạn Designers đã trở nên thu hút và thú vị hơn rất nhiều phải không nào? Đây chính là nơi
               để các bạn phô diễn khả năng nghệ thuật của mình đấy!</li>
            <div class="imageteam">
               <div class="headteam">
                  <li id="act">Head of Design Team</li>
                  <img src="/Image/Member/NLC.jpg" alt="">
                  <li id="namemem">Nguyễn Linh Chi</li>
               </div>
               <div class="memberdetailfour">
                  <div>
                     <li id="act"></li>
                     <img src="/Image/Member/PPT.jpg" alt="">
                     <li id="namemem">Phạm Phú Trường</li>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>
</body>

<footer>
   <div class="info">
      <div class="logof">
         <img src="/Image/logofooter.jpg">
      </div>

      <div class="contact">
         <h2>Contact</h2>
         <p><img src="/Image/location.png" alt=""> 658 Ngô Quyền, Quận Sơn Trà, Đà Nẵng</p>
         <p><img src="/Image/mail..png" alt=""> dsc.uog@gmail.com</p>
         <p><img src="/Image/call.png" alt=""> 0915 684 515</p>

      </div>
      <!-- <div class="aboutus">
         <h2>About Us</h2>
         <a href="/"></a>
      </div> -->

   </div>
   <div class="copyright">&copy; Copyright 2021 by DSC-UoG. All Rights Reserved</div>
</footer>


</html>