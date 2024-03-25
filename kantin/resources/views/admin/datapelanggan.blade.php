@extends("layouts.sidebaradmin")

@section("container")
<div class="w-full bg-white p-10 rounded-lg">
    <div>
        <input type="text" class="w-64 text-xs border p-2 rounded-lg outline-cyan-700" placeholder="cari konsumen">
        <button class="text-xs w-16 text-white bg-cyan-700 p-2 rounded-lg">cari</button>
    </div>

    <div class="mt-10 grid grid-cols-4 gap-5">
        @foreach ($konsumens as $konsumen)
        <div class="relative bg-cyan-700 transition-all duration-500 text-xs rounded-lg text-center shadow hover:shadow-lg hover:shadow-cyan-700 cursor-pointer">
            <img src="{{ $konsumen['foto']}}" alt="" class="relative z-10 mt-10 w-24 h-24 border border-8 border-cyan-700 object-cover rounded-full mx-auto">
            <span class="absolute z-10 top-[96px] shadow-photoShadow1 left-[54px] w-5 h-5 rounded-tr-full bg-transparent"></span>
            <span class="absolute z-10 top-[96px] shadow-photoShadow2 left-[153px] w-5 h-5 rounded-tl-full bg-transparent"></span>
            <div class="z-0 bg-white p-5 -mt-10 rounded-b-lg w-full h-[200px]">
                <div class="pt-2 text-start">
                    <h1 class="font-bold text-sm mt-5 capitalize">{{ $konsumen->nama_pembeli}}</h1>
                    <h1 class="mt-3 text-[10px]">{{ $konsumen->email}}</h1>
                    <h1 class="mt-1 text-[10px]">{{ $konsumen->tlp}}</h1>
                    <h1 class="mt-1 text-[10px]">{{ $konsumen->alamat}}</h1>
                    <div class="mt-2 text-xs">
                        <button class="bg-emerald-500 p-1 rounded px-5 text-white">Edit</button>
                        <button class="bg-orange-500 p-1 rounded px-5 text-white">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Data Pelanggan";
@endphp