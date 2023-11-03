
//1. Hàm xác thực có muốn xóa nhân viên hay không
function XacNhanXoaNhanVien(msnv){
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
      window.location.href = 'ThucHienXoaNhanVien.php?MSNV='+msnv;
    }
  })
}