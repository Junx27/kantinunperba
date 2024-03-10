<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="flex justify-center text-3xl font-bold mb-8">Kritik dan Saran</h1>
        <!-- Formulir Kritik dan Saran -->
        <form action="#" method="POST" class="max-w-lg mx-auto">
            <div class="mb-4">
                <label for="nama" class="block mb-1">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-400 px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-1">Email:</label>
                <input type="email" id="email" name="email" class="border border-gray-400 px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="pesan" class="block mb-1">Kritik dan Saran:</label>
                <textarea id="pesan" name="pesan" class="border border-gray-400 px-4 py-2 w-full h-32"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
