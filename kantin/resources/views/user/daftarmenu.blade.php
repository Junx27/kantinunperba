@extends("layouts.sidebar")

@section("container")
<div class="z-30 text-xs sticky top-0 w-full bg-white p-4 rounded-lg overflow-auto">
    <h1 class="mx-auto w-64 p-2 text-center">Daftar Menu</h1>
</div>
<div class="text-xs mt-2 w-full bg-white p-5 rounded-lg">
    <div class="grid grid-cols-3 gap-4">
        @foreach ($menus as $menu)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $menu->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 top-64 left-2 absolute bg-black w-[305px] rounded-lg h-[120px] opacity-40"></div>
            <div class="absolute top-64 left-2 z-10 p-4">
                <h2 class="font-semibold text-xl text-white">{{$menu["nama"]}}</h2>
                <!-- Memformat harga menjadi format rupiah -->
                <p class="text-white">Harga: Rp {{ number_format($menu["harga"], 0, ',', '.') }}</p>
                <p class="text-white">Stok: {{$menu["stok"]}}</p>
                <button class="transition-all duration-500 w-16 mt-2 bg-emerald-500 hover:bg-black text-white p-1 rounded">Pesan</button>
                <button class="transition-all duration-500 w-16 mt-2 bg-cyan-700 hover:bg-black text-white p-1 rounded">View</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Daftar Menu User";
@endphp