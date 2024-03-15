<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran tunai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Pemberitahuan</h1>
        <div class="text-gray-700 mb-4">
            <p>Terima kasih telah melakukan pembelian di kantin kami. Berikut adalah detail invoice pembayaran:</p>
        </div>
        <div class="border-t border-b border-gray-300 py-2 mb-4">
            <div class="flex justify-between">
                <span class="text-gray-700">ID Pemesanan:</span>
                <span class="font-bold">INV123456</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700">Total Pembayaran:</span>
                <span class="font-bold">Rp 500.000</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700">Metode Pembayaran:</span>
                <span class="font-bold">Tunai</span>
            </div>
            <!-- Tambahkan detail invoice lainnya sesuai kebutuhan -->
        </div>
        <div class="text-gray-700 mb-4">
            <p>Silakan lakukan pembayaran sesuai dengan instruksi berikut:</p>
        </div>
        <div class="bg-gray-200 p-4 rounded-lg mb-4">
            <p class="font-bold">Instruksi Pembayaran:</p>
            <ol class="list-decimal pl-4">
                <li>Lakukan pembayaran pesanan secara langsung di Kantin</li>
                <li>Jumlah pembayaran harus sesuai dengan total yang tertera pada invoice</li>
                <!-- Tambahkan instruksi pembayaran lainnya jika diperlukan -->
            </ol>
        </div>
        <div class="text-center">
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Selesai</button>
        </div>
    </div>
</body>
</html>
