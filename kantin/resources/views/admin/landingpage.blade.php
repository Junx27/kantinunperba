<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing Page</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md px-2">
        <div class="container mx-auto flex justify-between items-center py-2">
            <h1 class="text-xl font-semibold text-gray-800">Sistem Informasi Kantin UNPERBA</h1>
            <nav>
            <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2"><a href="http://127.0.0.1:8000/admin/login">Login</a>
            <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2"><a href="http://127.0.0.1:8000/admin/kritik&saran">Kritik & saran</a>
            
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-yellow-400 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-white mb-4">Pesanan Kantin Jadi Lebih Mudah!</h2>
            <p class="text-lg text-white mb-8">Sistem Informasi Kantin kami memberikan pengalaman yang nyaman untuk pemesanan makanan dan minuman favorit Anda.</p>
        </div>
    </section>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <style>
        /* Custom styles */
        .product-image {
            transition: transform 0.2s;
        }
        .product-image:hover {
            transform: scale(1.1);
        }
    </style>
    </head>
    <body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Menu Kantin</h1>
        <div class="flex flex-wrap justify-center">
            <?php
            // Array of product images (replace with actual data)
            $productImages = [
                "product1.jpg",
                "product2.jpg",
                "product3.jpg",
                "product4.jpg",
                "product5.jpg",
                "product6.jpg",
                "product7.jpg",
            ];
            foreach ($productImages as $image) {
                echo '<img src="' . $image . '" alt="Product" class="w-32 h-32 object-cover m-2 product-image">';
            }
            ?>
        </div>
    </div>

    <!-- Fitur Section -->
    <section class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Fitur 1 -->
            <div class="bg-green-400 shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Pemesanan Online</h3>
                <p class="text-gray-600">Pesan makanan dan minuman favorit Anda secara online tanpa antri!</p>
            </div>
            <!-- Fitur 2 -->
            <div class="bg-blue-400 shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Menu Interaktif</h3>
                <p class="text-gray-600">Lihat menu lengkap kantin kami dengan gambar dan deskripsi.</p>
            </div>
            <!-- Fitur 3 -->
            <div class="bg-pink-400 shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Pembayaran Digital</h3>
                <p class="text-gray-600">Bayar pesanan Anda secara digital untuk kenyamanan dan keamanan.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="bg-white-400 text-black py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">Apa yang Pelanggan Kami Katakan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-yellow-400 p-8 rounded-md">
                    <p>"Sistem Informasi Kantin ini benar-benar membantu saya untuk memesan makanan dengan mudah. Sangat direkomendasikan!"</p>
                    <p class="font-semibold mt-4">- John Doe</p>
                </div>
                <!-- Testimoni 2 -->
                <div class="bg-yellow-400 p-8 rounded-md">
                    <p>"Saya sangat menyukai menu interaktifnya. Sangat membantu saya untuk memilih makanan yang ingin saya pesan."</p>
                    <p class="font-semibold mt-4">- Jane Smith</p>
                </div>
            </div>
        </div>
    </section>
        <!-- Informasi Kontak -->
    <footer class="bg-grey-400 text-black py-8">
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

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 KantinUnperba. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>