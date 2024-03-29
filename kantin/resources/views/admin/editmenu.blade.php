@extends("layouts.sidebaradmin")

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Menu</h1>
    <div class="mt-5">
        @foreach ($menus as $menus)
        <a href="/admin/daftarmenu/{{ $menus->id }}/edit" class="{{ request()->is('admin/daftarmenu/'.$menus->id.'/edit') ? 'transition-shadow duration-500 cursor-pointer flex flex-row mt-5 border bg-emerald-100 rounded-lg hover:shadow' : 'transition-shadow duration-500 cursor-pointer flex flex-row mt-5 border rounded-lg hover:shadow' }}">
            <img src="{{ asset('storage/' . $menus->gambar)}}" alt="Product 2" class="w-32 h-32 object-cover rounded-l-lg">
            <div class="text-xs ml-3 mt-3">
                <p class="font-bold">{{ $menus->nama_menu}}</p>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="w-3 mr-2">Rp {{ number_format($menus->harga, 2, ',', '.') }}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menus->stock}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menus->user->nama}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="text-xs bg-white ml-[310px] rounded-lg p-5">
    <div class="flex justify-end">
        <a href="/admin/daftarmenu"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <form action="/admin/daftarmenu/{{$menu->id}}" class="py-10 mx-32 border rounded-lg mt-5" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Nama Menu</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama_menu" name="nama_menu" required value="{{ $menu->nama_menu}}">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="p-3 border rounded-lg mt-2">
                <option value="{{ $menu->kategori}}">{{ $menu->kategori}}</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Harga</label>
            <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="harga" name="harga" required  value="{{ $menu->harga}}">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Stock</label>
            <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="" name="stock" required value="{{ $menu->stock}}">
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <input type="hidden" name="gambar_lama" value="{{ $menu->gambar}}">
            <label for="gambar">Gambar</label>
            <input type="file" class="p-3 border rounded-lg mt-2 outline-cyan-700" name="gambar">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Deskripsi</label>
            <textarea class="p-3 border rounded-lg mt-2 outline-cyan-700 h-32" name="deskripsi" required maxlength="255">{{ $menu->deskripsi}}</textarea>
        </div>
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Simpan perubahan</button>
        </div>
    </form>
</div>
@endsection

@php
$judul = "Edit menu";
@endphp