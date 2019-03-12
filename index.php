<link rel="stylesheet" href="giao_dien/giao_dien.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script>
$('#myCarousel').carousel({
    interval:   4000
});
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

</script>
<?php
    session_start();
    include("ket_noi.php");
    include("chuc_nang/ham/ham.php");
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
    if(isset($_POST['cap_nhat_gio_hang']))
      {
          include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
          trang_truoc();
      }
?>
<html>
    <head>
      <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Shop giày thể thao</title>
        <link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
        <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    /* Popup container - can be anything you want */
    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: black;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      position: fixed;
      bottom: 10px;
      right: 10px;
      width: 150px;
      height: 50px;
    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      color: white;
      background-color: black;
      width: 350px;
      height: 200px;

    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }


  </style>
    </head>
    <body>
    <center>
        <table>
              <tr>
              <td colspan="12">

                  <div class="container text-center"><br>
                        <?php
                          include("chuc_nang/slideshow/slideshow.php");
                          ?><br>
                      </div>
                    </div>
                    </div>
                      </td>
                </tr>
                <tr>

                  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">
      <img src="hinh_anh/logo/2.jpg" alt="Logo" style="width:40px;"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <?php
                include("chuc_nang/menu_ngang/menu_ngang.php");
            ?>

      </ul>
      <ul class="nav navbar-nav navbar-right">
<li><a href="?thamso=gio_hang"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ Hàng </a></li>
      </ul>
    </div>
  </div>
  </nav>

            </td>
                </tr>
                <tr>
                    <td width="200px" valign="top" >

                      <br>
                      <h3 style="color:orange"> Chọn thương hiệu</h3>
                    <?php
                        include("chuc_nang/menu_doc/menu_doc.php");
                    ?>

                    <br><br>
                    <div class="w3-bar-block w3-border w3-light-gray" style="width:200px">
                    <?php
                        include("chuc_nang/san_pham/moi.php");
                      ?>

                  </div>

                  <?php
                  include("chuc_nang/quang_cao/trai.php");
                  ?>
                    </td>

                    <td width="650px" valign="top" >
                      <div class="hovergallery">

                        <?php
                            include("chuc_nang/dieu_huong.php");
                        ?>
                      </div>
                    </td>
                    <td width="170px" valign="top" ><br>

                      <button class="open-button" onclick="openForm()">ĐĂNG KÝ </button>

                      <div class="form-popup" id="myForm" style="">
                        <form action="" method="post">
                        		<table>
                        			<tr>
                        				<td colspan="2" style="color:white"><center>Đăng ký thành viên </td><br>
                        			</tr>
                        			<tr>
                        				<td style="color: white"> Tên </td>
                        				<td><input type="text" style="width:250px;height:30px" id="username" name="username"></td>
                        			</tr>
                        			<tr>
                        				<td style="color:white">Mật khẩu </td>
                        				<td><input type="password"style="width:250px;height:30px"id="pass" name="pass"></td>
                        			</tr>
                        			<tr>
                        				<td style="color:white">Họ tên </td>
                        				<td><input type="text" style="width:250px;height:30px" id="name" name="name"></td>
                        			</tr>
                        			<tr>
                        				<td style="color:white">Email </td>
                        				<td><input type="text" style="width:250px;height:30px" id="email" name="email"></td>
                        			</tr>
                        			<tr>
                        				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="ĐĂNG KÝ"></td>
                        			</tr>

                        		</table>

                        	</form>
                          </div>
                        </div>
                      <?php

                      	if (isset($_POST["btn_submit"])) {
                      		//lấy thông tin từ các form bằng phương thức POST
                      		$username = $_POST["username"];
                      		$password = $_POST["pass"];
                      		$name = $_POST["name"];
                      		$email = $_POST["email"];
                      		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                      		if ($username == "" || $password == "" || $name == "" || $email == "") {
                      			//echo "bạn vui lòng nhập đầy đủ thông tin";
                      		}else{
                      			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
                      			// thực thi câu $sql với biến conn lấy từ file connection.php
                      		mysqli_query($conn,$sql);
                      		//	echo "chúc mừng bạn đã đăng ký thành công";
                      		}
                      	}

                      ?>
                      <?php

	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_dang_nhap"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    	$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
        echo "Đăng nhập thành công ";
	    	}
		}
	}
}
?>
  <form method="POST" action="" style="width:220px;background-color:lightgray">
                      	<fieldset>
                      	    <legend></legend>
                      	    	<table>
                      	    		<tr>
                      	    			<td>Username</td>
                      	    			<td><input type="text" name="username" size="10"></td>
                      	    		</tr>

                      	    		<tr>
                      	    			<td>Password</td>
                      	    			<td><input type="password" name="password" size="10"></td>
                      	    		</tr>
                      	    		<tr>
                      	    			<td colspan="2" align="center"> <input type="submit" name="btn_dang_nhap" value="Đăng nhập"></td>
                      	    		</tr>
                      	    	</table>
                        </fieldset>
                        </form>

                    <?php

                        include("chuc_nang/tim_kiem/vung_tim_kiem.php");
                        include("chuc_nang/gio_hang/vung_gio_hang.php");
                        ?>
                      <div class="w3-bar-block w3-border w3-light-gray" style="width:200px">
                        <?php
                        include("chuc_nang/san_pham/noi_bat.php");
                    ?></div>
                    <?php include("chuc_nang/quang_cao/phai.php"); ?>
                    </td>
                </tr>
                <tr>

                </tr>
              <tr>

                    <td colspan="3"><?php include("chuc_nang/footer/footer.php"); ?></td>
                </tr>

            </table>

        </center>
    </body>

</html>
