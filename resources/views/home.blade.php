<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="favicon.ico" />
   <title>DSC UoG</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="{{ asset('/css/Home/header.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/section.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/footer.css') }}" rel="stylesheet">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
   <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-7/css/6-1-7.css">

</head>

<body>
   <header class="site-header">
      <div class="navbar">
         <div class="LogoText">
            <a href="{{ URL::to('/Home') }}" title="DSC UoG" class="hide-text">
               <img id="Logo" alt="DSC UoG" src="/Image/DSCLogo.png" height="100px">
            </a>
            <span id="text-mask"><a href="{{ URL::to('/Home') }}" style="font-size: 70%">DSC UoG (Danang campus)</a> </span>
            <ul class="Navbar">
               <li><a class="link" href="{{ URL::to('../Home') }}">Home</a></li>
               <li><a class="link" href="https://www.facebook.com/dsc.uog">Fanpage</a></li>
               <li><a class="link" href="{{ URL::to('/AboutUs') }}">About Us</a></li>
               @if(!Auth::check())
               <li><a class="login" href="{{ URL::to('auth/google') }}">Login</a></li>
               @else
               <li class="username"><a>{{ Auth::user()->fullname }}</a></li>
               @endif
            </ul>

         </div>
      </div>
   </header>

   <section>
      <ul class="slider">
         <li><img src="/Image/slide1.jpg" alt=""></li>
         <li><img src="/Image/slide2.jpg" alt=""></li>
         <li><img src="/Image/slide3.jpg" alt=""></li>
         <li><img src="/Image/slide4.jpg" alt=""></li>
         <li><img src="/Image/slide5.jpg" alt=""></li>
         <li><img src="/Image/slide6.jpg" alt=""></li>
         <!--/slider-->
      </ul>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-7/js/6-1-7.js"></script>
      <script>
         $('.slider').slick({
            autoplay: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="slick-prev"></div>',
            nextArrow: '<div class="slick-next"></div>',
            centerMode: true,
            variableWidth: true,
            dots: true,
         });
      </script>
   </section>
   <div class="background background0"></div>
   <div class="background background1"></div>
   <div class="background background2"></div>
   <div class="background background3"></div>
   <div class="background background4"></div>
   <div class="background background5"></div>
   <div class="criterion">
      <div class="text text0">D</div>
      <div class="text text1">S</div>
      <div class="text text2">C</div>
      <div class="text text3">U</div>
      <div class="text text4">o</div>
      <div class="text text5">G</div>
      <div class="frame frame0"></div>
      <div class="frame frame1"></div>
      <div class="frame frame2"></div>
      <div class="frame frame3"></div>
      <div class="frame frame4"></div>
      <div class="frame frame5"></div>
      <div class="particle particle00"></div>
      <div class="particle particle01"></div>
      <div class="particle particle02"></div>
      <div class="particle particle03"></div>
      <div class="particle particle04"></div>
      <div class="particle particle05"></div>
      <div class="particle particle06"></div>
      <div class="particle particle07"></div>
      <div class="particle particle08"></div>
      <div class="particle particle09"></div>
      <div class="particle particle010"></div>
      <div class="particle particle011"></div>
      <div class="particle particle10"></div>
      <div class="particle particle11"></div>
      <div class="particle particle12"></div>
      <div class="particle particle13"></div>
      <div class="particle particle14"></div>
      <div class="particle particle15"></div>
      <div class="particle particle16"></div>
      <div class="particle particle17"></div>
      <div class="particle particle18"></div>
      <div class="particle particle19"></div>
      <div class="particle particle110"></div>
      <div class="particle particle111"></div>
      <div class="particle particle20"></div>
      <div class="particle particle21"></div>
      <div class="particle particle22"></div>
      <div class="particle particle23"></div>
      <div class="particle particle24"></div>
      <div class="particle particle25"></div>
      <div class="particle particle26"></div>
      <div class="particle particle27"></div>
      <div class="particle particle28"></div>
      <div class="particle particle29"></div>
      <div class="particle particle210"></div>
      <div class="particle particle211"></div>
      <div class="particle particle30"></div>
      <div class="particle particle31"></div>
      <div class="particle particle32"></div>
      <div class="particle particle33"></div>
      <div class="particle particle34"></div>
      <div class="particle particle35"></div>
      <div class="particle particle36"></div>
      <div class="particle particle37"></div>
      <div class="particle particle38"></div>
      <div class="particle particle39"></div>
      <div class="particle particle310"></div>
      <div class="particle particle311"></div>
      <div class="particle particle40"></div>
      <div class="particle particle41"></div>
      <div class="particle particle42"></div>
      <div class="particle particle43"></div>
      <div class="particle particle44"></div>
      <div class="particle particle45"></div>
      <div class="particle particle46"></div>
      <div class="particle particle47"></div>
      <div class="particle particle48"></div>
      <div class="particle particle49"></div>
      <div class="particle particle410"></div>
      <div class="particle particle411"></div>
      <div class="particle particle50"></div>
      <div class="particle particle51"></div>
      <div class="particle particle52"></div>
      <div class="particle particle53"></div>
      <div class="particle particle54"></div>
      <div class="particle particle55"></div>
      <div class="particle particle56"></div>
      <div class="particle particle57"></div>
      <div class="particle particle58"></div>
      <div class="particle particle59"></div>
      <div class="particle particle510"></div>
      <div class="particle particle511"></div>
      <div class="particle particle60"></div>
      <div class="particle particle61"></div>
      <div class="particle particle62"></div>
      <div class="particle particle63"></div>
      <div class="particle particle64"></div>
      <div class="particle particle65"></div>
      <div class="particle particle66"></div>
      <div class="particle particle67"></div>
      <div class="particle particle68"></div>
      <div class="particle particle69"></div>
      <div class="particle particle610"></div>
      <div class="particle particle611"></div>
   </div>
   <section>
      <div style="background-size: 400px 300px;" class="container">
         <div class="fact">
            <div class="fact1">
               <img src="/Image/DSCWhat.png" alt="" />
               <div class="textfact">
                  <h3>#WHAT: 𝐃𝐒𝐂 là gì?</h3>
                  <h4>𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 𝐒𝐭𝐮𝐝𝐞𝐧𝐭 𝐂𝐥𝐮𝐛 (viết tắt là 𝐃𝐒𝐂) là cộng đồng được phát triển bởi Google_Developers tại
                     các trường đại học, với mong muốn xây dựng môi trường giúp các bạn sinh viên phát triển bản thân từ
                     nguồn tài nguyên của 𝐆𝐨𝐨𝐠𝐥𝐞 và vận dụng những hành trang đó để các bạn cùng chung tay sáng tạo, hiện
                     thực hóa ý tưởng thành các giải pháp cho cộng đồng, cho doanh nghiệp địa phương </h4>
               </div>
            </div>
            <div class="fact2">
               <img src="/Image/DSCWhy.png" alt="" />
               <div class="textfact">
                  <h3>#WHY: Tại sao 𝐃𝐒𝐂 được xây dựng?</h3>
                  <h4>Thông qua các hoạt động/sự kiện, DSC mong muốn giúp các bạn sinh viên thu hẹp khoảng cách giữa
                     #Lí_thuyết và #Thực_tiễn. Đồng thời truyền động lực, cảm hứng đến với các bạn sinh viên để họ tạo nên
                     những sản phẩm ứng dụng công nghệ, góp phần thay đổi tích cực cho cộng đồng🥰</h4>
               </div>
            </div>
            <div class="fact1">
               <img src="/Image/DSCHow.png" alt="" />
               <div class="textfact">
                  <h3>#HOW: 𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) hoạt động như thế nào?</h3>
                  <h4>𝐃𝐒𝐂-𝐔𝐨𝐆 (𝐃𝐚𝐧𝐚𝐧𝐠 𝐜𝐚𝐦𝐩𝐮𝐬) sẽ tổ chức những buổi Workshop/Techtalk với chủ đề xoay quanh các công nghệ
                     của Google, nhằm giúp các bạn sinh viên nâng cao kiến thức, kĩ năng chuyên môn. Đến với những buổi Workshop/Techtalk này,
                     các bạn sinh viên sẽ không những có cơ hội được gặp gỡ, lắng nghe những chia sẻ từ phía diễn giả (speaker),
                     mà còn là sân chơi dành cho các bạn đam mê công nghệ giao lưu, học hỏi. Từ đó, các bạn sẽ tích lũy thêm được kiến thức cho bản thân.
                  </h4>
               </div>
            </div>
         </div>
      </div>

      <div class="dscmind">
         <h3 id="mindh4">      !</h3>
         <svg viewBox="0 0 960 300">
            <symbol id="s-text">
               <text text-anchor="middle" x="50%" y="80%">𝐃𝐒𝐂-𝐔𝐨𝐆 in your mind</text>
            </symbol>

            <g class="g-ants">
               <use xlink:href="#s-text" class="text-copy"></use>
               <use xlink:href="#s-text" class="text-copy"></use>
               <use xlink:href="#s-text" class="text-copy"></use>
               <use xlink:href="#s-text" class="text-copy"></use>
               <use xlink:href="#s-text" class="text-copy"></use>
            </g>
         </svg>

         <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="/Image/mind1.jpg" alt="">
                  <li class="name">Nguyễn Thị Ngọc Trinh</li>
                  <li>Ban đầu chị nghĩ các thành viên của DSC chỉ toàn là nam và các bạn sẽ khá khô khan vì
                     đây là CLB thiên về CNTT. Nhưng khi được tiếp xúc và tìm hiểu kỹ hơn, chị khá bất ngờ vì
                     không chỉ số lượng các bạn nữ khá nhiều mà các member cũng rất dễ thương và năng động.
                     Bên cạnh đó, các buổi workshop cũng được chuẩn bị rất chỉnh chu và chuyên nghiệp nhằm trau
                     dồi kiến thức bổ ích cho các bạn sinh viên.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind2.jpg" alt="">
                  <li class="name">Lữ Quốc Đạt</li>
                  <li>Anh nghĩ DSC là một môi trường khá đa dạng và năng động vì hội tụ những sinh viên đầy
                     nhiệt huyết đến từ các chuyên ngành khác nhau. Giúp các bạn có thể chia sẻ kinh nghiệm
                     và trau dồi kiến thức nhiều hơn. Mong rằng DSC càng ngày nhận được nhiều sự ủng hộ và
                     phát triển lớn mạnh hơn nữa.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind3.jpg" alt="">
                  <li class="name">Hồ Ngọc Trâm Anh</li>
                  <li>Hai từ mà chị muốn nói về DSC là “chủ động” và “chuyên nghiệp”. Các bạn rất chủ động
                     trong việc tìm kiếm những cơ hội mới. Đối với môi trường linh hoạt và năng động như
                     Đại học Greenwich (Việt Nam) thì việc chủ động là hết sức cần thiết để không bị chìm
                     giữa những CLB khác. Bên cạnh đó, DSC còn rất chuyên nghiệp khi tổ chức những buổi
                     talkshow cực kì chất lượng và bổ ích dành cho các bạn đang có nhu cầu tìm hiểu những
                     kiến thức về IT.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind4.jpg" alt="">
                  <li class="name">Nguyễn Võ Gia Miên</li>
                  <li>Được biết DSC là CLB thiên về IT nhưng chị khá ngạc nhiên vì cách truyền tải thông tin
                     của CLB. Các thành viên luôn chủ động tìm kiếm cách viết hài hước, dí dỏm, khiến các bạn
                     sinh viên không cảm thấy khô khan mặc dù chủ đề xoay quanh về công nghệ. Chị hy vọng DSC
                     sẽ ngày càng phát triển và tạo ra điểm nhấn riêng để nâng cao giá trị của mình.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind5.jpg" alt="">
                  <li class="name">Nguyễn Hoàng Giang</li>
                  <li>Mình đánh giá đây là CLB có tính học thuật cao. Những thành viên của DSC luôn tràn đầy nhiệt
                     huyết, tuổi trẻ và cả sự liều lĩnh nữa. Song, mình còn nhận thấy sự chỉnh chu trong từng kiến
                     thức mà các bạn chia sẻ hay sự kết nối cộng đồng mà CLB tạo ra. Công nghệ vẫn thay đổi hàng
                     giờ và DSC cũng không ngừng cập nhập và phát triển bản thân. Mình nghĩ đây không chỉ là một
                     CLB, đây là cả một cộng đồng, một hệ sinh thái những người đầy thú vị với niềm say mê công
                     nghệ. Hy vọng các bạn có thể tiếp tục phát triển CLB, kết nối nhiều hơn những người trẻ dám
                     thách thức và dấn thân nhé</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind6.jpg" alt="">
                  <li class="name">Hồ Thị Tuyết Sương</li>
                  <li>Ấn tượng ban đầu của chị đây là một CLB mang tính học thuật cao và được xây dựng dựa trên nền
                     tảng của Google. Từ đó giúp các bạn sinh viên được tiếp cận với những kiến thức bổ ích về công
                     nghệ mới của Google. Chị mong rằng trong thời gian sắp tới DSC sẽ phát triển vững mạnh và đem
                     đến những thành tích, vinh quang về cho nhà trường.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind7.jpg" alt="">
                  <li class="name">Võ Thị Thục Đoan</li>
                  <li>Một CLB có leader tâm huyết, dễ thương. Luôn lấy chuẩn mực chuyên nghiệp làm đầu. Có những idea
                     mới mẻ và những members cực kì đáng yêu. Có các workshop cực kỳ bổ ích và thú vị gây sự tò mò cho
                     các bạn sinh viên chuyên ngành IT nói chung và những bạn có mong muốn tìm hiểu về công nghệ thông
                     tin nói riêng. Tuy chưa được làm việc nhiều với DSC nhưng hy vọng DSC sẽ luôn giữ nhiệt huyết và
                     phát triển hơn bây giờ.</li>

               </div>
               <div class="carousel-item">
                  <img src="/Image/mind8.jpg" alt="">
                  <li class="name">Vũ Thu Thủy</li>
                  <li>DSC là một clb mới nhưng không lạ đối với sinh viên Đại học Greenwich (Việt Nam). Được biết đã có
                     những DSC khác ở nhiều Đại học khác trên địa bàn Đà Nẵng và trên cả nước, đã đạt một số thành tựu
                     nhất định nhưng hiện DSC mới du nhập vào “làng CLB” tại Đại học Greenwich (Việt Nam) cơ sở Đà Nẵng.
                     Hy vọng DSC sẽ sớm phát triển và đem lại nhiều nguồn kiến thức thú vị hơn cho sinh viên và tạo nên
                     những giá trị mới mẻ cho môi trường quốc tế này.
                  </li>

               </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
               <span class="carousel-control-next-icon"></span>
            </a>
         </div>
      </div>
      <div class="dscactive">
         <h3 id="mindh3">Hoạt động nổi bật</h3>
         <div class="posts">
            <div class="post">

            </div>
         </div>
         <div class="gitvideo">
            <video width="820" height="440" controls autoplay>
               <source src="/Image/Vid1.mp4" type="video/mp4">
            </video>
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