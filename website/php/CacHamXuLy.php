<?php
    include('ConnectMySQL.php');

    //1. Thực hiện truy vấn dữa trên câu lệnh
    function TruyVan($CauLenh){
        global $connect;
        $sql = trim(strval($CauLenh));
        $ThucHien = mysqli_query($connect,$sql);
        return $ThucHien;
    }

    //2.Hàm lấy chuỗi chữ số sau cùng của mã định danh và hàm này trả về chữ số
    function LayChuoiSoCuoiChuoi($string){
        //4.1 Lấy độ dài chuỗi
        $length = strlen($string)-1;
        $ketQua = "";
        
        //4.2 Lặp kiểm tra - nếu gặp ký tự chữ cái thì hủy
        while($length >= 0){
            $temp = $string[$length];

            //Kiểm tra ký tự lấy ra có phải số hay không
            if(is_numeric($temp)){
                $ketQua = $temp.$ketQua;
            }else{  //Hủy
                break;
            }
            $length -=1;
        }
        return $ketQua;
    }

    //3.Hàm làm tăng giá trị số cuối chuỗi
    function IndexIncrease($chuoi){
        //1.Ép chuỗi về dạng số nguyên
        $soNguyen = intval($chuoi);
        //2. Tăng lên 1 đơn vị
        $soNguyen +=1;
        //3.Kiểm tra nếu để ép về dạng chuỗi, nếu nhỏ hơn 10 thì chèn thêm ký tự 0
        $ketqua = '';
        if($soNguyen < 10){
            $ketqua = "0".strval($soNguyen);
        }else{
            $ketqua = strval($soNguyen);
        }
        return $ketqua;
    } 

    //4. Hàm lấy ký tự chữ cái của 1 chuỗi nào đó. Không lấy chữ số
    function LayChuoiChuCaiDau($chuoi){
        //4.1 Lấy độ dài chuỗi
        $length = strlen($chuoi)-1;
        $ketQua = "";
        //4.2 Lặp kiểm tra - nếu gặp ký tự chữ cái thì hủy
        $i = intval(0);
        while($i <= $length){
            $temp = $chuoi[$i]; 
            //Kiểm tra ký tự lấy ra có phải số hay không
            if(is_numeric($temp)!=true){
                $ketQua = $ketQua.$temp;
            }else{  //Hủy
                break;
            }
            $i +=1;
        }
        return $ketQua;
    }

    //5. Hàm tăng chỉ số ID của một chuỗi
    function IncreaseIDIndex($Ma){
        $Ma = trim($Ma);
        /*echo "<p> chữ cái: ".LayChuoiChuCaiDau($Ma)."</p>";
        echo "<p> Chữ số cuối chuỗi: ".LayChuoiSoCuoiChuoi($Ma)."</p>";
        echo "<p>Tăng Chữ số cuối chuỗi: ".IndexIncrease(LayChuoiSoCuoiChuoi($Ma))."</p>";*/
        return strval( LayChuoiChuCaiDau($Ma).IndexIncrease(LayChuoiSoCuoiChuoi($Ma)) );
    }

    //6. Hàm lấy thông tin đọc giả
    function infDocGia(){
        $sql = "SELECT * FROM docgia";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }
    function createDocGia(){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $Iddocgia = $_POST['IDdocGia'];
            $hoten = $_POST['hoTen'];
            $gioitinh = $_POST['gioiTinh'];
            $ngaysinh = $_POST['ngaySinh'];
            $sdt = $_POST['SDT'];
            $matkhau = $_POST['MatKhau'];
        } 

        $sql = "INSERT INTO docgia (IDdocGia, hoTen, gioiTinh, ngaySinh, SDT, MatKhau) VALUES ('$Iddocgia', '$hoten', '$gioitinh', '$ngaysinh', '$sdt', '$matkhau')";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }

    //7. Hàm lấy thông tin nhân viên
    function infNhanVien(){
        $sql = "SELECT * FROM nhanvien nv INNER JOIN taikhoan tk on nv.IDnhanVien = tk.UserID";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }

    //8. Hàm lấy thông tin sách
    function infSach(){
        $sql = "SELECT *FROM Sach";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }

    //9.Lấy thông tin nhà xuất bản thông qua mã
    function identifyNhaXuatBan($idnxb){
        $sql = "SELECT * FROM NhaXuatBan WHERE idNXB = '$idnxb'";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }
    
    //10.Lấy thông tin tác giả thông qua mã
    function identifyTacGia($idtacGia){
        $sql = "SELECT * FROM tacgia WHERE IDTacGia = '$idtacGia'";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //11.Lấy thông tin thể loại thông qua mã
    function identifyTheLoai($idtacGia){
        $sql = "SELECT * FROM TheLoai WHERE idTheLoai = '$idtacGia'";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //12. Thông báo thành công và thoát ra
    function ThucHienThanhCong(){
        echo '<script>
                alert("Thực hiện thành công");
                history.back();
            </script>';
    }

    //13. Lấy thông tin thể loại
    function infTheLoai(){
        $sql = "SELECT * FROM TheLoai";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }

    //14. Hàm này sẽ kiểm tra tên tác giả có tồn tại hay không
    function Find_TenTacGia($tentg){
        $sql = "SELECT COUNT(*) DEM
        FROM tacgia WHERE hoTen LIKE '$tentg'";
        $thucHien = TruyVan($sql);

        if(mysqli_fetch_array($thucHien)['DEM'] > 0){
            return 1;
        }
        return 0;
    } 

    //15. Hàm tìm kiếm tên nhà xuất bản
    function Find_TenNhaXuatBan($tennxb){
        $sql = "SELECT COUNT(*) DEM
        FROM NhaXuatBan WHERE TenNXB LIKE '$tennxb'";
        $thucHien = TruyVan($sql);

        if(mysqli_fetch_array($thucHien)['DEM'] > 0){
            return 1;
        }
        return 0;
    }
    
    //16. Hàm lấy thông tin nhà xuất bản thông qua tên
    function FindTen_NhaXuatBan($tenNXB){
        $tenNXB = trim($tenNXB);
        $sql = "CALL qlthuvien.Find_Name_NhaXuatBan('".$tenNXB."')";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //17. Hàm kiểm tra tên sách có tồn tại hay không
    function FindTen_Sach($tenSach){
        $sql = "SELECT COUNT(*) dem 
        FROM Sach
        WHERE tenSach LIKE '%$tenSach%'";
        $thucHien = mysqli_fetch_array(TruyVan($sql))['dem'];
        if($thucHien < 1){
            return 0;
        }
        return 1;
    }
    
    //18. Lấy số lượng mẫu tin chi tiết sách
    function SoLuongMauTin_ChiTietSach(){
        $sql = "SELECT COUNT(*) dem 
        FROM ChiTietSach";
        $thucHien = mysqli_fetch_array(TruyVan($sql))['dem'];
        return $thucHien;
    }

    //19. Lấy sách dựa trên mã sách
    function ID_Sach($idsach){
        $sql = "CALL qlthuvien.Find_ID_Sach('$idsach')";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //20. Tất cả mẫu tin tác giả
    function All_ThongTinTacGia(){
        $sql = "SELECT * FROM tacgia";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }

    //21.Lấy thông tin nhân viên bằng ID
    function identifyNhanVien($msnv){
        $sql = "CALL qlthuvien.Find_ID_NhanVien('$msnv')";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }
    function identifydocGia($msdg){
        $sql = "CALL qlthuvien.Find_ID_DocGia('$msdg')";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //22. lấy thông tin thể loại
    function LayThongTinTheLoai($msnv){
        $sql = "SELECT * FROM TheLoai WHERE idTheLoai = '$msnv'";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien);
    }

    //23. Lấy Thông tin tài khoản thông qua ID
    function msnv_TaiKhoan($msnv){
        $sql = "SELECT * FROM taikhoan
                WHERE UserID = '$msnv'";
        return mysqli_fetch_array(TruyVan($sql));
    }

    //24. Lấy số lượng sách dựa trên ID
    function ID_SoLuongSach($idsach){
        $sql = "call qlthuvien.Count_Book_BY_ChiTietSach('$idsach')";
        $thucHien = TruyVan($sql);
        return mysqli_fetch_array($thucHien)['Count_Book'];
    }
?>