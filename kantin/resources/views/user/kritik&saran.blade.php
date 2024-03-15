<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran Konsumen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Kritik dan Saran Konsumen</h1>
        <form action="submit.php" method="post" class="space-y-4">
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="kritik" class="block text-sm font-medium text-gray-700">Kritik</label>
                <textarea name="kritik" id="kritik" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
            </div>
            <div>
                <label for="saran" class="block text-sm font-medium text-gray-700">Saran</label>
                <textarea name="saran" id="saran" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
