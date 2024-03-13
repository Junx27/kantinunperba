<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    @vite('resources/css/app.css')
    <title>Intruksi Pembayaran</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-2 text-xl"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <span class="material-symbols-outlined">
payments
</span>Intruksi Pembayaran
  </div>
        <!-- Informasi Pembayaran -->
        <div class="flex justify-center mb-8 py-10">
            <p>Silahkan melakukan pembayaran melalui nomor rekening dibawah ini!</p>
            <p>Bank BRI: 0200050000.</p>
        </div>
        <!-- Instruksi Pembayaran -->
        <div class="flex justify-center mb-8">
            <p>Setelah melakukan pembayaran, silahkan mengunggah bukti pembayaran.</p>
        </div>
        <!-- Tombol Upload Bukti Pembayaran -->
        <div class="flex justify-center">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-md mb-4">Unggah Bukti Pembayaran</button>
        </div>
        <!-- Tombol Konfirmasi Pembayaran -->
        <div class="flex justify-center">
        <button class="bg-orange-400 p-2 rounded-lg mt-4">Konfirmasi Pembayaran</button>
    </div>
</body>
</html>
