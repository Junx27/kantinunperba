<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl flex justify-center font-bold mb-10">Detail Pemesanan</h1>
        <!-- Kolom Detail Pemesanan -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-2">Detail Pemesanan</h2>
            <p>Nama Pemesan: Dinda Ayu</p>
            <p>ID Pemesan: 12345</p>
            <p>Waktu Pemesanan: 2024-02-07 15:30:00</p>
        </div>
        <!-- Kolom Daftar Menu -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Menu 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-2">
                    <img src="menu_image.jpg" alt="Menu 1" class="w-16 h-16 mr-4">
                    <div>
                        <h3 class="text-lg font-semibold">Nama Menu</h3>
                        <p>Jumlah: 2</p>
                        <p>Harga: Rp 25.000</p>
                    </div>
                </div>
            </div>
            <!-- Menu 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-2">
                    <img src="menu_image.jpg" alt="Menu 2" class="w-16 h-16 mr-4">
                    <div>
                        <h3 class="text-lg font-semibold">Nama Menu</h3>
                        <p>Jumlah: 1</p>
                        <p>Harga: Rp 15.000</p>
                    </div>
                </div>
            </div>
            <!-- Total Harga -->
            <div class="col-span-2 bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Harga</h2>
                <p>Rp 55.000</p>
            </div>
        </div>
        <!-- Tombol Cetak PDF -->
        <div class="mt-8">
            <button onclick="window.print()" class="bg-yellow-400 text-white px-6 py-3 rounded-md">Cetak PDF</button>
        </div>
    </div>
</body>
</html>
