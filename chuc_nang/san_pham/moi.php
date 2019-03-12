<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><br>
<center><strong> Sản phẩm mới <br><br></strong></center>
<div class="hovergallery">
<center>
    <?php
        $tv="select id,ten,hinh_anh from san_pham order by id desc limit 0,3";
        $tv_1=mysql_query($tv);
        while($tv_2=mysql_fetch_array($tv_1))
        {
            $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
            echo "<a href='$link_chi_tiet' >";
                echo "<img src='$link_anh' width='150px' >";
            echo "</a>";
            echo "<br><br>";

        }
    ?>
</center>
</div>
