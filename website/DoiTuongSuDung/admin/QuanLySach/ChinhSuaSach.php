<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chỉnh sửa sách</title>
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
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!--Script-->
        <script src="../../nodejs/public/ConnectMySQL.js" async></script>
        <script src="../../../js/TrangChu.js" async></script>
        <script src="../../../js/sach/rangBuoc.js" async></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--CSS-->
        <link rel="stylesheet" href="../../../css/Sach/sach.css">
        <link rel="stylesheet" href="../../../css/TrangDungChung/TrangDungChung.css">        
        <!--PHP-->
        <?php
            include('../../../php/ConnectMySQL.php');
            include('../../../php/CacHamXuLy.php');
            $IDsach = $_GET['ID'];

            $TTsach = ID_Sach($IDsach);
        ?>  
    </head>
    <body>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
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
                    <img class="h-8 w-auto"  src="/Librarian_Project/code/dist/assets/img/favicon.png" alt="logo">
                  </div>
                  <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                      <a href="../../../Librarian_Project/code/dist/trangchu.html" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Trang chủ</a>
                      <a href="../../website/DoiTuongSuDung/admin/QuanLySach/DanhSachSach.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kho Sách</a>
                      <a href="../../website/DoiTuongSuDung/admin/QuanLyNhanVien/DanhSachNhanVien.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Nhân Viên</a>
                      <a href="../../website/DoiTuongSuDung/admin/QuanLyDocGia/DanhSachDocGia.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Thông tin cho mượn</a>
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
        <main>
        <div class="max-w-2xl mx-auto mt-10 mb-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
        Chỉnh sửa sách
    </div>
    <form class="py-4 px-6" action="ThucHienCapNhatSach.php" method="post" name="BieuMauThemSach" enctype="application/x-www-form-urlencoded" onsubmit="return BieuMauThemSach()">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                ID Sách
            </label>
            <input type="text" name="idSach" value="<?php echo $TTsach['idSach'];?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Tên sách
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="tenSach" value="<?php echo $TTsach['tenSach'];?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
                Năm xuất bản
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="namXuatBan" value="<?php echo $TTsach['namXuatBan'];?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Nhà xuất bản
            </label>
            <?php
                                    mysqli_next_result($connect);
                                    echo '<select name="idNXB" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">';
                                    $LayThongTinNXB = "SELECT * FROM NhaXuatBan";
                                    $ThucHienLay = TruyVan($LayThongTinNXB);
                                    while($row = mysqli_fetch_array($ThucHienLay)){
                                        if($row['idNXB'] === $TTsach['idNXB']){
                                            echo '<option value='.$row['idNXB'].' selected>'.$row['TenNXB'].'</option>';
                                        }else{
                                            echo '<option value='.$row['idNXB'].'>'.$row['TenNXB'].'</option>';
                                        }
                                    }
                                    echo '</select>';
                                ?>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Tác giả
            </label>
            <?php
                                    mysqli_next_result($connect);
                                    
                                    $LayTacGia = "SELECT * FROM tacgia";
                                    $act_LayTacGia = TruyVan($LayTacGia);
                                    mysqli_next_result($connect);

                                    echo '<select name="IDTacGia" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">';

                                    while($row = mysqli_fetch_array($act_LayTacGia)){
                                        mysqli_next_result($connect);
                                        $tenTL = identifyTacGia($row['IDTacGia'])['hoTen'];

                                        if($row['IDTacGia'] === $TTsach['IDtacGia']){
                                            echo '<option value ='.$row['IDTacGia'].' selected>'.$tenTL.'</option>';
                                        }else{
                                            echo '<option value ='.$row['IDTacGia'].' >'.$tenTL.'</option>';
                                        }
                                    }
                                    echo '</select>';
                                ?>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Thể loại
            </label>
            <?php
                                    echo '<select name="idTheLoai" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">';
                                    $LayThongTinTheLoai = "SELECT * FROM TheLoai";
                                    $ThucHienLay = TruyVan($LayThongTinTheLoai);
                                    while($row = mysqli_fetch_array($ThucHienLay)){
                                        if($row['idTheLoai'] === $TTsach['idTheLoai']){
                                            echo '<option value='.$row['idTheLoai'].' selected>'.$row['TenTheLoai'].'</option>';
                                        }else{
                                            echo '<option value='.$row['idTheLoai'].'>'.$row['TenTheLoai'].'</option>';
                                        }
                                        
                                        // echo '<p>ID: '.$row['idTheLoai'].'</p>';
                                        // echo '<p>Tên: '.$row['TenTheLoai'].'</p>';
                                    }
                                    echo '</select>';
                                    
                                ?>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="message">
                Mô tả
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="message" rows="4" name="MoTa"><?php echo $TTsach['MoTa'];?></textarea>
        </div>
        <div class="flex items-center justify-center">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
                Lưu Lại
            </button>
        </div>

    </form>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Mô tả</p>
                                <textarea name="MoTa"  cols="30" rows="10"> <?php echo $TTsach['MoTa'];?>
                                </textarea>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
