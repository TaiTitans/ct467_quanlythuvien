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
        $sql = "SELECT * FROM docgia dg INNER JOIN taikhoan tk on dg.IDdocGia = tk.UserID";
        $thucHien = TruyVan($sql);
        return $thucHien;
    }
?>