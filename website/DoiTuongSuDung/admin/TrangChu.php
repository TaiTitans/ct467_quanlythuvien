<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>

        <!--Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="../../js/admin/home.js" async></script>
        <!--Script-->
        <script src="../../nodejs/public/ConnectMySQL.js" async></script>
        <!--CSS-->
        
        <!--PHP-->
        <?php
            include('../../php/ConnectMySQL.php');
            include('../../php/CacHamXuLy.php');
        ?>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="KhungChinAdmin">
                <div class="CotHienThiChucNang">
                    <!--Quan ly-->
                    <div class="NutAdmin">ADMIN</div>
                    <div class="NutDocGia NutChung"><i class="fa-solid fa-book-open-reader"></i> Đọc giả</div>
                    <div class="NutNhanVien NutChung"><i class="fa-regular fa-user"></i> Nhân viên</div>
                    <div class="NutSach NutChung"> <i class="fa-solid fa-book"></i> Sách</div>
                    <!--Thông báo thông tin-->
                    <button data-target="#DanhSachTinhTrangSach" aria-expanded="false" type="button" data-toggle="collapse" class="btn btn-primary NutXemTinhTrang">Tình Trạng Sách</button>
                    <div id="DanhSachTinhTrangSach" class="collapse">
                        <div class="NutChuaMuon NutChung">Chưa mượn</div>
                        <div class="NutDaMuon NutChung">Đã mượn</div>
                        <div class="NutQuaHan NutChung">Quá hạn</div>
                        <div class="NutHong NutChung">Hỏng</div>
                        <div class="NutMat NutChung">Mất</div>
                    </div>
                </div>
                <div class="CotHienThiThongTin">
                    <!--
                        Đọc giả
                    -->
                    <div class="khungDocGia">
                        <div class="KhungChung">

                        </div>
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
                    <!--
                        Nhân viên
                    -->
                    <div class="KhungNhanVien">
                        <p>DS nhân viên</p>
                    </div>
                    <!--
                        Sách
                    -->
                    <div class="KhungSach">
                        <p>DS sách</p>
                    </div>
                    <!--
                        Tình trạng sách
                    -->
                    <div class="KhungChuaMuon">
                        <p>Chưa mượn</p>
                    </div>
                    <div class="KhungDaMuon">
                        <p>Đã mượn</p>
                    </div>
                    <div class="KhungQuaHan">
                        <p>Quá hạn</p>
                    </div>
                    <div class="KhungHong">
                        <p>HỎng</p>
                    </div>
                    <div class="KhungMat">
                        <p>Mất</p>
                    </div>
                </div>
            </div>
              
        </main>
        <footer></footer>
    </body>
</html>
