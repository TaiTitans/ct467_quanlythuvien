<?php

use function PHPSTORM_META\type;

    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');
    $msnv = $_GET['MSNV'];
    $TTnv = identifyNhanVien($msnv);
    mysqli_next_result($connect);
    $taiKhoan= msnv_TaiKhoan($msnv);

    $IDnhanVien = trim($_POST['IDnhanVien']);
    $hoTen = trim($_POST['hoTen']);
    $gioiTinh = trim($_POST['gioiTinh']);
    $ngaySinh = trim($_POST['ngaySinh']);
    $SDT = trim($_POST['SDT']);
    $Email = trim($_POST['Email']);
    $DiaChi = trim($_POST['DiaChi']);
    $pw = trim($_POST['MatKhau']);

    echo '<p>'.$IDnhanVien.' - '.gettype($IDnhanVien).'</p>';
    echo '<p>'.$hoTen.' - '.gettype($hoTen).'</p>';
    echo '<p>'.$gioiTinh.' - '.gettype($gioiTinh).'</p>';
    echo '<p>'.$ngaySinh.' - '.gettype($ngaySinh).'</p>';
    echo '<p>'.$SDT.' - '.gettype($SDT).'</p>';
    echo '<p>'.$Email.' - '.gettype($Email).'</p>';
    echo '<p>'.$DiaChi.' - '.gettype($DiaChi).'</p>';
    echo '<p>'.$pw.' - '.gettype($pw).'</p>';

    //Lệnh cập nhật
    $capNhatNhanVien = "UPDATE nhanvien 
        SET IDnhanVien = '".$IDnhanVien."',
            hoTen = '".$hoTen."',
            gioiTinh = '".$gioiTinh."',
            ngaySinh = '".$ngaySinh."',
            SDT = '".$SDT."',
            DiaChi = '".$DiaChi."',
            Email = '".$Email."'
        WHERE IDnhanVien = '$msnv'";
    mysqli_next_result($connect);
    TruyVan($capNhatNhanVien);

    $taiKhoanUpdate = "UPDATE taikhoan(UserID,MatKhau)
        SET UserID = '".$IDnhanVien."',
        MatKhau = '".$pw."'
        WHERE UserID = '$msnv'";
    mysqli_next_result($connect);
    TruyVan($taiKhoan);

    //Thoát
    // echo "<script>
    //         alert('Cập nhật thành công.');
    //         history.back();
    //     </script>";
?>
