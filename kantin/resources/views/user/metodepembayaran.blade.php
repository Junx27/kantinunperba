<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Metode Pembayaran</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl flex justify-center font-bold mb-8">Pilih Metode Pembayaran</h1>
        <div class="grid grid-cols-1 gap-4">
            <!-- Tombol Pilihan Pembayaran Lewat Dana -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4"><li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/pembayaranDana"><span class="material-symbols-outlined">
            account_balance_wallet
            </span>Pembayaran Lewat DANA</a></button>
            <!-- Tombol Pilihan Pembayaran Lewat Transfer Bank -->
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4"><li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/pembayaranBank"><span class="material-symbols-outlined">
            credit_card</span>Pembayaran Lewat Bank</a></button>
            <!-- Tombol Pilihan Pembayaran Bayar Tunai -->
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4"><span class="material-symbols-outlined">
            payments</span>Pembayaran Bayar Tunai</button>
            <!-- Tombol Konfirmasi Pembayaran -->
            </a></li><a href="http://127.0.0.1:8000/user/intruksipembayaran"><button class="bg-yellow-500 text-white py-4 px-8 rounded-md">Konfirmasi</button>
        </div>
    </div>
</body>
</html>
