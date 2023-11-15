
<?php
    include('../php/ConnectMySQL.php');
    include('../php/CacHamXuLy.php');
    // echo '<select name="" id="">';
    // $LayThongTinNXB = "SELECT * FROM NhaXuatBan";
    // $ThucHienLay = TruyVan($LayThongTinNXB);
    // while($row = mysqli_fetch_array($ThucHienLay)){
    //     echo '<option value='.$row['idNXB'].'>'.$row['TenNXB'].'</option>';
    //     // echo '<p>ID: '.$row['idTheLoai'].'</p>';
    //     // echo '<p>Tên: '.$row['TenTheLoai'].'</p>';
    // }
    // echo '</select>';

    $sql = "SELECT * FROM phiMuon";
    $chay1 = TruyVan($sql);
    while($row = mysqli_fetch_array($chay1)){
        echo '<p>'.$row['Phi'].'</p>';
        $phi = $row['Phi'];
        $id = $row['idSach'];
        $up = "UPDATE Sach SET gia = '$phi' WHERE idSach = '$id'";
        TruyVan($up);
    }
?>
