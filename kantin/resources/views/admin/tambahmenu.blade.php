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
    <div class="text-center bg-yellow-400 py-2 text-xl">
        Tambah Daftar Menu
  </div>
  <body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-400 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
        <div class="p-4">
        <ul>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/profiladmin"><span class="material-symbols-outlined">
            person</span>Profil Admin</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/dasboard"><span class="material-symbols-outlined">
            home</span>Dasboard</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/daftarmenu"><span class="material-symbols-outlined">
            book</span>Daftar Menu</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/pesananmasuk"><span class="material-symbols-outlined">
            notifications_unread</span>Pesanan Masuk</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/historypenjualan"><span class="material-symbols-outlined">
            manage_history</span>History Penjualan</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/datapelanggan"><span class="material-symbols-outlined">
            groups</span>Data Pelanggan</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/landingpage"><span class="material-symbols-outlined">
            logout</span>Log Out</a></button>
            </ul>
        </div>
    </div>

    <!-- Konten -->
    <div class="ml-1/5 p-8">
        <h1 class="flex justify-center text-1xl font-bold mb-8">Form Input Data Menu</h1>
        <!-- Formulir Tambah Menu -->
        <form action="#" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
            <div class="mb-4">
                <label for="nama" class="block mb-1">Nama Menu:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-400 px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="harga" class="block mb-1">Harga:</label>
                <input type="text" id="harga" name="harga" class="border border-gray-400 px-4 py-2 w-full">
                </div>
            <div class="mb-4">
                <label for="stock" class="block mb-1">Stock:</label>
                <input type="text" id="stock" name="stock" class="border border-gray-400 px-4 py-2 w-full">
                </div>
            <div class="mb-4">
                <label for="kategori" class="block mb-1">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="border border-gray-400 px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block mb-1">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="border border-gray-400 px-4 py-2 w-full h-32"></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-1">Gambar Menu:</label>
                <input type="file" id="gambar" name="gambar" class="border border-gray-400 px-4 py-2 w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md">Tambah Menu</button>
            </div>
        </form>
    </div>
</body>
</html>