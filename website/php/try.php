
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
     //   TaoSoLuongSach(20,'S009');
    $sql = "SELECT idSach FROM Sach";
    $LayID = TruyVan($sql);
    while($row = mysqli_fetch_array($LayID)){
        mysqli_next_result($connect);
        // echo '<p>'.ID_SoLuongSach($row['idSach']).'</p>';
        
    }

?>
