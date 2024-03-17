<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-400 text-gray-700 h-screen w-1/6 fixed left-0 top-0">
        <div class="p-4">
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
    </div>

    <!-- Konten -->
    <body class="bg-gray-100">
        <div class="container mx-auto py-2">
        <div class="max-w-md mx-auto bg-yellow-300 rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <h1 class="flex justify-center text-xl font-semibold text-gray-800 mb-4">Profil User</h1>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">Dinda</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">ID Pengguna:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">002233</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Jenis Kelamin:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">Perempuan</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">No.HP:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">08122334455</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Email:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">dindaayu@gmail.com</p>
                </div>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600"><a href="http://127.0.0.1:8000/user/editprofil">Edit Profil</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>