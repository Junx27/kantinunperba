<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
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
 <!-- Konten -->
 <div class="flex justify-center">
    <div class="ml-1/4 p-2">
        <h1 class="flex justify-center text-2xl font-bold mb-5">Detail Pesanan</h1>
        <!-- Tabel Data Detail Pesanan -->
        <table class="ml-40">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="py-2 px-4">Nama Pemesan</th>
                    <th class="py-2 px-4">Dinda</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">ID Pesanan</td>
                    <td class="py-2 px-4">12345</td>
                </tr>
                <thead>
                <tr class="bg-yellow-400">
                    <th class="py-2 px-4">Pengiriman</th>
                    <th class="py-2 px-4">Meja 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">Metode Pembayaran</td>
                    <td class="py-2 px-4">Transfer Bank</td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Bukti Pembayaran</td>
                    <td class="py-2 px-4"><button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Lihat</button></td>
                </tr>
                <table class="ml-40">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="py-2 px-4">No</th>
                    <th class="py-2 px-4">Gambar Menu</th>
                    <th class="py-2 px-4">Nama Menu</th>
                    <th class="py-2 px-4">Kategori</th>
                    <th class="py-2 px-4">Harga</th>
                    <th class="py-2 px-4">Jumlah Item</th>
                    <th class="py-2 px-4">Catatan Pembeli</th>
                    <th class="py-2 px-4">Total Harga</th>
                </tr>
            </thead>
            <tbody>
            </tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4"><img src="" alt=""></td>
                    <td class="py-2 px-4">Soto Ayam</td>
                    <td class="py-2 px-4">makanan</td>
                    <td class="py-2 px-4">Rp 150.000</td>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Pedas</td>
                    <td class="py-2 px-4">Rp 150.000</td>
                </tr>
                <!-- Data Detail Pesanan lainnya -->
            </tbody>
        </table>
    </div>
</body>
</html>
