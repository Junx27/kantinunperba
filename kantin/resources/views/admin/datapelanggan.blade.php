@extends("layouts.sidebaradmin")

@section("container")
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
@endsection

@php
$judul = "Data Pelanggan";
@endphp