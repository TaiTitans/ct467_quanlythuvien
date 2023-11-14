<?php
include('../../php/ConnectMySQL.php');
include('../../php/CacHamXuLy.php');

$taiKhoan = trim($_POST['taiKhoan']);
$pw = trim($_POST['password']);
$TaiKhoanHopLe = 1;


    $sql = "SELECT COUNT(*) dem, UserRole
            FROM taikhoan
            WHERE UserID = '$taiKhoan' 
            AND MatKhau = '$pw'";
    $result = TruyVan($sql);
    $row = mysqli_fetch_array($result);

    if ($row['dem'] > 0) {
        // Lưu session cookie
        session_start();

        // Thiết lập session dựa trên thông tin tài khoản
        $_SESSION['UserID'] = $taiKhoan;
        $_SESSION['UserRole'] = $row['UserRole'];

        // Thiết lập cookie với thời gian sống là 3 tiếng (3 * 3600 giây)
        setcookie("user", $taiKhoan, time() + 3 * 3600, "/");

        if ($row['UserRole'] == 0) {
            header('location:../../../Librarian_Project/code/dist/trangchu.php');
        } else  {
            header('location:../admin/QuanLyNhanVien/TrangChuNhanVien.php');
        }
    } 


// if ($TaiKhoanHopLe == 0) {
//     echo "<script>
//             alert('Tài khoản không hợp lệ!');
//             history.back();
//         </script>";
// }
?>
            <!-- <form action="../admin/QuanLyNhanVien/TrangChuNhanVien.phps" id="ChuyenTrangNV" method="post" enctype="application/x-www-form-urlencoded">
                <input type="submit" name="MSNV" value='<?php //echo $taiKhoan;?>'>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    document.getElementById('ChuyenTrangNV').submit();
                });
            </script> -->
            <?php
?>
