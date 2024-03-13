<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Data Pelanggan</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-2 text-xl">
    Data Pelanggan
  </div>
  <body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-1/6 bg-gray-400">
        <ul>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/profiladmin"><span class="material-symbols-outlined">
            person</span>Profil Admin</a></button>
            <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/dasboard"><span class="material-symbols-outlined">
            home</span>Dasboard</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/daftarmenu"><span class="material-symbols-outlined">
            book</span>Daftar Menu</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/pesananmasuk"><span class="material-symbols-outlined">
            notifications_unread</span>Pesanan Masuk</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/historypenjualan"><span class="material-symbols-outlined">
            manage_history</span>History Penjualan</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/datapelanggan"><span class="material-symbols-outlined">
            groups</span>Data Pelanggan</a></button>
            <li class="mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/admin/landingpage"><span class="material-symbols-outlined">
            logout</span>Log Out</a></button>
            </ul>
        </div>
    <!-- Konten -->
    <div class="ml-1/5 p-8">
        <!-- Pencarian -->
        <div class="mb-4">
            <input type="text" id="searchInput" class="border border-gray-300 rounded-md py-2 px-3 w-full" placeholder="Cari...">
        </div>
        <!-- Tabel Data Anggota -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-yellow-400 text-white">
                    <tr>
                        <th class="px-4 py-2">Nomor</th>
                        <th class="px-4 py-2">Nama Pelanggan</th>
                        <th class="px-4 py-2">Jenis Kelamin</th>
                        <th class="px-4 py-2">No Telepon</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Foto Profil</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Data Anggota -->
                    <tr>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Dinda Ayu</td>
                        <td class="px-4 py-2">Perempuan</td>
                        <td class="px-4 py-2">08123456789</td>
                        <td class="px-4 py-2">dindaayu@gmail.com</td>
                        <td class="px-4 py-2">
                            <img src="path_to_profile_image" alt="Profil" class="w-10 h-10 rounded-full">
                        </td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Edit</button>
                            <button class="bg-red-500 text-white py-1 px-2 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <!-- Data Anggota lainnya dapat ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>