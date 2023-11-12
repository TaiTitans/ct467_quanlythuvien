
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

    $sql = "SELECT *
            FROM ChiTietSach 
            WHERE idSach = 'S72' AND STT = '0'
            LIMIT 5 ";
    for($i= 0; $i < 5; $i++){
            
    }
?>
