<?php
// dangxuat.php
session_start();

if (isset($_SESSION['user']))
    unset($_SESSION['user']);
// Hủy session
session_destroy();

// Hủy cookie bằng cách đặt thời gian sống là 1 giây trước đó
setcookie("user", "", time() - 1, "/");

// Chuyển hướng người dùng về trang đăng nhập
header("location:../../../Librarian_Project/code/dist/index.php");
?>
