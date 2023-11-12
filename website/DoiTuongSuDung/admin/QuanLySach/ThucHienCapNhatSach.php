<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $maSachHienTai = $_GET['IDsach'];
    $idsach = $_POST['idSach'];
    $tenSach = $_POST['tenSach'];
    $Nam = $_POST['namXuatBan'];
    $NXB = $_POST['idNXB'];
    $IDTacGia = $_POST['IDTacGia'];
    $idTheLoai = $_POST['idTheLoai'];
    $moTa = $_POST['MoTa'];
    $soLuongSachMoi = $_POST['SoLuongSach'];
    $soLuongHienTai = ID_SoLuongSach($maSachHienTai);
    // echo '<p>So luong hien tai: '.$soLuongHienTai.'</p>';
    // echo '<p>So luong moi: '.$soLuongSachMoi.'</p>';
    $CauLenhUpload = "UPDATE Sach
        SET tenSach = '$tenSach', 
            MoTa = '$moTa', 
            namXuatBan = '$Nam', 
            idNXB = '$NXB', 
            IDtacGia = '$IDTacGia', 
            idTheLoai = '$idTheLoai'
        WHERE idSach = '$idsach'";
    mysqli_next_result($connect);
    TruyVan($CauLenhUpload);

    //Nếu số lượng sách < số lượng hiện tại thì xóa
    if($soLuongHienTai > $soLuongSachMoi){
        $Slxoa = intval($soLuongHienTai - $soLuongSachMoi);
        $lenhXoa = "SELECT *
                    FROM ChiTietSach 
                    WHERE idSach = '$idsach' AND STT = '0'
                    LIMIT $Slxoa";
        mysqli_next_result($connect);            
        $chay1 = TruyVan($lenhXoa);
        while($row = mysqli_fetch_array($chay1)){
            mysqli_next_result($connect);
            $soBan = $row['soBan'];
            $xoaMauTin = "DELETE FROM ChiTietSach
                    WHERE soBan = '$soBan'";
            TruyVan($xoaMauTin);
        }
    }
    //Ngược lại thì thêm
    else{
        $Slthem = intval($soLuongHienTai + $soLuongSachMoi);
        TaoSoLuongSach($Slthem,$idsach);
    }
    //Thoat
    echo "<script>
            alert('Cập nhật thành công.');
            history.back();
        </script>";
?>
