<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chỉnh Sửa Thông Tin Đọc Giả</title>
  <link href="/Librarian_Project/code/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="/Librarian_Project/code/dist/assets/css/style.css">
  <link rel="shortcut icon" href="/Librarian_Project/code/dist/assets/img/favicon.png">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<script>
  function kiemTraVaGuiMau() {
    var IDdocGia = document.getElementById("IDdocGia").value;
    var hoTen = document.getElementById("hoTen").value;
    var ngaySinh = document.getElementById("ngaySinh").value;
    var gioiTinh = document.getElementById("gioiTinh").value;
    var SDT = document.getElementById("SDT").value;


    if (IDdocGia === "" || hoTen === "" || gioiTinh === "" || ngaySinh === "" || SDT === "") {
      alert("Vui lòng điền đủ thông tin trong các trường bắt buộc.");
    } else {
      // Thực hiện xử lý mẫu ở đây
      document.forms[0].submit(); // Gửi mẫu nếu thông tin đã được điền đủ
    }
  }
</script>
<?php
include('../../../php/ConnectMySQL.php');
include('../../../php/CacHamXuLy.php');
$msdg = $_GET['MSDG'];
$TTdg = identifydocGia($msdg);
?>

<body>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const userMenuButton = document.getElementById('user-menu-button');
      const userMenu = document.querySelector('.user-menu');

      userMenuButton.addEventListener('click', function() {
        userMenu.classList.toggle('hidden');
      });
    });
  </script>
  <div class="header">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Mở menu</span>
              <!--
                      Icon when menu is closed.
          
                      Menu open: "hidden", Menu closed: "block"
                    -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                      Icon when menu is open.
          
                      Menu open: "block", Menu closed: "hidden"
                    -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <img class="h-8 w-auto" src="/Librarian_Project/code/dist/assets/img/favicon.png" alt="logo">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="../../../../Librarian_Project/code/dist/trangchu.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Trang chủ</a>
                <a href="../QuanLySach/DanhSachSach.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kho Sách</a>
                <a href="../QuanLyNhanVien/DanhSachNhanVien.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Nhân Viên</a>
                <a href="../QuanLyDocGia/DanhSachDocGia.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Thông tin cho mượn</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Xem thông báo</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Mở menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none user-menu hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Đăng xuất</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="../../../../Librarian_Project/code/dist/trangchu.php" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Trang chủ</a>
          <a href="../QuanLySach/DanhSachSach.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Kho Sách</a>
          <a href="../QuanLyNhanVien/DanhSachNhanVien.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Nhân Viên</a>
          <a href="../QuanLyDocGia/DanhSachDocGia.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Thông Tin Cho Mượn</a>
        </div>
      </div>
    </nav>
  </div>
  </div>
  <div class="main">
    <div class="py-6 sm:py-8 lg:py-12">
      <div class="bg-cyan-700 rounded-lg shadow-lg p-8 mx-8 mb-5">
        <h1 class="text-2xl font-bold text-black mb-4- justify-center text-center">
          Chỉnh sửa thông tin độc giả
        </h1>
      </div>

      <!-- Form -->

      <div class="bg-white border border-4 rounded-lg shadow relative m-10">

        <div class="flex items-start justify-between p-5 border-b rounded-t">
          <h3 class="text-xl font-semibold">
            Thông tin
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <div class="p-6 space-y-6">
          <form action="./ThucHienLuuThongTinDocGia.php?MSDG=<?php echo $msdg; ?> " method="POST">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="IDdocGia" class="text-sm font-medium text-gray-900 block mb-2">ID</label>
                <input type="text" value='<?php echo $TTdg['IDdocGia']; ?>' name="IDdocGia" id="IDdocGia" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="1234" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="hoTen" class="text-sm font-medium text-gray-900 block mb-2">Họ và tên</label>
                <input type="text" value="<?php echo $TTdg['hoTen']; ?>" name="hoTen" id="hoTen" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Nguyen Van A" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="SDT" class="text-sm font-medium text-gray-900 block mb-2">SDT</label>
                <input type="text" value="<?php echo $TTdg['SDT']; ?>" name="SDT" id="SDT" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="03xxxxxxxxx" required="">
              </div>
              <!-- <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                <input type="email" name="price" id="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="example@gmail.com" required="">
              </div> -->
              <div class="col-span-6 sm:col-span-3">
                <label for="ngaySinh" class="text-sm mb-2 block text-base font-medium text-gray-900">
                  Ngày sinh
                </label>
                <input type="date" value="<?php echo $TTdg['ngaySinh']; ?>" name="ngaySinh" id="ngaySinh" class="w-full rounded-lg border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md shadow-sm" />
              </div>

              <div class="mb-4 ">
                <label for="gioiTinh" class="block text-gray-900 font-medium mb-2">Giới tính</label>
                <select value="<?php echo $TTdg['gioiTinh']; ?>" id="gioiTinh" name="gioiTinh" class="border border-gray-300 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400 shadow-sm p-2.5" required>
                  <option value="">Chọn giới tính</option>
                  <?php
                  if ($TTdg['gioiTinh'] == 'M') {
                    echo '
                      <option value="F">Nữ</option>
                      <option value="M" selected>Nam</option>
                    ';
                  } else {
                    echo '
                      <option value="F" selected>Nữ</option>
                      <option value="M" >Nam</option>
                    ';
                  }
                  ?>
                </select>
              </div>
              <!-- <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">Địa chỉ</label>
                <textarea id="product-details" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="Details"></textarea>
              </div> -->
            </div>
          </form>
        </div>

        <div class="flex justify-center mb-4">
          <button onclick="kiemTraVaGuiMau()" type="button" id="luuThongTin" class="bg-blue-700 px-12 py-3 text-sm font-medium text-white shadow-sm border border-violet-600 rounded-lg hover:bg-black hover:text-white active:bg-indigo-500 focus:outline-none focus:ring">
            Lưu thông tin
          </button>
          <a class="bg-blue-700 px-12 py-3 text-sm font-medium text-white shadow-sm border border-violet-600 rounded-lg hover:bg-black hover:text-white active:bg-indigo-500 focus:outline-none focus:ring" href="./DanhSachDocGia.php">
            quay lại
          </a>
        </div>
</body>

</html>