<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $idsach = $_POST['idSach'];
    $tenSach = $_POST['tenSach'];
    $Nam = $_POST['namXuatBan'];
    $NXB = $_POST['idNXB'];
    $IDTacGia = $_POST['IDTacGia'];
    $idTheLoai = $_POST['idTheLoai'];
    $moTa = $_POST['MoTa'];

    $CauLenhUpload = "UPDATE Sach
    SET tenSach = '$tenSach', 
        MoTa = '$moTa', 
        namXuatBan = '$Nam', 
        idNXB = '$NXB', 
        IDtacGia = '$IDTacGia', 
        idTheLoai = '$idTheLoai'
    WHERE idSach = '$idsach'";
    TruyVan($CauLenhUpload);

    //Thoat
    echo "<script>
            alert('Cập nhật thành công.');
            history.back();
        </script>";
?>
