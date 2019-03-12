<link rel="stylesheet" type="text/css" href="giao_dien.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<body class="w3-content" style="max-width:1200px">
<div class="container text-center">

  <h1>THƯƠNG HIỆU </h1>
  <br>
<//div class="background" id="background" >
  <div class="row">
  <div class="col-sm-2">
      <img src="hinh_anh/logo/logo3.jpg" class="img-responsive" style="width:100% ;height :150px" alt="Image">
      <p>CONVERSE</p>
    </div>
    <div class="col-sm-2">
      <img src="hinh_anh/logo/logo attom.jpg" class="img-responsive" style="width:100%;height :150px" alt="Image">
      <p>NIKE</p>
    </div>
    <div class="col-sm-2">
      <img src="hinh_anh/logo/logo2.jpg" class="img-responsive" style="width:100%;height :150px" alt="Image">
      <p>VANS</p>
    </div>
    <div class="col-sm-2">
      <img src="hinh_anh/logo/logo5.jpg" class="img-responsive" style="width:100%; height :150px"  alt="Image">
      <p>ADIDAS</p>
    </div>
    <div class="col-sm-2">
      <img src="hinh_anh/logo/logo6.jpg" class="img-responsive" style="width:100%;height :150px" alt="Image">
      <p>New Blance</p>
    </div>
    <div class="col-sm-2">
      <img src="hinh_anh/logo/logo7.jpg" class="img-responsive" style="width:100%;height :150px" alt="Image">
      <p>Lacost </p>
    </div>
</div>
</div>
</div><br>
<?php
include("chuc_nang/slideshow/banner.php");
?>

<center><h1> KHUYẾN MÃI </h1></center>
 <br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" >HOT DEAL MUA 1 TẶNG 1</div>
        <div class="panel-body"><img src="hinh_anh/slideshow/hinh5.jpg" class="img-responsive" style="width:100%; height:200px"  alt="Image"></div>
        <div class="panel-footer">Sketcher khuyến mãi cực sốc </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">HAPPY HOURS UP TO 50%</div>
        <div class="panel-body"><img src="hinh_anh/slideshow/hinh6.jpg" class="img-responsive" style="width:100%;height:200px" alt="Image"></div>
        <div class="panel-footer">Giảm tới 50% mọi hãng từ 12h-14h </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><//a href="tin_tuc/tin_tuc.html" >HAPPY FATHER DAY </div>
        <div class="panel-body"><img src="hinh_anh/slideshow/hinh7.jpg" class="img-responsive" style="width:100% ;height:200px" alt="Image"></div>
        <div class="panel-footer">Giảm giá 25% cho giày Convert  </div>
      </div>
    </div>
  </div>

</div>
<br>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">

  <h2 class="text-center">LIÊN HỆ LÀM ĐỐI TÁC</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Hãy liên hệ với chúng tôi và nhận được tư vấn trong vòng 24h </p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Tp. Hồ Chí Minh , Việt Nam</p>
      <p><span class="glyphicon glyphicon-phone"></span>01685760676</p>
      <p><span class="glyphicon glyphicon-envelope"></span> tranlexuan1711@gmail.com </p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button name="btn_lien_he" class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer -->

<footer class="w3-padding-64 w3-lightgray w3-small w3-center" id="footer" >
<div class="w3-row-padding">

     <div class="w3-col s4" id="borderimg">

       <h4>LIÊN HỆ</h4>
       <p>Cần tư vấn ? Liên hệ ngay </p>
       <form action="/action_page.php" target="_blank">
         <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
         <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
         <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
         <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
         <button type="submit" class="w3-button w3-block w3-black">Send</button>
       </form>
     </div>

     <div class="w3-col s4">
       <h4>About</h4>
       <p><a href="http://localhost/ban_hang/index.php">Về chúng tôi </a></p>
       <p><a href="http://localhost/ban_hang/index.php">Tin tuyển dụng </a></p>
       <p><a href="http://localhost/ban_hang/index.php">Hỗ trợ </a></p>
       <p><a href="http://localhost/ban_hang/index.php?thamso=xuat_mot_tin&id=6">Tìm cửa hàng</a></p>
       <p><a href="http://localhost/ban_hang/index.php?thamso=xuat_mot_tin&id=2">Giao hàng</a></p>
       <p><a href="http://localhost/ban_hang/index.php?thamso=gio_hang">Thanh toán</a></p>
       <p><a href="http://localhost/ban_hang/index.php">Điểm thưởng</a></p>
       <p><a href="http://localhost/ban_hang/index.php?thamso=xuat_mot_tin&id=3">Đổi trả </a></p>
       <p><a href="#">Trợ giúp</a></p>
     </div>

     <div class="w3-col s4 w3-justify">
       <h4>Cửa hàng</h4>
       <p><i class="fa fa-fw fa-map-marker"></i> Shop giày thể thao online </p>
       <p><i class="fa fa-fw fa-phone"></i> 01685760676 </p>
       <p><i class="fa fa-fw fa-envelope"></i> tranlexuan1711@gmail.com </p>
       <h4>Thanh toán qua </h4>
       <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
       <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
       <br>
       <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
       <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
       <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
       <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
       <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
       <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
     </div>

   </div><br><br>

   <class="container-fluid text-center">
     <p>BẢNG QUYỀN WEBSITE THUỘC VỀ TRẦN LÊ XUÂN</p>
     <form class="form-inline">Gửi email cho shop :
       <input type="email" class="form-control" size="50" placeholder="Email Address">
       <button type="button" class="btn btn-danger">Gửi</button>
     </form>

 </footer>

<div class="w3-black w3-center w3-padding-24">Powered by <a target="_blank" class="">LÊ XUÂN</a></div>
</footer>
 <!-- End page content -->


<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
   <div class="w3-container w3-white w3-center">
     <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
     <h2 class="w3-wide">NEWSLETTER</h2>
     <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
     <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
     <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
   </div>
 </div>
</div>

<script>
// Accordion
function myAccFunc() {
   var x = document.getElementById("demoAcc");
   if (x.className.indexOf("w3-show") == -1) {
       x.className += " w3-show";
   } else {
       x.className = x.className.replace(" w3-show", "");
   }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
   document.getElementById("mySidebar").style.display = "block";
   document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
   document.getElementById("mySidebar").style.display = "none";
   document.getElementById("myOverlay").style.display = "none";
}
</script>
