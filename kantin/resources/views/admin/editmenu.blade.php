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
    <div class="bg-gray-300 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
        <div class="p-4">
            <ul>
            <li class="mb-2"><a href="#" class="block">Profil Admin</a></li>
                <li class="mb-2"><a href="#" class="block">Data Menu</a></li>
                <li class="mb-2"><a href="#" class="block">Pesanan Masuk</a></li>
                <li class="mb-2"><a href="#" class="block">History Penjualan</a></li>
                <li class="mb-2"><a href="#" class="block">Data Pelanggan</a></li>
                <li class="mb-2"><a href="#" class="block">Logout</a></li>
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
                <label for="Kategory" class="block text-gray-700 font-bold mb-2">Kategory:</label>
                <input type="text" id="kategory" name="kategory" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan kategory">
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
