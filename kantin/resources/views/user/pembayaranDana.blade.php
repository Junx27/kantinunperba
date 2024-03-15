<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intruksi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Intruksi Pembayaran</h1>
        
        <div class="mb-6">
            <p class="text-gray-800">Silakan lakukan pembayaran sesuai instruksi di bawah ini:</p>
            <ul class="list-disc pl-6 mt-2">
                <li>Nama Dana: Kantinunperba</li>
                <li>Nomor Dana: 081229044579</li>
                <li>Jumlah Pembayaran: Rp.40.000</li>
                <!-- Ganti informasi pembayaran sesuai dengan kebutuhan -->
            </ul>
        </div>

        <div class="mb-6">
            <p class="text-gray-800">Setelah melakukan pembayaran, silakan unggah bukti pembayaran di bawah ini:</p>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="mt-4">
                <input type="file" name="bukti_pembayaran" accept="image/*" required>
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md mt-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Unggah</button>
            </form>
        </div>

        <!-- Tombol Konfirmasi Pembayaran -->
        <div class="flex justify-center">
        <button class="bg-orange-400 p-2 rounded-lg mt-4">Konfirmasi Pembayaran</button>
    </div>
    </div>
</body>
</html>
