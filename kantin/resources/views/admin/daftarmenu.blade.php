@extends("layouts.sidebaradmin")

@section("container")
<div class="z-30 text-xs sticky top-0 w-full bg-white p-4 rounded-lg overflow-auto">
    <h1 class="mx-auto w-64 p-2 text-center">Daftar Menu</h1>
    @if (session('berhasil'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('berhasil') }}</span>
            </div>
            @endif
    <a href="/admin/daftarmenu/create">tambah menu</a>
</div>
<div class="text-xs mt-2 w-full bg-white p-5 rounded-lg">
    <div class="grid grid-cols-3 gap-4">
        @foreach ($menus as $menu)
        <div class="relative bg-white rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $menu->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
            <div class="z-0 top-64 left-2 absolute bg-black w-[305px] rounded-lg h-[120px] opacity-40"></div>
            <div class="absolute top-64 left-2 z-10 p-4">
                <h2 class="font-semibold text-xl text-white">{{ $menu->nama_menu}}</h2>
                <!-- Memformat harga menjadi format rupiah -->
                <p class="text-white">Harga: Rp {{ number_format($menu["harga"], 0, ',', '.') }}</p>
                <p class="text-white">Stok: {{$menu->stock}}</p>
                <button class="transition-all duration-500 w-16 mt-2 bg-emerald-500 hover:bg-black text-white p-1 rounded">Edit</button>
                <button class="transition-all duration-500 w-16 mt-2 bg-cyan-700 hover:bg-black text-white p-1 rounded">View</button>
                <form action="/admin/daftarmenu/{{ $menu->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelanggan ini?')">
                    @method('delete')
                    @csrf
                    <button type="submit" class="bg-orange-500 p-1 rounded px-5 text-white">Hapus</button>
                </form>            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Daftar Menu Admin";
@endphp