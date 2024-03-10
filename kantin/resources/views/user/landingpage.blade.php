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
    <nav class="bg-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-black font-bold text-lg">Kantin Unperba</a>
            <!-- Menu -->
            <ul class="flex space-x-4">
                <li><a href="#" class="text-black hover:text-yellow-100">Contact</a></li>
                <li><a href="#" class="text-white hover:text-yellow-100"></a></li><a href="http://127.0.0.1:8000/user/kritik&saran">Kritik & Saran</a></button>
                <li><a href="#" class="text-white hover:text-yellow-100"></a></li><a href="http://127.0.0.1:8000/user/login">Login</a></button>
                <li><a href="#" class="text-white hover:text-yellow-100"></a></li><a href="http://127.0.0.1:8000/user/register">Register</a></button>
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
        <!-- Testimoni Section -->
    <section class="bg-white text-black py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">Apa yang Pelanggan Kami Katakan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-white p-8 rounded-md">
                    <p>"Sistem Informasi Kantin ini benar-benar membantu saya untuk memesan makanan dengan mudah. Sangat direkomendasikan!"</p>
                    <p class="font-semibold mt-4">- John Doe</p>
                </div>
                <!-- Testimoni 2 -->
                <div class="bg-white p-8 rounded-md">
                    <p>"Saya sangat menyukai menu interaktifnya. Sangat membantu saya untuk memilih makanan yang ingin saya pesan."</p>
                    <p class="font-semibold mt-4">- Jane Smith</p>
                </div>
            </div>
        </div>
    </section>
        <!-- Informasi Kontak -->
    <footer class="bg-yellow-400 text-white py-8">
        <div class="container mx-auto flex justify-center">
            <div class="text-center">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
                <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
                <p><span class="material-symbols-outlined">pin_drop
                </span>Alamat: Jl. Kedungmenjangan No. 123</p>
                <p><span class="material-symbols-outlined">
                perm_phone_msg
                </span>Telepon: 123-456-789</p>
                <p><span class="material-symbols-outlined">
                stacked_email
                </span>Email: kantinunperba@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>