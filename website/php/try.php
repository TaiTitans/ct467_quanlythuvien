<?php
    include('../php/ConnectMySQL.php');
    include('../php/CacHamXuLy.php');
    $truyVanLayThongTinCuoi = "SELECT * FROM docgia
                                    ORDER BY IDdocGia DESC LIMIT 1";
            $maDinhDanhCu = mysqli_fetch_array(TruyVan($truyVanLayThongTinCuoi))['IDdocGia'];
            $maDinhDanhMoi = trim(IncreaseIDIndex($maDinhDanhCu));
    echo '<p>ID cũ: '.$maDinhDanhCu.'</p>';
    echo '<p>ID mới: '. $maDinhDanhMoi.'</p>';
?>