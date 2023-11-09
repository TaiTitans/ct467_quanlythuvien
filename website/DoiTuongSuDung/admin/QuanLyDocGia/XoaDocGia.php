<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $idDocGia = $_GET['IDdocgia'];
    echo $idDocGia;

    $xoaDocGia = "DELETE FROM docgia WHERE IDdocgia = '$idDocGia'";

    $XoaDocGia = TruyVan($xoaDocGia);

        // Kiểm tra và hiển thị thông báo
    if ($XoaDocGia) {
        echo '<script>
                alert("Xóa đọc giả thành công");
                history.back();
            </script>';
    }
?>
