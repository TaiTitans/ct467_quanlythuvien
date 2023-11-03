<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="../../../css/admin/TrangChu.css">
<div>
    <table>
        <tr class="TieuDeBang">
            <th>UserID/Mã đọc giả</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Mật khẩu</th>
            <th>Delete</th>
            <th>Cập nhật</th>
        </tr>
        <?php
            include('../../../php/ConnectMySQL.php');
            include('../../../php/CacHamXuLy.php');
            $TTdocGia = infDocGia();
            while($row = mysqli_fetch_array($TTdocGia)){
                echo'<tr>
                        <td>'.$row['UserID'].'</td>
                        <td>'.$row['hoTen'].'</td>
                        <td>'.$row['gioiTinh'].'</td>
                        <td>'.$row['ngaySinh'].'</td>
                        <td>'.$row['SDT'].'</td>
                        <td>'.$row['MatKhau'].'</td>
                        <td>
                            <a href="###" ><i class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>';
            }
        ?>
    </table>
</div>