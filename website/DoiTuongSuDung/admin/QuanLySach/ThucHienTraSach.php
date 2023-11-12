<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $soBan = $_GET['SoBan'];
    $XoaMauTin = "DELETE FROM ChiTietMuonSach WHERE soBan = '$soBan'";
    $ChinhSTT = "UPDATE ChiTietSach
                SET STT = 0
                WHERE soBan = '$soBan'";
    TruyVan($XoaMauTin);
    TruyVan($ChinhSTT);
    echo "<script>
                alert('Thực hiện Xác nhận đọc giả trả sách thành công.');
                history.back();
            </script>";
?>