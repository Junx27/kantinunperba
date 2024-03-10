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
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-xl font-semibold text-gray-800">Sistem Informasi Kantin UNPERBA</h1>
            <nav>
                <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2">kontak</a>
                <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2">Kritik & saran</a>
                <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2">login</a>
                <a href="#" class="text-gray-600 hover:text-gray-800 px-4 py-2">Register</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-yellow-500 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-white mb-4">Pesanan Kantin Jadi Lebih Mudah!</h2>
            <p class="text-lg text-white mb-8">Sistem Informasi Kantin kami memberikan pengalaman yang nyaman untuk pemesanan makanan dan minuman favorit Anda.</p>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Fitur 1 -->
            <div class="bg-white shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Pemesanan Online</h3>
                <p class="text-gray-600">Pesan makanan dan minuman favorit Anda secara online tanpa antri!</p>
            </div>
            <!-- Fitur 2 -->
            <div class="bg-white shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Menu Interaktif</h3>
                <p class="text-gray-600">Lihat menu lengkap kantin kami dengan gambar dan deskripsi.</p>
            </div>
            <!-- Fitur 3 -->
            <div class="bg-white shadow-md p-8 rounded-md text-center">
                <h3 class="text-xl font-semibold mb-4">Pembayaran Digital</h3>
                <p class="text-gray-600">Bayar pesanan Anda secara digital untuk kenyamanan dan keamanan.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="bg-gray-800 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">Apa yang Pelanggan Kami Katakan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-gray-900 p-8 rounded-md">
                    <p>"Sistem Informasi Kantin ini benar-benar membantu saya untuk memesan makanan dengan mudah. Sangat direkomendasikan!"</p>
                    <p class="font-semibold mt-4">- John Doe</p>
                </div>
                <!-- Testimoni 2 -->
                <div class="bg-gray-900 p-8 rounded-md">
                    <p>"Saya sangat menyukai menu interaktifnya. Sangat membantu saya untuk memilih makanan yang ingin saya pesan."</p>
                    <p class="font-semibold mt-4">- Jane Smith</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 KantinUnperba. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
