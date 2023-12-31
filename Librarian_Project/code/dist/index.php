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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <?php
        session_start();
    ?>
</head>
<body class="body_login-page">
    <div id="main" class="h-screen flex flex-col justify-center items-center">
        <div id="header" class="bg-white shadow-md rounded-lg p-8 max-w-md w-full space-y-4 form_parent">
            <img class="w-8 h-8 mx-auto" src="./assets/img/favicon.png" alt="logo">
            <h1 class="text-2xl font-semibold text-center text-gray-900 dark:text-white">Quản lý thư viện</h1>
            <form class="space-y-4" action="../../../website/DoiTuongSuDung/DungChung/KiemTraDangNhap.php" method="post" enctype="application/x-www-form-urlencoded">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-900 dark:text-white">Tên đăng nhập</label>
                    <input type="text" name="taiKhoan" id="email" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="user123" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Mật khẩu</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <a for="remember" href="./dangky.html" class="ml-3 text-sm text-gray-500 dark:text-gray-300">Chưa có tài khoản ? Đăng ký</a>
                    </div>
                </div>
                <button type="submit" class="button_login w-full bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 text-white font-medium rounded-lg text-sm p-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-2">Đăng nhập</button>
            </form>
            <div class="mt-4 text-center">
                <span class="text-sm text-gray-500 dark:text-gray-400">Version v1.0.0</span>
            </div>
        </div>

    </div>
    <footer class="bg-gray-800 shadow dark:bg-gray-900 z-50 footer_login-page footer_login-page">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com" class="flex items-center mb-4 sm:mb-0">
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
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Nhóm 9™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
