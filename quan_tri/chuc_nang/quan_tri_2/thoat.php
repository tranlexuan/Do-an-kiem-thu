<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    unset($_SESSION['ky_danh']);
    unset($_SESSION['mat_khau']);
    //dùng hàm unset để xóa đi session 'ky_danh' và session 'mat_khau'.
    //Khi 2 session này mất đi (tức là không còn tồn tại) thì khi web tải lại ,
    //web sẽ tải lại file 'xac_dinh_danh_nhap.php' và không tạo biến $xac_dinh_dang_nhap
    //(do không tồn tại biến session 'ky_danh' ) => web sẽ hiển thị lại phần đăng nhập quản trị 

?>
