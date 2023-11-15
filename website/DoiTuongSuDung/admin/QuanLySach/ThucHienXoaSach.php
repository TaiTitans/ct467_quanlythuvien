<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $idSach = $_GET['IDsach'];
    //Kiểm tra xem nếu
    $dk1 =  KiemTraSachCoDuocMuonHayKhong($idSach);
    echo $dk1;
    if($dk1 > 0){
        echo '<script>
            alert("Không thể xóa vì sách này đã có người mượn");
            history.back();
        </script>';
    }else{
        //Thực hiện xóa sách
        $xoaCT = "DELETE FROM ChiTietSach WHERE idSach = '$idSach'";
        $xoaSach = "DELETE FROM Sach WHERE idSach = '$idSach'";
        TruyVan($xoaCT);
        TruyVan($xoaSach);
        echo '<script>
                alert("Thực hiện xóa thành công");
                history.back();
            </script>';
    }
?>
