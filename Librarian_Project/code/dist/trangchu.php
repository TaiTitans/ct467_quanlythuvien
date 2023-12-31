<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý thư viện</title>
  <link href="output.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link href="./output.css" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  <style>
    .carousel-open:checked+.carousel-item {
      position: static;
      opacity: 100;
    }

    .carousel-item {
      -webkit-transition: opacity 0.6s ease-out;
      transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
      display: block;
    }

    .carousel-indicators {
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      bottom: 2%;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
      color: #2b6cb0;
      /*Set to match the Tailwind colour you want the active one to be */
    }
  </style>
  <?php
    session_start();

    include('../../../website/php/ConnectMySQL.php');
    include('../../../website/php/CacHamXuLy.php');
    
    if(empty($_SESSION['user'])){
      echo '
          alert("Tài khoản không hợp lệ");
          location.href="index.php";';
    }
  ?>

<a href=""></a>
</head>

<body>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const userMenuButton = document.getElementById('user-menu-button');
      const userMenu = document.querySelector('.user-menu');

      userMenuButton.addEventListener('click', function () {
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
            <button type="button"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Mở menu</span>
              <!--
                      Icon when menu is closed.
          
                      Menu open: "hidden", Menu closed: "block"
                    -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                      Icon when menu is open.
          
                      Menu open: "block", Menu closed: "hidden"
                    -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <img class="h-8 w-auto" src="./assets/img/favicon.png" alt="logo">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                  aria-current="page">Trang chủ</a>
                <a href="../../../website/DoiTuongSuDung/admin/QuanLySach/DanhSachSach.php"
                  class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kho
                  Sách</a>
                <a href="../../../website/DoiTuongSuDung/admin/QuanLyNhanVien/DanhSachNhanVien.php"
                  class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Nhân
                  Viên</a>
                <a href="../../../website/DoiTuongSuDung/admin/QuanLyDocGia/DanhSachDocGia.php"
                  class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                  Đọc giả</a>
                <a href="../../../website/DoiTuongSuDung/admin/QuanLyDocGia/DanhSachDocGia.php"
                  class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                  Thông tin mượn sách</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button"
              class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Xem thông báo</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button"
                  class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Mở menu</span>
                  <img class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                </button>
              </div>

              <div
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none user-menu hidden"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="../../../website/DoiTuongSuDung/DungChung/dangxuat.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Đăng xuất</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
            aria-current="page">Trang chủ</a>
          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Kho
            Sách</a>
          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Nhân
            Viên</a>
          <a href="#"
            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Thông
            Tin Cho Mượn</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="main bg-gray-300">
    <div class="py-6 sm:py-8 lg:py-12">
      <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg shadow-lg p-8 mx-8 mb-5">
        <h1 class="text-4xl font-bold text-white mb-4">
          Welcome to Admin-Panel
        </h1>
        <p class="text-lg text-white mb-8">
          Have a good day 😊
      </div>
      <!-- Slider Image-->

      <div class="carousel relative shadow-2xl bg-white rounded-lg mx-8">
        <div class="carousel-inner relative overflow-hidden w-full rounded-lg">
          <!--Slide 1-->
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <img src="./assets/img/sachhay2.jpg" alt="Slide 1" class="w-full h-full">
            <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Giận</div>
          </div>
          <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

          <!--Slide 2-->
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <img src="./assets/img/sachhay1.jpeg" alt="Slide 2" class="w-full h-full">
            <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Jujutsu Kaisen</div>
          </div>
          <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

          <!--Slide 3-->
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <img src="./assets/img/sachhay3.jpg" alt="Slide 3" class="w-full h-full">
            <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Hoàng Tử Bé</div>
          </div>
          <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

          <!-- Add additional indicators for each slide-->
          <ol class="carousel-indicators">
            <li class="inline-block mr-3">
              <label for="carousel-1"
                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-2"
                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-3"
                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
          </ol>

        </div>
      </div>






      <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-4 sm:px-8">
        <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow rounded-lg">
          <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
              </path>
            </svg></div>
          <div class="px-4 text-gray-700">
            <h3 class="text-sm tracking-wider"><a
                href="../../../website/DoiTuongSuDung/admin/QuanLyNhanVien/DanhSachNhanVien.php">Nhân viên</a></h3>
            <p class="text-3xl"><?php echo SoLuongNhanVien();?></p>
          </div>
        </div>
        <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow rounded-lg">
          <div class="p-4 bg-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="h-12 w-12 text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
          </div>
          <div class="px-4 text-gray-700">
            <h3 class="text-sm tracking-wider">Số sách</h3>
            <p class="text-3xl"><?php echo SoLuongSach();?></p>
          </div>
        </div>
        <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow rounded-lg">
          <div class="p-4 bg-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-6 h-6 h-12 w-12 text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
            </svg>
          </div>
          <div class="px-4 text-gray-700">
            <h3 class="text-sm tracking-wider">Số sách cho mượn</h3>
            <p class="text-3xl"><?php echo Dem_NhungBanSachDaMuon();?></p>
          </div>
        </div>
        <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow rounded-lg">
          <div class="p-4 bg-red-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="h-12 w-12 text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
            </svg>
          </div>
          <div class="px-4 text-gray-700">
            <h3 class="text-sm tracking-wider">Độc giả</h3>
            <p class="text-3xl"><?php echo SoLuongDocGia();?></p>
          </div>
        </div>
      </div>
      <!--  Chart   -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <div class="container mx-auto px-4 py-8 mt-16">
        <canvas id="myChart"></canvas>
      </div>
      <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
              label: 'Books',
              data: [12, 19, 3, 5, 2, 3, 14],
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>
      <!--- Layout list-->
      <div class="bg-gray-100 px-4 py-16 rounded-lg shadow border mx-4">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 border-slate-500">
          <div class="mb-10 space-y-4 px-6 md:px-0">
            <h2 class="text-center text-2xl font-bold text-black sm:text-3xl md:text-4xl">Mới nhất</h2>
          </div>
          <div class="flex flex-col sm:flex-row justify-center gap-4">
            <div
              class="flex flex-col items-center aspect-auto p-4 sm:p-8 border rounded-3xl bg-gray-800 border-gray-700 shadow-gray-600/10 shadow m-2 flex-1 max-w-md border">
              <div class="bg-gray-100 py-2 px-16 rounded-lg">
                <h2 class="text-xl font-semibold text-gray-800 "><a
                  href="../../../website/DoiTuongSuDung/admin/QuanLyDocGia/DanhSachDocGia.php">Độc giả</a></h2>
              </div>
              <ul class="divide-y divide-gray-200 animate-pulse">
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">1.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4"
                    src="https://randomuser.me/api/portraits/women/72.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Emily Jones</h3>
                    <p class="text-gray-600 text-base">ID 1234</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">2.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4"
                    src="https://randomuser.me/api/portraits/men/40.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">David Lee</h3>
                    <p class="text-gray-600 text-base">ID 4567</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">3.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4"
                    src="https://randomuser.me/api/portraits/women/54.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Sophia Williams</h3>
                    <p class="text-gray-600 text-base">ID 8910</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">4.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4"
                    src="https://randomuser.me/api/portraits/men/83.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Michael Chen</h3>
                    <p class="text-gray-600 text-base">ID 1122</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">5.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4"
                    src="https://randomuser.me/api/portraits/women/17.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Mia Davis</h3>
                    <p class="text-gray-600 text-base">ID 1213</p>
                  </div>
                </li>
              </ul>
            </div>
            <div
              class="flex flex-col items-center aspect-auto p-4 sm:p-8 border rounded-3xl bg-gray-800 border-gray-700 shadow-gray-600/10 shadow-none m-2 flex-1 max-w-md">
              <div class="bg-gray-100 py-2 px-16 rounded-lg">
                 <h2 class="text-xl font-semibold text-gray-800 "><a
                    href="../../../website/DoiTuongSuDung/admin/QuanLySach/DanhSachSach.php">Sách mới</a></h2>
              </div>
              <ul class="divide-y divide-gray-200 animate-pulse">
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">1.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4" src="./assets/img/chienthangconquytrongban.jpg"
                    alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Chiến thắng con quỷ trong bạn</h3>
                    <p class="text-gray-600 text-base">Napoleon Hill</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">2.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4" src="./assets/img/chuthuatsu.jpg"
                    alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Chú thuật sư hồi chiến</h3>
                    <p class="text-gray-600 text-base">Gege Akutami</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">3.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4" src="./assets/img/duongdaihanhphuc.jpg"
                    alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Đường dài hạnh phúc</h3>
                    <p class="text-gray-600 text-base">Nguyễn Văn Học</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">4.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4" src="./assets/img/gian.jpg" alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Giận</h3>
                    <p class="text-gray-600 text-base">Thích Nhất Hạnh</p>
                  </div>
                </li>
                <li class="flex items-center py-4 px-6">
                  <span class="text-gray-700 text-lg font-medium mr-4">5.</span>
                  <img class="w-12 h-12 rounded-full object-cover mr-4" src="./assets/img/haiduatre.jpg"
                    alt="User avatar">
                  <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-100">Hai Đứa Trẻ</h3>
                    <p class="text-gray-600 text-base">Thạch Lam</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <footer class="bg-gray-800 shadow dark:bg-gray-900 z-50 footer_login-page footer_login-page footer_css bottom-0">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
          <a href="#" class="flex items-center mb-4 sm:mb-0">
            <img src="./assets/img/favicon.png" class="h-8 mr-3" alt="QLTV Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Quản lý thư viện</span>
          </a>
          <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
            <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
            </li>
            <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
              <a href="#" class="hover:underline">Contact</a>
            </li>
          </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
            class="hover:underline">Nhóm 9™</a>. All Rights Reserved.</span>
      </div>
    </footer>
</body>

</html>