@extends("layouts.sidebaradmin")

@section("container")
    @if (session('berhasil'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('berhasil') }}</span>
        </div>
     @endif
<div class="text-xs w-full bg-white rounded-t-lg">
    <div class="flex justify-between items-center z-30 text-center sticky top-0 bg-white p-5 rounded-t-lg">
        <a href="/admin/daftarmenu/create" class="flex text-xs items-center hover:text-emerald-500 p-1 w-32"><img src="{{ asset('images/icons/square-plus.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">tambah menu</a>
        <h1 class="bg-emerald-500 p-1 px-2 text-white rounded">Menu Makanan</h1>
    </div>
    <div class="px-5 pb-5 grid grid-cols-3 gap-4">
        @foreach ($makanans as $makanan)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $makanan->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 top-56 left-2 absolute bg-black w-[305px] rounded-lg h-[150px] opacity-40"></div>
            <div class="absolute text-white top-56 left-2 z-10 p-4">
                <h2 class="font-semibold text-xl">{{ $makanan->nama_menu}}</h2>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">Rp {{ number_format($makanan->harga, 0, ',', '.') }}</p>
                <p class="flex items-center mt-2"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">{{ $makanan->stock}}</p>
                <div class="mt-1 flex flex-row items-center">
                    <a href="/admin/daftarmenu/{{ $makanan->id }}/edit" class="transition-all duration-500 w-16 bg-emerald-500 hover:bg-black text-white p-1 rounded mr-2 text-center">Edit</a>
                    <a  href="/admin/daftarmenu/{{ $makanan->id }}" class="transition-all duration-500 w-16 bg-cyan-700 hover:bg-black text-white p-1 rounded mr-2 text-center">View</a>
                    <form action="/admin/daftarmenu/{{ $makanan->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelanggan ini?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-orange-500 p-1 rounded px-5 text-white">Hapus</button>
                    </form>            
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="text-xs w-full bg-white rounded-lg">
    <div class="flex justify-between items-center z-30 text-center sticky top-0 bg-white p-5">
        <a href="/admin/daftarmenu/create" class="flex text-xs items-center hover:text-emerald-500 p-1 w-32"><img src="{{ asset('images/icons/square-plus.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">tambah menu</a>
        <h1 class="bg-orange-500 p-1 px-2 text-white rounded">Menu Minuman</h1>
    </div>
    <div class="px-5 pb-5 grid grid-cols-3 gap-4">
        @foreach ($minumans as $minuman)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $minuman->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 top-56 left-2 absolute bg-black w-[305px] rounded-lg h-[150px] opacity-40"></div>
            <div class="absolute top-56 text-white left-2 z-10 p-4">
                <h2 class="font-semibold text-xl">{{ $minuman->nama_menu}}</h2>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">Rp {{ number_format($minuman->harga, 0, ',', '.') }}</p>
                <p class="flex items-center mt-2"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-2">{{ $minuman->stock}}</p>
                <div class="mt-1 flex flex-row items-center">
                    <a href="/admin/daftarmenu/{{ $minuman->id }}/edit" class="transition-all duration-500 w-16 bg-emerald-500 hover:bg-black text-white p-1 rounded mr-2 text-center">Edit</a>
                    <a  href="/admin/daftarmenu/{{ $minuman->id }}" class="transition-all duration-500 w-16 bg-cyan-700 hover:bg-black text-white p-1 rounded mr-2 text-center">View</a>
                    <form action="/admin/daftarmenu/{{ $minuman->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelanggan ini?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-orange-500 p-1 rounded px-5 text-white">Hapus</button>
                    </form>            
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Daftar Menu Admin";
@endphp
