<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý sách</title>

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script defer src="../../../js/sach/CauHinhBang.js"></script>
        <!--CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../../website/css/admin/TrangChu.css">
    </head>
    <body>
        <header>

        </header>
        <main>
            <div>
                <a href="../admin/QuanLySach/ThemSach.php">Thêm sách</a>

                
                <table id="CanChinhDanhSachSach">
                    <thead>
                        <tr class="TieuDeBang">
                            <th>ID sách</th>
                            <th>Tên sách</th>
                            <th>Năm xuất bản</th>
                            <th>Nhà xuất bản</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Mô tả</th>
                            <th>Ghi Nhận Sách Mượn</th>
                            <!-- <th>Cập nhật</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../../php/CacHamXuLy.php');
                            include('../../php/CacHamXuLy.php');
                            $TTSach = infSach();
                            while($row = mysqli_fetch_array($TTSach)){
                                echo'<tr>
                                        <td>'.$row['idSach'].'</td>
                                        <td>'.$row['tenSach'].'</td>
                                        <td>'.$row['namXuatBan'].'</td>
                                        <td>'.identifyNhaXuatBan($row['idNXB'])['TenNXB'].'</td>
                                        <td>'.identifyTacGia($row['IDtacGia'])['hoTen'].'</td>
                                        <td>'.identifyTheLoai($row['idTheLoai'])['TenTheLoai'].'</td>
                                        <td>'.$row['MoTa'].'</td>
                                        <td>
                                            <a href="./GhiNhanMuonSach.php" ><i class="fa-solid fa-trash"></i></a>
                                        </td>

                                    </tr>';
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr class="TieuDeBang">
                            <th>ID sách</th>
                            <th>Tên sách</th>
                            <th>Năm xuất bản</th>
                            <th>Nhà xuất bản</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Mô tả</th>
                            <th>Ghi Nhận Sách Mượn</th>
                        </tr>
                    </tfoot>    
                </table>
            </div>
        </main>
        <footer></footer>
    </body>
</html>

