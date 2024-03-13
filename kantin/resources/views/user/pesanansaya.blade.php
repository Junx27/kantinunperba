<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Pesanan Saya</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-2 text-xl">
    Pesanan Saya
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
    <!-- Konten -->
    <div class="ml-1/5 p-8">
        <!-- Pencarian -->
        <div class="mb-4">
            <input type="text" id="searchInput" class="border border-gray-300 rounded-md py-2 px-3 w-full" placeholder="Cari...">
        </div>
        <!-- Tabel Data Pesanan -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-yellow-400 text-white">
                    <tr>
                        <th class="px-4 py-2">No.</th>
                        <th class="px-4 py-2">ID Pesanan</th>
                        <th class="px-4 py-2">Waktu Pemesanan</th>
                        <th class="px-4 py-2">Nama Menu</th>
                        <th class="px-4 py-2">Harga Menu</th>
                        <th class="px-4 py-2">Total Harga</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Detail</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Data Pesanan -->
                    <tr>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">------</td>
                        <td class="px-4 py-2">13/03/2024</td>
                        <td class="px-4 py-2">------</td>
                        <td class="px-4 py-2">------</td>
                        <td class="px-4 py-2">------</td>
                        <td class="px-4 py-2">Dikirim</td>
                        <td class="px-4 py-2">
                            <img src="path_to_profile_image" alt="Profil" class="w-10 h-10 rounded-full">
                        </td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Lihat Detail</button>
                        </td>
                    </tr>
                    <!-- Data Pesanan lainnya dapat ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>