<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Tambah Menu</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-5 text-xl">
        Form Input Menu
  </div>
  <body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-1/6 bg-gray-200">
            <ul>
                <li class="px-4 mb-2"><a href="#" class="block">Profil</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Daftar Menu</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Keranjang</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">History Pembelian</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Logout</a></li>
                <!-- Add more menu items here -->
                </div>
    <div class="mt-20 grid grid-cols-2 gap-10">
        <div class="mx-auto">
            <img src="https://www.shutterstock.com/image-vector/avatar-male-profile-gray-person-260nw-538708681.jpg" alt="" class="w-[200px]">
            <button class="w-[150px] bg-orange-400 p-2 rounded-lg mt-4 ml-8">Choose Image</button>
        </div>
        <div>
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg" placeholder="Nama Menu">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Kategori">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Stock">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Harga Menu">
            <button class="w-[350px] bg-orange-400 p-2 rounded-lg mt-4"><a>Simpan</a></button>
        </div>
    </div>
</body>
</html>