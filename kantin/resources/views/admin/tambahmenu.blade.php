@extends("layouts.sidebaradmin")

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Menu</h1>
    <div class="mt-5">
        @foreach ($menus as $menu)
        <a href="/admin/daftarmenu/{{ $menu->id }}" class="transition-shadow duration-500 cursor-pointer flex flex-row mt-5 border rounded-lg hover:shadow">
            <img src="{{ asset('storage/' . $menu->gambar)}}" alt="Product 2" class="w-32 h-32 object-cover rounded-l-lg">
            <div class="text-xs ml-3 mt-3">
                <p class="font-bold capitalize">{{ $menu->nama_menu}}</p>
                <p class="flex items-center mt-4"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="w-3 mr-2">Rp {{ number_format($menu->harga, 2, ',', '.') }}</p>
                <p class="flex items-center my-2"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menu->stock}}</p>
                <p class="flex items-center my-2 capitalize"><img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menu->user->nama}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="text-xs ml-[310px] bg-white rounded-lg p-5">
    <div class="flex justify-between items-center mb-10">
        <h1 class="ml-5">Formulir menambahkan menu</h1>
        <a href="/admin/daftarmenu"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <form action="/admin/daftarmenu" class="py-10 border w-[400px] rounded-lg mx-auto" method="post" enctype="multipart/form-data">
        @csrf
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Nama Menu</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama_menu" name="nama_menu" required >
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="p-3 border rounded-lg mt-2">
                <option value="">Pilih Kategori</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Harga</label>
            <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="harga" name="harga" required >
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Stock</label>
            <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="" name="stock" required >
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <label for="gambar">Gambar</label>
            <input type="file" class="p-3 border rounded-lg mt-2 outline-cyan-700" name="gambar">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Deskripsi</label>
            <textarea class="p-3 border rounded-lg mt-2 outline-cyan-700 h-32" name="deskripsi" required maxlength="255"></textarea>
        </div>
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Tambah Menu</button>
        </div>
    </form>
</div>
@endsection

@php
$judul = "Tambah menu";
@endphp
