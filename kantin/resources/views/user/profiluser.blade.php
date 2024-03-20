@extends("layouts.sidebar")

@section("container")

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
    @endsection

    @php
    $judul = "Profil User";
    @endphp