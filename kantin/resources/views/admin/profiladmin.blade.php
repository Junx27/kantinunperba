<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-400 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
        <div class="p-4">
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
    </div>

    <!-- Konten -->
    <div class="flex justify-center ml-1/5 p-8">
        <!-- Data Admin -->
        <div class="flex">
            <!-- Gambar Profil Admin -->
            <div class="mr-8">
                <img src="data:image/jpeg;base64,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" alt="Profil Admin" class="h-40 w-40 rounded-full mb-4">
                <button class="bg-yellow-400 text-white px-8 py-2 rounded-md">Edit Gambar</button>
            </div>
            <!-- Data Rekening Admin -->
            <div class="flex flex-col">
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-2">Data Rekening Admin</h2>
                    <p>Nomor Rekening: 0123456789</p>
                </div>
                <!-- Tombol Edit Rekening -->
                <button class="bg-yellow-400 text-white px-4 py-2 rounded-md self-start">Edit Rekening</button>
                <!-- Data Email dan Nomor Telepon Admin -->
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-2">Data Kontak Admin</h2>
                    <p>Email: admin@example.com</p>
                    <p>Nomor Telepon: 08123456789</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
