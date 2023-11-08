<?php
    include('../../../php/ConnectMySQL.php');
    include('../../../php/CacHamXuLy.php');

    $TenSach = $_POST['tenSach'];
    $NhaXuatBan = $_POST['nhaXuatBan'];
    $namXuatBan = $_POST['NamXuatBan'];
    $tacGia = $_POST['TacGia'];
    $theLoai = $_POST['TheLoaiSach'];
    $moTa = $_POST['MoTaSach'];

    echo"<p>Tên sách: ".$TenSach."</p>";
    echo"<p>Nhà xuất bản: ".$NhaXuatBan."</p>";
    echo"<p>Năm xuất bản: ".$namXuatBan."</p>";
    echo"<p>Tác giả: ".$tacGia."</p>";
    echo"<p>Thể loại: ".$theLoai."</p>";
    echo"<p>Mô tả: ".$moTa."</p>";

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
    $IDnhaXB = Ten_ThongTinNhaXuatBan(trim($NhaXuatBan));

    // echo"<p>ID tác giả: ".$IDtacGia."</p>";
    // echo"<p>ID nhà xuất bản: ".$IDnhaXB ."</p>";
    
    // $LayIDsachCuoi = "SELECT * FROM Sach
    //                 ORDER BY idSach DESC LIMIT 1";
    // $ThucHien3 = mysqli_fetch_array(TruyVan($LayIDsachCuoi));
    // echo"<p>Mã sách cũ: ".trim($ThucHien3['idSach'])."</p>";

    // echo"<p>Mã sách mới: ".$maSachMoi."</p>";
    // //Thêm sách mới
    // $ThemSach = "INSERT INTO sach(idSach,tenSach,MoTa,namXuatBan,idNXB,IDtacGia,idTheLoai) 
    //             VALUES('".$maSachMoi."','".$TenSach."','".$moTa."','".$namXuatBan."','".$IDnhaXB."','".$IDtacGia."','".$theLoai."')";
    // $thucHien = TruyVan($ThemSach);

?>