<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Penjualan</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-200 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
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
 <!-- Konten -->
 <div class="flex justify-center">
    <div class="ml-1/4 p-2">
        <h1 class="flex justify-center text-2xl font-bold mb-10">History Penjualan Admin</h1>
        <!-- Tabel Data History Penjualan -->
        <table class="ml-56">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Nama Pembeli</th>
                    <th class="py-2 px-4">ID Pesanan</th>
                    <th class="py-2 px-4">Total Harga</th>
                    <th class="py-2 px-4">Tanggal Transaksi</th>
                    <th class="py-2 px-4">Metode Pembayaran</th>
                    <th class="py-2 px-4">Detail</th>
                    <th class="py-2 px-4">Status Pengiriman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Dinda</td>
                    <td class="py-2 px-4">12345</td>
                    <td class="py-2 px-4">Rp 150.000</td>
                    <td class="py-2 px-4">2024-02-07</td>
                    <td class="py-2 px-4">Transfer Bank</td>
                    <td class="py-2 px-4"><a href="#">Detail</a></td>
                    <td class="py-2 px-4">Dikirim</td>
                </tr>
                <!-- Data History Penjualan lainnya -->
            </tbody>
        </table>
    </div>
</body>
</html>
