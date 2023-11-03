<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');
    $msnv = $_GET['MSNV'];
    echo $msnv;

    $XoaTK = "DELETE FROM taikhoan WHERE UserID = '$msnv'";
    $XoaTT = "DELETE FROM nhanvien WHERE IDnhanVien = '$msnv'";

    $thucHien1 = TruyVan($XoaTK);
    $thucHien2 = TruyVan($XoaTT);

    //Thoat
    echo '<script>
            alert("");
            Swal.fire("Thực hiện xóa thành công!");
            history.back();
        </script>';
?>
