<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý sách</title>
        <link href="/Librarian_Project/code/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="/Librarian_Project/code/dist/assets/css/style.css">
        <link rel="shortcut icon" href="/Librarian_Project/code/dist/assets/img/favicon.png">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <!--Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script defer src="../../../js/sach/CauHinhBang.js"></script>
        <!--CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../../css/admin/TrangChu.css">
    <link rel="stylesheet" href="../../../css/danhsachsach.css">

</head>

<body>
  <header>
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
                  <a href="../../../../Librarian_Project/code/dist/trangchu.html" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium no-underline" aria-current="page">Trang chủ</a>
                  <a href="./QuanLySach/DanhSachSach.php" class="no-underline text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kho Sách</a>
                  <a href="../QuanLyNhanVien/DanhSachNhanVien.php" class="no-underline text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Nhân Viên</a>
                  <a href="./QuanLyDocGia/DanhSachDocGia.php" class="no-underline text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Thông tin cho mượn</a>
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
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Trang chủ</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Kho Sách</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Nhân Viên</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Thông Tin Cho Mượn</a>
          </div>
        </div>
      </nav>
    </div>
    </div>
  </header>
  <main>
    <div class="py-6 sm:py-8 lg:py-12">
      <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg shadow-lg p-8 mx-8 mb-5">
        <h1 class="text-4xl font-bold text-white mb-4">
          Danh sách sách
        </h1>
        <p class="text-lg text-white mb-8">
          😊
      </div>
      <div class="bg-gray-200 rounded-lg mt-10 pb-2 px-2 mx-10 layout_main">
        <a href="./ThemSach.php" class="mt-2 ml-2 inline-block my-2.5 px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-violet-600 rounded-lg active:text-violet-500 hover:bg-transparent hover:text-black focus:outline-none focus:ring no-underline themdocgia_button">Thêm sách</a>


        <table id="CanChinhDanhSachSach">
          <thead>
            <tr class="TieuDeBang">
              <th>ID sách</th>
              <th>Tên sách</th>
              <th>Năm xuất bản</th>
              <th>Nhà xuất bản</th>
              <th>Tác giả</th>
              <th>Thể loại</th>
              <th>Mô tả</th>
              <th>Số lượng sách</th>
              <th>Delete</th>
              <th>Cập nhật</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include('../../../php/ConnectMySQL.php');
            include('../../../php/CacHamXuLy.php');
            $TTSach = infSach();
            while ($row = mysqli_fetch_array($TTSach)) {
              mysqli_next_result($connect);
              $soLuongSach = ID_SoLuongSach($row['idSach']);
              mysqli_next_result($connect);
              echo '<tr>
                                        <td>' . $row['idSach'] . '</td>
                                        <td>' . $row['tenSach'] . '</td>
                                        <td>' . $row['namXuatBan'] . '</td>
                                        <td>' . identifyNhaXuatBan($row['idNXB'])['TenNXB'] . '</td>
                                        <td>' . identifyTacGia($row['IDtacGia'])['hoTen'] . '</td>
                                        <td>' . identifyTheLoai($row['idTheLoai'])['TenTheLoai'] . '</td>
                                        <td>' . $row['MoTa'] . '</td>
                                        <td>' . $soLuongSach . '</td>
                                        <td>
                                            <a href="###" ><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                        <td>
                                            <a href="ChinhSuaSach.php?ID=' . $row['idSach'] . '"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>';
            }
            ?>
          </tbody>
          <tfoot>
            <tr class="TieuDeBang">
              <th>ID sách</th>
              <th>Tên sách</th>
              <th>Năm xuất bản</th>
              <th>Nhà xuất bản</th>
              <th>Tác giả</th>
              <th>Thể loại</th>
              <th>Mô tả</th>
              <th>Số lượng sách</th>
              <th>Delete</th>
              <th>Cập nhật</th>
            </tr>
          </tfoot>
        </table>
      </div>
  </main>
  <footer></footer>
</body>

</html>