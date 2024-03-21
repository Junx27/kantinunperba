@extends("layouts.sidebar")

@section("container")
<div class="grid grid-cols-4 gap-4">
    @foreach ($menus as $menu)
    <div class="bg-white rounded-lg shadow-md">
        <img src="{{$menu["gambar"]}}" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
        <h2 class="font-semibold text-lg">{{$menu["nama"]}}</h2>
        <!-- Memformat harga menjadi format rupiah -->
        <p class="text-gray-500">Harga: Rp {{ number_format($menu["harga"], 0, ',', '.') }}</p>
        <p class="text-gray-500">Stok: {{$menu["stok"]}}</p>
        <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Pesan Sekarang</button>
        <button class="mt-2 bg-purple-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Deskripsi</button>
        </div>
    </div>
    @endforeach
</div>

@endsection

@php
    $judul = "Daftar Menu";
@endphp
