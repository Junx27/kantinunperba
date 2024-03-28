@extends("layouts.sidebaradmin")

@section("container")
<div>
    <form action="/admin/daftarmenu" class="py-10" method="post" enctype="multipart/form-data">
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
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Tambah Menu</button>
        </div>
    </form>
</div>
@endsection

@php
$judul = "Daftar Menu Admin";
@endphp