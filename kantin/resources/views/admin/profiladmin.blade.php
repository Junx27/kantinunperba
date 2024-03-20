@extends("layouts.sidebaradmin")

@section("container")

<!-- Konten -->

<body class="bg-gray-100">
    <div class="container mx-auto py-2">
        <div class="max-w-md mx-auto bg-yellow-300 rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <h1 class="flex justify-center text-xl font-semibold text-gray-800 mb-4">Profil Admin</h1>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama Kantin:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">Kantinunperba</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama Rekening:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">kantinunperba</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama Bank:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">BRI</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">No.Rekening:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">1122333444</p>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-600">No.Hp:</label>
                    <p class="text-lg font-medium text-gray-800" id="nama">08112223334</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
                    <p class="text-lg font-medium text-gray-800" id="email">admin@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

    @php
    $judul = "Profil Admin";
    @endphp