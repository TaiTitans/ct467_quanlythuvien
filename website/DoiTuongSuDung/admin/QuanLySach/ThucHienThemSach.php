<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $TenSach = $_POST['tenSach'];
    $NhaXuatBan = $_POST['nhaXuatBan'];
    $namXuatBan = $_POST['NamXuatBan'];
    $tacGia = $_POST['TacGia'];
    $theLoai = $_POST['TheLoaiSach'];
    $moTa = $_POST['MoTaSach'];
    $soLuong = $_POST['soLuong'];

    echo"<p>Tên sách: ".$TenSach."</p>";
    echo"<p>Nhà xuất bản: ".$NhaXuatBan."</p>";
    echo"<p>Năm xuất bản: ".$namXuatBan."</p>";
    echo"<p>Tác giả: ".$tacGia."</p>";
    echo"<p>Thể loại: ".$theLoai."</p>";
    echo"<p>Mô tả: ".$moTa."</p>";
    echo"<p>Số lượng: ".$soLuong."</p>";

    echo "<p>Thấy tác giả: ".Find_TenTacGia($tacGia)."</p>";

    //1.Nếu tìm không thấy tác giả thì tạo tác giả mới
    if(Find_TenTacGia($tacGia) < 1){
        $LayIDTacGiaCuoi = "SELECT * 
                        FROM tacgia
                        ORDER BY IDTacGia DESC
                        LIMIT 1";
        $thucHien1 = mysqli_fetch_array(TruyVan($LayIDTacGiaCuoi));
        $maTacGiaMoi = IncreaseIDIndex($thucHien1['IDTacGia']);
        
        //Thực hiện thêm tác giả
        $ThemTacGia = "INSERT INTO tacgia(IDTacGia,hoTen) VALUES('".$maTacGiaMoi."','".$tacGia."')";
        $ThucHien2 = TruyVan($ThemTacGia);
    }//>>>
    //2. Nếu tìm không thấy tên nhà xuất bản thì tạo nhà xuất bản mới
    if(Find_TenNhaXuatBan($NhaXuatBan) < 1){
        $LayIDNhaXuatBanCuoi = "SELECT * FROM NhaXuatBan
                                ORDER BY idNXB DESC LIMIT 1";
        $thucHien4 = mysqli_fetch_array(TruyVan($LayIDTacGiaCuoi));
        $maNXBmoi = IncreaseIDIndex($thucHien4['idNXB']);
        //Thực hiện thêm nhà xuất bản mới
        $ThemNXB = "INSERT INTO NhaXuatBan(idNXB,TenNXB) 
                    VALUES('".$maNXBmoi."','".$NhaXuatBan."')";
        $thucHien5 = TruyVan($ThemNXB);
    }
    //Lấy Thông tin
    $layIDtacGiaQuaTen = "CALL Find_Name_TacGia('".$tacGia."')";
    $IDtacGia = mysqli_fetch_array(TruyVan($layIDtacGiaQuaTen))['IDTacGia'];
    echo"<p>ID tác giả: ".$IDtacGia."</p>";
    
    mysqli_next_result($connect); //là một hàm trong PHP dùng để chuẩn bị kết quả tiếp theo từ truy vấn đa (multi-query)
    
    $layThongTinNXB = "CALL qlthuvien.Find_Name_NhaXuatBan('".$NhaXuatBan."')";
    $idNXB = mysqli_fetch_array(TruyVan($layThongTinNXB))['idNXB'];
    echo"<p>ID nhà xuất bản: ".$idNXB ."</p>";

    
    mysqli_next_result($connect);
    
    //Kiểm tra tên sách đã tồn tại hay không nếu chưa tồn tại thì thêm sách mới
    if(FindTen_Sach($TenSach) < 1){
        $LayIDsachCuoi = "SELECT * FROM Sach
                    ORDER BY idSach DESC LIMIT 1";
        $ThucHien3 = mysqli_fetch_array(TruyVan($LayIDsachCuoi));
        $maSachMoi = IncreaseIDIndex($ThucHien3['idSach']);
        
        echo"<p>Mã sách cũ: ".trim($ThucHien3['idSach'])."</p>";
        echo"<p>Mã sách mới: ".$maSachMoi."</p>";

        //Thêm sách mới
        mysqli_next_result($connect);
        $ThemSach = "INSERT INTO Sach(idSach,tenSach,MoTa,namXuatBan,idNXB,IDtacGia,idTheLoai) 
                    VALUES('".$maSachMoi."','".$TenSach."','".$moTa."','".$namXuatBan."','".$idNXB."','".$IDtacGia."','".$theLoai."')";
        $thucHien = TruyVan($ThemSach);

        //Thực hiện thêm số lượng sách
        $i = 0;
        while($i < $soLuong){
            //Kiểm tra xem .Nếu chưa có mẫu tin nào trong bảng chi tiết sách thì thêm mẫu tin mới
            if(SoLuongMauTin_ChiTietSach() < 1){
                $ThemMauTinMoi = "INSERT INTO ChiTietSach(soBan,idSach,STT)
                                VALUES(0,'".$maSachMoi."',0)";
                $act_ThemMauTinMoi = TruyVan($ThemMauTinMoi); 
            }else{
                $LayIDCuoi = "SELECT * 
                            FROM ChiTietSach
                            ORDER BY soBan DESC 
                            LIMIT 1";
                $IDCuoi = mysqli_fetch_array(TruyVan($LayIDCuoi))['soBan'];
                $IDmoi = intval($IDCuoi)+1;
                $ThemMauTinKeTiep = "INSERT INTO ChiTietSach(soBan,idSach,STT)
                                VALUES($IDmoi,'".$maSachMoi."',0)";
                $act_ThemMauTinKeTiep = TruyVan($ThemMauTinKeTiep); 
            }
            $i+=1;
        }
        echo "<script>
                alert('Thêm sách thành công');
                history.back();
            </script>";
    }else{
        echo "<script>
                alert('Đã tồn tại sách này rồi không thể thêm');
                history.back();
            </script>";
    }

?>