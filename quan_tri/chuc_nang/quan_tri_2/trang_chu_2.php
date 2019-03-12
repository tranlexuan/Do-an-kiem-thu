<?php
    if(!isset($bien_bao_mat)){exit();}
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
</head>
<style type="text/css" >
    a.lk_2{text-decoration:none;color:#993399;font-size:22px;line-height:30px;}
    a.lk_2:hover{color:red;}
</style>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>TIN NHẮN </h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>LƯỢT TRUY CẬP</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>LƯỢT CHIA SẺ </h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>NGƯỜI DÙNG</h4>
      </div>
    </div>
  </div>
  <?php
  	$sql = "SELECT * FROM users";
  	$query = mysqli_query($conn,$sql);
  ?>
  <h1>THÀNH VIÊN</h1>
  <table border="1px;" align="center" style="width:900px;height:300px">
  	<thead>
  		<tr>
  			<td bgcolor="#CCFFFF">ID</td>
  			<td bgcolor="#CCFFFF">Username</td>
  			<td bgcolor="#CCFFFF">Email</td>

  			<td bgcolor="#CCFFFF">Quyền</td>

  		<tr>
  	</thead>
  	<tbody>
  	<?php
  		while ( $data = mysqli_fetch_array($query) ) {
  			//$i = 0;
  			$id = $data['id'];
  	?>
  		<tr style="width:400px">
  			<td><?php echo $data['id']; ?></td>
  			<td><?php echo $data['username']; ?></td>
  			<td><?php echo $data['email']; ?></td>

  			<td><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>

  		</tr>
  	<?php
  		//	$i++;
  		}
  	?>
  	</tbody>
  </table>

  <div class="w3-panel">

      <div class="w3-twothird">
        <h5>Phản hồi </h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Hơn 90 lượt xem </td>
            <td><i>10 phút</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Cơ sở dữ liệu có lỗi </td>
            <td><i>15 phút</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>Hơn 40 tài khoản người dùng</td>
            <td><i>17 phút</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>Bình luận mới</td>
            <td><i>25 phút</i></td>
          </tr>

          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU cập nhật</td>
            <td><i>35 phút</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Lượt chia sẻ mới</td>
            <td><i>39 phút</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>Người xem mới </p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>Người dùng mới</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Lượt bình chọn </p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Quốc gia</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>France</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">Xem thêm quốc gia khác <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Người dùng gần đây</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
      <i class="fa fa-user w3-text-blue w3-large"></i>
        <span class="w3-xlarge">Bill Gates</span><br>
      </li>
      <li class="w3-padding-16">
        <i class="fa fa-user w3-text-blue w3-large"></i>
        <span class="w3-xlarge">Mark Zuckerberg</span><br>
      </li>
      <li class="w3-padding-16">
        <i class="fa fa-user w3-text-blue w3-large"></i>

        <span class="w3-xlarge">Steve Job</span><br>
      </li>
    </ul>
  </div>
  <hr>




  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Thống kê </h5>
        <p>Ngôn ngữ</p>
        <p>Quốc gia </p>
        <p>Thành Phố </p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Hệ thống</h5>
        <p>Trang web</p>
        <p>Hệ điều hành</p>
        <p>Hơn nữa</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Mục tiêu</h5>
        <p>Người dùng</p>
        <p>Khởi động </p>
        <p>Đặc sắc </p>
        <p>Phổ biến</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Bản quyền website</h4>
    <p>Powered by <a href="#" target="_blank">Trần Lê Xuân</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
