window.addEventListener('load',()=>{

    //1. Hiển thị danh sách đọc giả
    $('.NutDocGia').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.khungDocGia').addClass("HienThiKhung");
        //Ẩn
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //2. Hiển thị danh sách nhân viên
    $('.NutNhanVien').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungNhanVien').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //3. Hiển thị danh sách sách
    $('.NutSach').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungSach').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //4. hiển thị khung sách chưa mượn
    $('.NutChuaMuon').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungChuaMuon').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //5. hiển thị khung sách đã  mượn
    $('.NutDaMuon').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungDaMuon').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });
    //6. hiển thị khung sách quá hạn
    $('.NutQuaHan').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungQuaHan').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //7. hiển thị khung sách hỏng
    $('.NutHong').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungHong').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungMat').addClass("TatKhung");
        $('.KhungMat').removeClass("HienThiKhung");
    });

    //7. hiển thị khung sách mất
    $('.NutMat').click(function (e) { 
        e.preventDefault();
        //Hiển thị
        $('.KhungMat').addClass("HienThiKhung");
        //Ẩn
        $('.khungDocGia').removeClass("HienThiKhung");
        $('.KhungNhanVien').removeClass("HienThiKhung");
        $('.khungDocGia').addClass("TatKhung");
        $('.KhungNhanVien').addClass("TatKhung");
        $('.KhungSach').addClass("TatKhung");
        $('.KhungSach').removeClass("HienThiKhung");
        $('.KhungChuaMuon').addClass("TatKhung");
        $('.KhungChuaMuon').removeClass("HienThiKhung");
        $('.KhungDaMuon').addClass("TatKhung");
        $('.KhungDaMuon').removeClass("HienThiKhung");
        $('.KhungQuaHan').addClass("TatKhung");
        $('.KhungQuaHan').removeClass("HienThiKhung");
        $('.KhungHong').addClass("TatKhung");
        $('.KhungHong').removeClass("HienThiKhung");
    });
});