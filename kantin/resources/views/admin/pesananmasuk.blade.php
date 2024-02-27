<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Masuk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-200 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
        <div class="p-4">
            <ul>
                <li class="flex flex-row items-center mb-2"><a href="#" class="block"><span class="material-symbols-outlined">
                    person
                </span><p>Profil Admin</p></a></li>
                <li class="mb-2"><a href="#" class="block">Data Menu</a></li>
                <li class="mb-2"><a href="#" class="block">Pesanan Saya</a></li>
                <li class="mb-2"><a href="#" class="block">History Pembelian</a></li>
                <li class="mb-2"><a href="#" class="block">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Konten -->
    <div class="flex justify-center">
    <div class="ml-1/4 p-2">
        <h1 class="flex justify-center text-2xl font-bold mb-10">Pesanan Masuk</h1>
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
                    <th class="py-2 px-4">Ket</th>
                    <th class="py-2 px-4">Bukti Pembayaran</th>
                    <th class="py-2 px-4">Aksi</th>
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
                    <td class="py-2 px-4">Sudah Bayar</td>
                    <td class="py-2 px-4"><a href="#">Lihat Detail</a></td>
                    <td class="py-2 px-4">Konfirmasi</td>
                </tr>
                <!-- Data History Penjualan lainnya -->
            </tbody>
        </table>
    </div>
</body>
</html>
