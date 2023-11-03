window.addEventListener('load',()=>{
    //Thêm sự kiện cho nút
    // $('#DanhSachTinhTrangSach').click(function (e) { 
    //     e.preventDefault();
    //     $('.CotHienThiChucNang').css("height","100%");
    // });

    //Lấy năm hiện tại
    var date = new Date();
    var namHienTai = document.getElementById('NamHienTai');
    namHienTai.innerHTML = date.getFullYear();
});


