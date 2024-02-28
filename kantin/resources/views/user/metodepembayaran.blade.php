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
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4">Pembayaran Lewat Dana</button>
            <!-- Tombol Pilihan Pembayaran Lewat Transfer Bank -->
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4">Pembayaran Lewat Transfer Bank</button>
            <!-- Tombol Pilihan Pembayaran Bayar Tunai -->
            <button class="bg-gray-300 hover:bg-blue-300 text-gray-700 py-4 px-8 rounded-md mb-4">Pembayaran Bayar Tunai</button>
            <!-- Tombol Konfirmasi Pembayaran -->
            <button class="bg-yellow-500 text-white py-4 px-8 rounded-md">Konfirmasi</button>
        </div>
    </div>
</body>
</html>
