<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Trang quản trị </span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">

    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Xuân</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>QUẢN TRỊ CỬA HÀNG </h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Trang chủ </a>
    <a href="?thamso=menu_doc" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Menu dọc </a>
    <a href="?thamso=menu_ngang" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Menu ngang </a>
    <a href="?thamso=hoa_don" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i> Hóa đơn </a>
    <a href="?thamso=san_pham" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Sản phẩm </a>
    <a href="?thamso=san_pham_trang_chu" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Sản phẩm trang chủ </a>
    <a href="?thamso=san_pham_noi_bat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Sản phẩm nổi bật</a>
    <a href="?thamso=sua_quang_cao_trai" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Sửa quảng cáo trái </a>
    <a href="?thamso=sua_quang_cao_phai" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Sửa quảng cáo phải</a>
    <a href="?thamso=slideshow" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Slideshows</a>
    <a href="?thamso=sua_thong_tin_quan_tri" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Thay đổi thông tin quản trị </a><br>
    <a href="?thamso=thoat"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i> Thoát </a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <center>
    <a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Quản trị cửa hàng</a>
    </center>
  </header>
  <center>
  <?php
      include("chuc_nang/quan_tri_2/dieu_huong.php");
  ?>
</center>
