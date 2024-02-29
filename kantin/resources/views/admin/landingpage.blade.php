<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-yellow-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-white font-bold text-lg">Kantin Unperba</a>
            <!-- Menu -->
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-yellow-100">Menu</a></li>
                <li><a href="#" class="text-white hover:text-yellow-100">Contact</a></li>
                <li><a href="#" class="text-white hover:text-yellow-100">Kritik & Saran</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center mb-8">Selamat Datang di Sistem Informasi Menu Kantin UNPERBA</h1>
        <!-- Foto Menu -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Menu Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="menu1.jpg" alt="Menu 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Nama Menu 1</h2>
                    <p class="text-sm text-gray-600 mb-2">Deskripsi singkat mengenai menu 1.</p>
                    <p class="text-lg font-bold text-yellow-500">Rp 25.000</p>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-md mt-2 hover:bg-yellow-600">Pesan Sekarang</button>
                </div>
            </div>
            <!-- Menu Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="menu2.jpg" alt="Menu 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Nama Menu 2</h2>
                    <p class="text-sm text-gray-600 mb-2">Deskripsi singkat mengenai menu 2.</p>
                    <p class="text-lg font-bold text-yellow-500">Rp 30.000</p>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-md mt-2 hover:bg-yellow-600">Pesan Sekarang</button>
                </div>
            </div>
            <!-- Menu Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="menu3.jpg" alt="Menu 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Nama Menu 3</h2>
                    <p class="text-sm text-gray-600 mb-2">Deskripsi singkat mengenai menu 3.</p>
                    <p class="text-lg font-bold text-yellow-500">Rp 20.000</p>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-md mt-2 hover:bg-yellow-600">Pesan Sekarang</button>
                </div>
            </div>
        </div>
        <!-- Informasi Kontak -->
    <footer class="bg-yellow-500 text-white py-8">
        <div class="container mx-auto flex justify-center">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
                <p>Alamat: Jl. Kedungmenjangan No. 123</p>
                <p>Telepon: 123-456-789</p>
                <p>Email: kantinunperba@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>
