window.addEventListener('load',()=>{
    
    //1. Hàm xác thực có muốn xóa nhân viên hay không
    function XacNhanXoaNhanVien(msnv){
        alert("Thấy r nhen");
        Swal.fire({
            title: 'Bạn có chắc rằng?',
            text: "Bạn muốn xóa tài khoản nhân viên này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, tôi chắc chắn'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '../../DoiTuongSuDung/admin/QuanLyNhanVien/ThucHienXoaNhanVien.php?MSNV=' + msnv;
            }
          })
    }

    
});

