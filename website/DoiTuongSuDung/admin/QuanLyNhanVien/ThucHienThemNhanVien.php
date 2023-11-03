<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    //Lấy ID cuối cùng trong danh sách nhân viên
    $LayDongCuoi = " SELECT * FROM nhanvien 
                    ORDER BY IDnhanVien DESC
                    LIMIT 1";
    $ThucHienLayDongCuoi = mysqli_fetch_array(TruyVan($LayDongCuoi))['IDnhanVien'];
    $maMoi = IncreaseIDIndex($ThucHienLayDongCuoi);
    /*echo $maMoi;

    echo '<p>Họ tên: '.$_POST['full-name'].'</p>';
    echo '<p>EMail: '.$_POST['email'].'</p>';
    echo '<p>Giới tính: '.$_POST['gender'].'</p>';
    echo '<p>ngày sinh: '.$_POST['birthdate'].'</p>';
    echo '<p>SDT: '.$_POST['phone'].'</p>';
    echo '<p>Địa chỉ: '.$_POST['address'].'</p>';
    echo '<p>Mật khẩu: '.$_POST['password'].'</p>';*/

    //Thực hiện thêm tìa khoản nhân viên vào hệ thống
    $SQLnv = "INSERT INTO nhanvien(IDnhanVien,hoTen,gioiTinh,ngaySinh,SDT,DiaChi,Email) 
    VALUES('".$maMoi."','".$_POST['full-name']."','".$_POST['gender']."','".$_POST['birthdate']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['email']."')";
    $ThucHIen1 = TruyVan($SQLnv);
    
    $SQLtk = "INSERT INTO taikhoan(UserID,MatKhau,UserRole) 
    VALUES('".$maMoi."','".$_POST['password']."','1')";
    $ThucHIen2 = TruyVan($SQLtk);

    //Thoát
    ThucHienThanhCong();
?>
