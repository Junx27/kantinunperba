@extends("layouts.sidebar")

@section("container")
<div class="w-full bg-white p-5 rounded-lg">
    <div class="grid grid-cols-4 gap-4">
        <a href="{{ $url_daftarmenu }}" class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-cyan-700 rounded-lg p-5 cursor-pointer">
            <p class="text-white font-bold text-center">Daftar Menu</p>
            <p class="text-white font-black text-center mt-7 text-7xl">{{ $panjang_menu }}</p>
        </a>
        <a href="{{ $url_pesananmasuk }}" class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-emerald-500 rounded-lg  cursor-pointer p-5">
            <p class="text-white font-bold text-center">Pesanan saya</p>
            <p class="text-white font-black text-center mt-7 text-7xl">{{ $panjang_pesanan }}</p>
        </a>
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-lime-400 rounded-lg p-5 cursor-pointer">
            <p class="text-white font-bold text-center">History Pembelian</p>
            <p class="text-white font-black text-center mt-7 text-7xl">12</p>
        </div>
        <div class="transition-all duration-500 shadow hover:scale-[101%] w-full h-[200px] bg-orange-400 rounded-lg cursor-pointer p-5">
            <p class="text-white font-bold text-center">Keranjang</p>
            <p class="text-white font-black text-center mt-7 text-7xl">{{ $panjang_konsumen }}</p>
        </div>
    </div>
</div>
<div>
    <img src="https://assets-global.website-files.com/5d2dff2ab78ea8fc72873c7b/5de01a1633132eaa5fe5c85f_Doris-Fresh-Food2.jpg" alt="" class="w-full h-[520px] object-cover">
</div>
@endsection
@php
$judul = "Dasboard User";
@endphp