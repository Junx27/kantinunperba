@extends('layouts.sidebaradmin')

@section('container')
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Menu</h1>
    <div class="mt-5">
        @foreach ($menus as $menus)
        <a href="/admin/daftarmenu/{{ $menus->id }}" class="{{ request()->is('admin/daftarmenu/'.$menus->id) ? 'transition-shadow duration-500 cursor-pointer flex flex-row mt-5 border bg-emerald-100 rounded-lg hover:shadow' : 'transition-shadow duration-500 cursor-pointer flex flex-row mt-5 border rounded-lg hover:shadow' }}">
            <img src="{{ asset('storage/' . $menus->gambar)}}" alt="Product 2" class="w-32 h-32 object-cover rounded-l-lg">
            <div class="text-xs ml-3 mt-3">
                <p class="font-bold">{{ $menus->nama_menu}}</p>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="w-3 mr-2"> {{ $menus->harga}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menus->stock}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="w-3 mr-2">{{ $menus->user->nama}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="bg-white ml-[310px] h-screen p-5 rounded-lg">
    <div class="flex justify-end">
        <a href="/admin/daftarmenu"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <div class="p-5">
                <img src="{{ asset('storage/' . $menu->gambar)}}" alt="Product 2" class="w-full h-96 object-cover rounded-lg">
            <div class="text-xs mt-10">
                <p class="font-bold text-xl">{{ $menu->nama_menu}}</p>
                <p class="flex items-center mt-3"><img src="{{ asset('images/icons/brand.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"> {{ $menu->harga}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/box-open.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full">{{ $menu->stock}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full">{{ $menu->user->nama}}</p>
                <div class="p-5 w-full overflow-auto">
                    <p class="indent-8">{{ $menu->deskripsi}}</p>
                </div>
            </div>
            <div class="mt-10 text-xs mt-1 flex flex-row items-center">
                <a href="/admin/daftarmenu/{{ $menu->id }}/edit" class="transition-all duration-500 w-16 bg-emerald-500 hover:bg-black text-white p-1 rounded mr-2 text-center">Edit</a>
                <form action="/admin/daftarmenu/{{ $menu->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelanggan ini?')">
                    @method('delete')
                    @csrf
                    <button type="submit" class="bg-orange-500 p-1 rounded px-5 text-white">Hapus</button>
                </form>            
            </div>
        </div>
    </div>
</div>
@endsection

@php
    $judul = "Detail menu";
@endphp