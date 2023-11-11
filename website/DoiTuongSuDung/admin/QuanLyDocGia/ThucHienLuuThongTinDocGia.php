<?php
include('../../../php/ConnectMySQL.php');
include('../../../php/CacHamXuLy.php');
$msdg = $_GET['MSDG'];
echo $msdg;
$TTdg = identifydocGia($msdg);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IDdocGia = $_POST['IDdocGia'];
    $hoTen = $_POST['hoTen'];
    $gioiTinh = $_POST['gioiTinh'];
    $ngaySinh = $_POST['ngaySinh'];
    $SDT = $_POST['SDT'];

    $sql = "UPDATE docgia SET IDdocGia='" . $IDdocGia . "', hoTen='" . $hoTen . "', gioiTinh='" . $gioiTinh . "', ngaySinh='" . $ngaySinh . "', SDT='" . $SDT . "' 
  WHERE IDdocGia='$IDdocGia'";

    $sql1 = "UPDATE qlthuvien.docgia
    SET IDdocGia = '" . $IDdocGia . "',
        hoTen = '" . $hoTen . "',
        gioiTinh = '" . $gioiTinh . "',
        ngaySinh = '" . $ngaySinh . "',
        SDT = '" . $SDT . "'
    WHERE IDdocGia = '$IDdocGia'";
    TruyVan($sql1);
    echo '
    <script>
        alert("Cập nhật thành công.");
        history.back();
    </script>
    ';
}
