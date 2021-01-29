@extends('layouts.app')

@section('title','DSC | About Us')

@include('shared.header')
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
@section('content')

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
               <li id="act">DSC Lead</li>
               <img src="/Image/Member/mynt.jpg" alt="">
               <li id="namemem">Ngô Tiểu My</li>
            </div>
            <div class="memberdetail">
               <div>
                  <li id="act">Head of Business Team</li>
                  <img src="/Image/Member/tungls.jpg" alt="">
                  <li id="namemem">Lê Sơn Tùng</li>
               </div>
               <div>
                  <li id="act">Head of Marketing Team</li>
                  <img src="/Image/Member/duonghpn.jpg" alt="">
                  <li id="namemem">Huỳnh Phạm Nguyệt Dương</li>
               </div>
               <div>
                  <li id="act">Head of Design Team</li>
                  <img src="/Image/Member/chinl.jpg" alt="">
                  <li id="namemem">Nguyễn Linh Chi</li>
               </div>
               <div>
                  <li id="act">Head of Technical Team</li>
                  <img src="/Image/Member/lamnh.jpg" alt="">
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
               <img src="/Image/Member/lamnh.jpg" alt="">
               <li id="namemem">Nguyễn Hoàng Lâm</li>
            </div>
            <div class="memberdetail">
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/nampt.jpg" alt="">
                  <li id="namemem">Phạm Trung Nam</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/toanlnt.jpg" alt="">
                  <li id="namemem">Lê Ngọc Tấn Toàn</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/nguyetbtm.jpg" alt="">
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
               <img src="/Image/Member/tungls.jpg" alt="">
               <li id="namemem">Lê Sơn Tùng</li>
            </div>
            <div class="memberdetail">
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/yttm.jpg" alt="">
                  <li id="namemem">Trần Thị Mỹ Ý</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/quangtld.jpg" alt="">
                  <li id="namemem">Trần Lê Đức Quang</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/hieunv.png" alt="">
                  <li id="namemem">Nguyễn Văn Hiếu</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/thaonnn.jpg" alt="">
                  <li id="namemem">Nguyễn Ngô Như Thảo</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/mylnt.jpg" alt="">
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
               <img src="/Image/Member/duonghpn.jpg" alt="">
               <li id="namemem">Huỳnh Phạm Nguyệt Dương</li>
            </div>
            <div class="memberdetail">
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/thinhtd.jpg" alt="">
                  <li id="namemem">Trần Đình Thịnh</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/minhnpt.jpg" alt="">
                  <li id="namemem">Nguyễn Phan Thanh Minh</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/toanta.jpg" alt="">
                  <li id="namemem">Thái Anh Toàn</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/philth.jpg" alt="">
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
               <img src="/Image/Member/chinl.jpg" alt="">
               <li id="namemem">Nguyễn Linh Chi</li>
            </div>
            <div class="memberdetail">
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/truongpp.jpg" alt="">
                  <li id="namemem">Phạm Phú Trường</li>
               </div>
               <div>
                  <li id="act"></li>
                  <img src="/Image/Member/huyhk.png" alt="">
                  <li id="namemem">Huỳnh Khắc Huy</li>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>



@endsection