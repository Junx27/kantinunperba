<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Daftar Menu</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-2 text-xl">
        Daftar Menu
  </div>
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
            book</span>Daftar Menu</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/keranjang"><span class="material-symbols-outlined">
            shopping_cart_checkout</span>keranjang</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/historypembelian"><span class="material-symbols-outlined">
            manage_history</span>History Pembelian</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/landingpage"><span class="material-symbols-outlined">
            logout</span>Log out</a></button>
            </ul>
        </div>
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <!-- Pencarian -->
        <div class="mb-4">
            <input type="text" id="searchInput" class="border border-gray-300 rounded-md py-2 px-3 w-full" placeholder="Cari...">
        </div>
        <!-- Product List -->
        <div class="flex-1 p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://th.bing.com/th/id/OIP.3140EtMQYk4Pyb5-gyLeLwHaHa?w=1200&h=1200&rs=1&pid=ImgDetMain" alt="Product 1" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 1</h2>
                        <p class="text-gray-500">Rp.10.000</p>
                        <p class="text-gray-500">Stock: 50</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://th.bing.com/th/id/R.c53d6a303a9f174ffe2a02222e1f4f84?rik=UCRBJ9%2bvPp6mbA&riu=http%3a%2f%2fwww.meeteat.org%2fwp-content%2fuploads%2f2021%2f08%2fsate-taichan-6.jpg&ehk=arWjf%2fcYgkff1lpdHyOfzmSFWQSKC%2fv2XMVuYpF7vMc%3d&risl=&pid=ImgRaw&r=0" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 2</h2>
                        <p class="text-gray-500">Rp. 15.000</p>
                        <p class="text-gray-500">Stock: 30</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://cdn-brilio-net.akamaized.net/news/2019/10/01/171511/1104781-1000xauto-resep-soto-ayam-santan.jpg" alt="Product 3" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 3</h2>
                        <p class="text-gray-500">Rp 20.000</p>
                        <p class="text-gray-500">Stock: 20</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://pktvkaltim.com/wp-content/uploads/2016/06/Manfaat-Jus-Alpukat-768x510.jpg" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 2</h2>
                        <p class="text-gray-500">Rp. 15.000</p>
                        <p class="text-gray-500">Stock: 30</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://pktvkaltim.com/wp-content/uploads/2016/06/Manfaat-Jus-Alpukat-768x510.jpg" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 2</h2>
                        <p class="text-gray-500">Rp. 15.000</p>
                        <p class="text-gray-500">Stock: 30</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://pktvkaltim.com/wp-content/uploads/2016/06/Manfaat-Jus-Alpukat-768x510.jpg" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">Menu 2</h2>
                        <p class="text-gray-500">Rp. 15.000</p>
                        <p class="text-gray-500">Stock: 30</p>
                        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
                        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
                    </div>
                </div>
                <!-- Add more product cards here -->
            </div>
        </div>
    </div>
</body>
</html>
   