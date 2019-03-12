<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<div class="hovergallery">
<?php
    $_SESSION['trang_chi_tiet_gio_hang']="co";
    $id=$_GET['id'];
    $tv="select * from san_pham where id='$id'";
    $tv_1=mysql_query($tv);
    $tv_2=mysql_fetch_array($tv_1);
    $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
    echo "<table>";
        echo "<tr>";
            echo "<td width='200px' align='center' >";
                echo "<img src='$link_anh' width='220px' >";
            echo "</td>";
            echo "<td valign='top' >";
                echo "<a href='#'>";
                    echo $tv_2['ten'];
                echo "</a>";
                echo "<br>";
                echo "<br>";
                echo number_format($tv_2['gia']);  
                echo "<br>";
                echo "<br>";
                echo "<form>";
                    echo "<input type='hidden' name='thamso' value='gio_hang' > ";
                    echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
                    echo "số lượng  ";
                    echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
                    echo "<br><br>";
                    //echo "size giày  ";
                    //echo "<input type='text' name='size_giay' value='' style='width:50px'> ";
                    echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
                echo "</form>";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan='2' >";

                echo $tv_2['noi_dung'];
            echo "</td>";
        echo "</tr>";
    echo "</table>";
?>
<h2>Nhận xét của khách hàng </h2>
 <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     <div class="item active">
       <h4>"Bền đẹp , màu sắc năng động trẻ trung"<br><span>Phạm Hải</span></h4>
     </div>
     <div class="item">
       <h4>"Chỉ một từ thôi...xuất sắc !!!"<br><span>Thu Hoài </span></h4>
     </div>
     <div class="item">
       <h4>"Một trong những đôi ưng ý nhất của tôi "<br><span>Tuấn Kiệt</span></h4>
     </div>
   </div>

   <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
</div>

</body>
</html>
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h </h2>
<p></p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="hinh_anh/logo/icon1.jpg" alt="Boss" style="width:100px;height:100px" class="w3-circle w3-hover-opacity">
  <h3></h3>
  <p>Đảm bảo chính hãng</p>
</div>

<div class="w3-quarter">
  <img src="hinh_anh/logo/icon4.jpg"  style="width:100px;height:100px" class="w3-circle w3-hover-opacity">
  <h3></h3>
  <p>Giao hàng tận nơi</p>
</div>

<div class="w3-quarter">
  <img src="hinh_anh/logo/icon2.jpg"  style="width:100px;height:100px" class="w3-circle w3-hover-opacity">
  <h3></h3>
  <p>Bảo hành 2 năm</p>
</div>

<div class="w3-quarter">
  <img src="hinh_anh/logo/icon3.jpg"  style="width:100px;height:100px" class="w3-circle w3-hover-opacity">
  <h3></h3>
  <p>1 đổi 1 trong 1 tháng</p>
</div>

</div>
</div>


</div>
