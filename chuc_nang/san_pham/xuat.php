<div class="hovergallery">
<?php
    $id=$_GET['id'];
    $so_du_lieu=12;
    $tv="select count(*) from san_pham where thuoc_menu='$id';";
    $tv_1=mysql_query($tv);
    $tv_2=mysql_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);
    //tạo slide sang trang
    if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
    $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where thuoc_menu='$id' order by id desc ";
    $tv_1=mysql_query($tv);
    echo "<table>";
    while($tv_2=mysql_fetch_array($tv_1))
    {
        echo "<tr>";
            for($i=1;$i<=3;$i++)
            {
                echo "<td align='center' width='215px' >";
                    if($tv_2!=false)
                    {
                      $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
                        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
                        $gia=$tv_2['gia'];
                        $gia=number_format($gia,0,",",".");
                        echo "<a href='$link_chi_tiet' >";
                            echo "<img src='$link_anh' width='220px' height = '220px' >";
                        echo "</a>";
                        echo "<br>";
                        echo "<br>";
                        echo "<a href='$link_chi_tiet' >";
                            echo $tv_2['ten'];
                        echo "</a>";
                        echo "<div style='margin-top:5px' >";
                        echo $gia;
                        echo "</div>";
                        echo "<br>";
                    }
                    else
                    {
                        echo "&nbsp;";
                    }
                echo "</td>";
                if($i!=3)
                {
                    $tv_2=mysql_fetch_array($tv_1);
                }
            }
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan='3' align='center' >";
        echo "<div class='phan_trang' >";
        // tạo phân trang
            for($i=1;$i<=$so_trang;$i++)
            {
              $link="?thamso=xuat_san_pham&id=".$_GET['id']."&trang=".$i;
                echo "<a href='' >";
                echo $i;echo " ";
                echo "</a>";
            }
        echo "</div>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
?>
</div>
