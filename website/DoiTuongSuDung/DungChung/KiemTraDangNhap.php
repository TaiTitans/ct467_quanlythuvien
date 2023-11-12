<?php
    include('../../php/ConnectMySQL.php');
    include('../../php/CacHamXuLy.php');

    $taiKhoan = trim($_POST['taiKhoan']);
    $pw = trim($_POST['password']);
    $TaiKhoanHopLe = 1;
    echo $taiKhoan;
    echo $pw;
    if($taiKhoan === 'admin'){
        $sql = "SELECT COUNT(*) dem
                FROM taikhoan
                WHERE UserID = '$taiKhoan' 
                AND MatKhau = '$pw' 
                AND UserRole = 0";
        $KT = mysqli_fetch_array(TruyVan($sql));
        if($KT['dem'] > 0){
            header('location:../../../Librarian_Project/code/dist/trangchu.php');
        }else{
            $TaiKhoanHopLe = 0;
        }
    }else{
        $sql1 = "SELECT COUNT(*) dem
                FROM taikhoan
                WHERE UserID = '$taiKhoan' 
                AND MatKhau = '$pw' 
                AND UserRole = 1";
        $KT1 = mysqli_fetch_array(TruyVan($sql1));
        if($KT1['dem'] > 0){
            header('location:../admin/QuanLyNhanVien/TrangChuNhanVien.php?&MSNV='.$taiKhoan.'');
        }else{
            $TaiKhoanHopLe = 0;
        }
    }
    if($TaiKhoanHopLe == 0){
        echo"<script>
                alert('Tài khoản không hợp lệ!');
                history.back();
            </script>";
    }
?>

