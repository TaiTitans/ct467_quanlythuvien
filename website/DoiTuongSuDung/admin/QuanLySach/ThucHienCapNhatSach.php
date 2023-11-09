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

    $CauLenhUpload = "UPDATE TABLE Sach(tenSach,MoTa,namXuatBan,idNXB,IDtacGia,idTheLoai) 
    VALUES('".$tenSach."','".$Nam."','".$NXB."','".$IDTacGia."','".$idTheLoai."','".$moTa."')
    WHERE idSach = '$idsach'";
?>