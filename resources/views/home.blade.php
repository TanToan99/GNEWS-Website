<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="favicon.ico" />
   <title>DSC UoG</title>
   <link href="{{ asset('/css/Home/header.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/section.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/Home/footer.css') }}" rel="stylesheet">

</head>

<body>
   <header class="site-header" style="font-size: 70%">
      <div class="navbar">
         <div class="LogoText">
            <a href="#" title="DSC UoG" class="hide-text">
               <img id="Logo" alt="DSC UoG" src="/Image/DSCLogo.png">
            </a>
            <span id="text-mask"><a href="#" style="font-size: 70%">DSC UoG (Danang campus)</a> </span>
            <ul class="Navbar">
               <li><a class="acti" href="#home">Home</a></li>
               <li><a href="https://www.facebook.com/dsc.uog">Fanpage</a></li>
               <li><a href="#AboutUs">About Us</a></li>
               @if(!Auth::check())
               <li><a href="{{ URL::to('auth/google') }}">Login</a></li>
               @else
               {{ Auth::user()->fullname }}
               @endif
            </ul>
         </div>
      </div>
   </header>
   <section>
      <div class="slideshow-container">
         <div class="mySlides fade">
            <img src="/Image/slide1.jpg">
         </div>
         <div class="mySlides fade">
            <img src="/Image/slide4.jpg">
         </div>
         <div class="mySlides fade">
            <img src="/Image/slide5.jpg">
         </div>
         <div class="mySlides fade">
            <img src="/Image/slide2.jpg">
         </div>
         <div class="mySlides fade">
            <img src="/Image/slide3.jpg">
         </div>
      </div>
      <br>
      <div style="text-align:center">
         <span class="dot" onclick="currentSlide(0)"></span>
         <span class="dot" onclick="currentSlide(1)"></span>
         <span class="dot" onclick="currentSlide(2)"></span>
         <span class="dot" onclick="currentSlide(3)"></span>
         <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <script>
         var slideIndex;

         function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex].style.display = "block";
            dots[slideIndex].className += " active";

            slideIndex++;

            if (slideIndex > slides.length - 1) {
               slideIndex = 0
            }

            setTimeout(showSlides, 5000);
         }
         showSlides(slideIndex = 0);

         function currentSlide(n) {
            showSlides(slideIndex = n);
         }
      </script>

   </section>

   <section>
      <div class="container">
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
         <h3 id="mindh3">💚𝐃𝐒𝐂-𝐔𝐨𝐆 in your mind💚</h3>
         <div class="mind">

            <div class="yourmind">
               <img src="/Image/mind1.jpg">
            </div>
            <div class="yourmind">
               <img src="/Image/mind2.jpg">
            </div>
            <div class="yourmind">
               <img src="/Image/mind3.jpg">
            </div>
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
         <p><img src="/Image/location_icon.png" alt=""> 658 Ngô Quyền, Quận Sơn Trà, Đà Nẵng</p>
         <p><img src="/Image/mail..png" alt=""> dsc.uog@gmail.com</p>
         <p><img src="/Image/call.png" alt=""> 0915 684 515</p>

      </div>
      <!-- <div class="aboutus">
         <h2>About Us</h2>
         <a href="/"></a>
      </div> -->

   </div>
   <div class="copyright">&copy; Copyright 2020 by DSC-UoG. All Rights Reserved</div>
</footer>


</html>