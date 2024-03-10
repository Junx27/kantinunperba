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
        <div class="w-1/6 bg-gray-400">
        <ul>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /><li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/profiluser"><span class="material-symbols-outlined">
            person</span>Profil User</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/dasboard"><span class="material-symbols-outlined">
            home</span>Dasboard</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/daftarmenu"><span class="material-symbols-outlined">
            book
            </span>Daftar Menu</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/keranjang"><span class="material-symbols-outlined">
            shopping_cart_checkout
            </span>keranjang</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/historypembelian"><span class="material-symbols-outlined">
            manage_history
            </span>History Pembelian</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/landingpage"><span class="material-symbols-outlined">
            logout
            </span>Log out</a></button>
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
                    <button class="bg-yellow-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        +
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 ml-4 rounded">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
                    <span class="material-symbols-outlined">delete</span>
                    </button>
                </div>
            </div>
            <!-- Add more product items here -->
            <div class="flex justify-between mt-8 ml-10">
                <p class="font-semibold">Total harga: Rp.10.0000</p>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded"></a></li><a href="http://127.0.0.1:8000/user/metodepembayaran">Pesan Sekarang</a></button>
            </div>
        </div>
            </div>
        </div>
    </div>
</body>
</html>