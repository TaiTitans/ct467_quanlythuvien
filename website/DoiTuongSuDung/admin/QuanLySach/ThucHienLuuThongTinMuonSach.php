<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $msnv = $_GET['MSNV'];
    $idDocGia = $_POST['IDdocGia'];
    $idSach = $_GET['idSach'];
    $soBan = $_POST['SoBan'];
    $ngayMuon = $_POST['ngayMuon'];
    $ngayTra = $_POST['ngayTra'];

    $dk1 = KiemTra_SoBanSachDaMuonHayChua($soBan);

    if($ngayMuon > $ngayTra){
        echo "<script>
                alert('Không thể lưu vì ngày mượn lớn hơn ngày trả. Vui lòng điền lại.');
                history.back();
            </script>";
    }
    elseif($soBan > 0){
        echo "<script>
                alert('Không thể lưu vì Bản sách này có có người khác đã mượn. Vui lòng điền lại.');
                history.back();
            </script>";
    }
    else{
        $ThemMauTin = "INSERT INTO ChiTietMuonSach(ngayMuon,ngayTra,soBan,IDnhanVien,IDdocGia,idSach)
            VALUES('".$ngayMuon."','".$ngayTra."','".$soBan."','".$msnv."','".$idDocGia."','".$idSach."')";
        $CapNhatChiTietSach = "UPDATE ChiTietSach
                                SET STT = 1
                                WHERE soBan = '$soBan'";
        TruyVan($ThemMauTin);
        TruyVan($CapNhatChiTietSach);
        echo "<script>
                alert('Thực hiện lưu mượn sách thành công.');
                history.back();
            </script>";
    }
    
?>