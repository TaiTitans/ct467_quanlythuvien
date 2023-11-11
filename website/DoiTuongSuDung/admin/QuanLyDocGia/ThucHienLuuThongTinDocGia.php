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

    $sql = "UPDATE qlthuvien.docgia
            SET hoTen = '$hoTen',
                gioiTinh = '$gioiTinh',
                ngaySinh = '$ngaySinh',
                SDT = '$SDT'
            WHERE IDdocGia = '$IDdocGia'";

    TruyVan($sql);

    echo '
    <script>
        alert("Cập nhật thành công.");
        history.back();
    </script>
    ';
}
