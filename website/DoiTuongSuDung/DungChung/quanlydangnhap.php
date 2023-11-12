<?php
    include('../../php/ConnectMySQL.php');
    include('../../php/CacHamXuLy.php');
    include('../../QTDL/ct467_quanlythuvien/website/');
    echo "<p> Tài khoản: ".$_POST['UserID']."</p>";
    echo "<p> Mật khẩu: ".$_POST['MatKhau']."</p>";

    $taiKhoan = trim($_POST['UserID']);
    $pw = trim($_POST['MatKhau']);
    $role = trim($_POST['Role']);
    //Thực hiện tìm kiểm
    $lenhTim = "SELECT COUNT(*) AS soluong FROM taikhoan WHERE UserID = '$taiKhoan' AND MatKhau = '$pw'" or die(mysqli_connect_error());
    $thucHien = mysqli_query($connect,$lenhTim) or die(mysqli_connect_error());
    $ketQua = intval(mysqli_fetch_array($thucHien)['soluong']);
    $KhongThay = "";

    //Điều kiện nếu tìm thấy thì tìm kiếm xem thuộc về đối tượng nào
    if($ketQua > 0){
        if($role === 0) {
            header('Location: Librarian_Project\code\dist\trangchu.php?ID='.$taiKhoan.'');
        }elseif ($role === 1) {
            header('Location: Librarian_Project\code\dist\trangchu.php?ID='.$taiKhoan.'');
        }else {
            echo "<p> Không tìm thấy</p>";
        $KhongThay = "KhongThayTaiKhoan";
        header('Location: notFound.php');
        }
    }
?>