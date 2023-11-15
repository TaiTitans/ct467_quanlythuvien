
//1. Ràng buộc thêm sách
function BieuMauThemSach(){
    var date = new Date();
    //alert(date.getFullYear());
    let bieuMau = document.forms['BieuMauThemSach1'];
    //Kiểm tra tên sách
    let tenSach = bieuMau['tenSach'];
    if(tenSach.value.length == 0){
        Swal.fire('Tên sách không hợp lệ.Vui lòng nhập lại!');
        return false;
    }

    //Kiểm tra năm xuất bản
    let nxb = bieuMau['NamXuatBan'].value;
    let regNXB = /^[0-9]{3,4}$/;
    if(regNXB.test(nxb) == false){
        Swal.fire('Năm xuất bản không hợp lệ.Vui lòng nhập lại!');
        return false;
    }
    if( nxb < 0 || nxb > date.getFullYear()){
        Swal.fire('Năm xuất bản không hợp lệ.Vui lòng nhập lại!');
        return false;
    }

    //kiểm tra nhà xuuats bản
    let nhaXB = bieuMau['nhaXuatBan'];
    if(nhaXB.value.length == 0){
        Swal.fire('Vui lòng nhập tên nhà xuất bản!');
        return false;
    }

    //kiểm tra nhà xuuats bản
    let tacGia = bieuMau['TacGia'];
    if(tacGia.value.length == 0){
        Swal.fire('Vui lòng nhập tên tác giả!');
        return false;
    }

    //kiểm tra mô tả
    let MoTa = bieuMau['MoTaSach'];
    if(MoTa.value.length == 0){
        Swal.fire('Vui lòng nhập tên mô tả sách!');
        return false;
    }

    //Kiểm giá quyển sách
    let giasach = bieuMau['giasach'].value;
    let regGia = /^[0-9]{1,}$/;
    if(regGia.test(giasach) == false){
        Swal.fire('Giá cả cuốn sách không lệ.Vui lòng nhập lại!');
        return false;
    }
    if( giasach < 0){
        Swal.fire('Giá cả sách không được ân.Vui lòng nhập lại!');
        return false;
    }

    if(true){
        return true;
    }
}
