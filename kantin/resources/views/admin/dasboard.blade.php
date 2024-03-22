@extends("layouts.sidebaradmin")

@section("container")
<div class="w-full h-screen bg-white p-10 rounded-lg">
    <div class="grid grid-cols-4 gap-4">
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-cyan-700 rounded-lg p-5 cursor-pointer">
            <p class="text-white font-bold text-center">Daftar Menu</p>
            <p class="text-white font-black text-center mt-7 text-7xl">8</p>
        </div>
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-emerald-500 rounded-lg  cursor-pointer p-5">
            <p class="text-white font-bold text-center">Pesanan Masuk</p>
            <p class="text-white font-black text-center mt-7 text-7xl">25</p>
        </div>
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-lime-400 rounded-lg p-5 cursor-pointer">
            <p class="text-white font-bold text-center">History Penjualan</p>
            <p class="text-white font-black text-center mt-7 text-7xl">12</p>
        </div>
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-orange-400 rounded-lg cursor-pointer p-5">
            <p class="text-white font-bold text-center">Data Pelanggan</p>
            <p class="text-white font-black text-center mt-7 text-7xl">45</p>
        </div>
    </div>
</div>
@endsection

@php
$judul = "Dasboard";
@endphp