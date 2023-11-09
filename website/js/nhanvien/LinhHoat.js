
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

function XacNhanXoaDocGia(idDocGia) {
  Swal.fire({
      title: 'Bạn chắc chắn muốn xóa độc giả?',
      text: 'Dữ liệu sẽ bị mất vĩnh viễn!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Xóa',
      cancelButtonText: 'Hủy',
  }).then((result) => {
      if (result.isConfirmed) {
          // Chuyển hướng tới trang xử lý xóa độc giả với IDdocGia được truyền
          window.location.href = 'XoaDocGia.php?IDdocgia=' + idDocGia;
      }
  })
}
