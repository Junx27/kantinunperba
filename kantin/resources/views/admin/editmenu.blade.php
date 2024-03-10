<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
    </div>
    <!-- Konten Edit Menu -->
    <div class="ml-1/5 p-2">
        <h1 class="text-3xl font-bold mb-8">Edit Menu</h1>
        <!-- Formulir Edit Menu -->
        <div class="flex justify-center mb-2">
                <label for="gambar" class="block mb-1">Gambar Menu:</label>
                <input type="file" id="gambar" name="gambar" class="border border-gray-400 px-8 py-8">
            </div>
        <form action="#" method="POST" class="max-w-lg mx-auto">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Menu:</label>
                <input type="text" id="nama" name="nama" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan Nama Menu">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 font-bold mb-2">Harga:</label>
                <input type="text" id="harga" name="harga" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan Harga">
            </div>
            <div class="mb-4">
                <label for="Stock" class="block text-gray-700 font-bold mb-2">Stock:</label>
                <input type="text" id="Stock" name="Stock" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan Jumlah Stock">
            </div>
            <div class="mb-4">
                <label for="Kategori" class="block text-gray-700 font-bold mb-2">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan kategori">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" rows="4" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>
