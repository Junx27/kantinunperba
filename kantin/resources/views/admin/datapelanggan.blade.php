@php
$konsumens = [
['nama' => 'Dinda Ayu Sekar Melati', 'jenis' => 'perempuan', 'telepone' => '0978677575', 'email' => 'dinda@gmail.com', 'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpG_i4M73KdyafyCmfU1NLRW-qaSVXdpzzQ&usqp=CAU'],
['nama' => 'Dinda Ayu Sekar Melati', 'jenis' => 'perempuan', 'telepone' => '0978677575', 'email' => 'dinda@gmail.com', 'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpG_i4M73KdyafyCmfU1NLRW-qaSVXdpzzQ&usqp=CAU'],
['nama' => 'Dinda Ayu Sekar Melati', 'jenis' => 'perempuan', 'telepone' => '0978677575', 'email' => 'dinda@gmail.com', 'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpG_i4M73KdyafyCmfU1NLRW-qaSVXdpzzQ&usqp=CAU'],
['nama' => 'Dinda Ayu Sekar Melati', 'jenis' => 'perempuan', 'telepone' => '0978677575', 'email' => 'dinda@gmail.com', 'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpG_i4M73KdyafyCmfU1NLRW-qaSVXdpzzQ&usqp=CAU'],
['nama' => 'Dinda Ayu Sekar Melati', 'jenis' => 'perempuan', 'telepone' => '0978677575', 'email' => 'dinda@gmail.com', 'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpG_i4M73KdyafyCmfU1NLRW-qaSVXdpzzQ&usqp=CAU'],
];
@endphp

@extends("layouts.sidebaradmin")

@section("container")
<div class="w-full h-screen bg-white p-10 rounded-lg">
    <div>
        <input type="text" class="w-64 text-xs border p-2 rounded-lg outline-cyan-700" placeholder="cari konsumen">
        <button class="text-xs w-16 text-white bg-cyan-700 p-2 rounded-lg">cari</button>
    </div>

    <div class="mt-10 grid grid-cols-5 gap-5">
        @foreach ($konsumens as $konsumen)
        <div class="transition-all duration-500 text-xs border rounded-lg text-center p-5 shadow hover:shadow-md hover:shadow-lime-400 cursor-pointer">
            <img src="{{ $konsumen['foto']}}" alt="" class="w-20 rounded-full mx-auto">
            <h1 class="text-sm mt-5 text-cyan-700 capitalize">{{ $konsumen['nama']}}</h1>
            <h1 class="mt-2 text-gray-400">{{ $konsumen['email']}}</h1>
            <div class="flex">
                <button class="w-32 mt-5 font-semibold bg-lime-400 text-cyan-700 p-2 rounded-lg mr-3">Edit</button>
                <button class="w-32 mt-5 font-semibold bg-red-500 p-2 text-white rounded-lg">Hapus</button>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Data Pelanggan";
@endphp