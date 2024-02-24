<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>keranjang</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-5 text-xl">
        Keranjang
    </div>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-1/6 bg-gray-200">
            <ul>
                <li class="px-4 mb-2"><a href="#" class="block">Profil</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Daftar Menu</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Keranjang</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">History Pembelian</a></li>
                <li class="px-4 mb-2"><a href="#" class="block">Logout</a></li>
            </ul>
        </div>
        <!-- Cart -->
        <div class="flex-1 p-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Daftar Pesanan</h2>
            </div>
            <!-- Product 1 -->
            <div class="flex items-center mb-20">
                <img src="product1.jpg" alt="Product 1" class="w-16 h-16 object-cover rounded-lg mr-4">
                <div>
                    <h3 class="font-semibold">Nama menu</h3>
                    <p class="text-gray-500">harga: Rp.10</p>
                </div>
                <div class="ml-auto flex items-center">
                    <button class="bg-yellow-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        -
                    </button>
                    <input type="text" class="w-12 text-center bg-gray-100" value="1">
                    <button class="bg-yellow-400 hover:bg-grey-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        +
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 ml-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Add more product items here -->
            <div class="flex justify-between mt-8">
                <p class="font-semibold">Total harga: Rp.10.0000</p>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                    Pesan Sekarang
                </button>
            </div>
        </div>
            </div>
        </div>
    </div>
</body>
</html>