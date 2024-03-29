@extends("layouts.sidebar")

@section("container")
    @if (session('berhasil'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('berhasil') }}</span>
        </div>
     @endif
<div class="text-xs w-full bg-white rounded-t-lg">
    <div class="flex justify-between items-center z-30 text-center sticky top-0 bg-white p-5 rounded-t-lg">
        <a href="/admin/daftarmenu/create" class="flex text-xs items-center hover:bg-emerald-500 p-1 w-32 rounded"><img src="{{ asset('images/icons/square-plus.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">tambah menu</a>
        <h1 class="bg-emerald-500 p-1 px-2 text-white rounded">Menu Makanan</h1>
    </div>
    <div class="px-5 pb-5 grid grid-cols-3 gap-4">
        @foreach ($makanans as $makanan)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $makanan->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 bottom-0 left-0 absolute bg-black w-full rounded-lg h-[150px] opacity-40"></div>
            <div class="absolute text-white top-56 left-2 z-10 p-4">
                <h2 class="font-semibold text-xl">{{ $makanan->nama_menu}}</h2>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">Rp {{ number_format($makanan->harga, 2, ',', '.') }}</p>
                <p class="flex items-center mt-2"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">{{ $makanan->stock}}</p>
                <div class="ml-56">
                    <a href="/user/keranjang/{{$makanan->id}}" class="mt-1 flex flex-row justify-center items-center bg-orange-500 hover:bg-orange-400 p-2 rounded">
                        <img src="{{ asset('images/icons/shopping-cart-add.png') }}" alt="Ikon" class="w-4 mx-2">
                        <p>Add +</p>        
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="text-xs w-full bg-white rounded-lg">
    <div class="flex justify-between items-center z-30 text-center sticky top-0 bg-white p-5">
        <a href="/admin/daftarmenu/create" class="flex text-xs items-center hover:bg-emerald-500 p-1 w-32 rounded"><img src="{{ asset('images/icons/square-plus.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">tambah menu</a>
        <h1 class="bg-orange-500 p-1 px-2 text-white rounded">Menu Minuman</h1>
    </div>
    <div class="px-5 pb-5 grid grid-cols-3 gap-4">
        @foreach ($minumans as $minuman)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $minuman->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 bottom-0 left-0 absolute bg-black w-full rounded-lg h-[150px] opacity-40"></div>
            <div class="absolute top-56 text-white left-2 z-10 p-4">
                <h2 class="font-semibold text-xl">{{ $minuman->nama_menu}}</h2>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">Rp {{ number_format($minuman->harga, 2, ',', '.') }}</p>
                <p class="flex items-center mt-2"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">{{ $minuman->stock}}</p>
                <div class="ml-56">
                    <a href="/user/keranjang/{{$minuman->id}}" class="mt-1 flex flex-row justify-center items-center bg-orange-500 hover:bg-orange-400 p-2 rounded">
                        <img src="{{ asset('images/icons/shopping-cart-add.png') }}" alt="Ikon" class="w-4 mx-2">
                        <p>Add +</p>        
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Daftar Menu user";
@endphp
