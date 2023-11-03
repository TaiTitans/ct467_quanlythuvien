<?php
    //Kết nối đến máy chủ
    $connect = mysqli_connect('qlthuvien.cewsvdlrs4tq.ap-southeast-1.rds.amazonaws.com',
    'admin',
    'ct467_nhom9') or die(mysqli_connect_error());

    //Kết nối đến cơ sở dữ liệu cần dùng
    $db = mysqli_select_db($connect,'qlthuvien');
?>