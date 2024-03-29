@php
$judul = "edit konsumen";
@endphp
@extends("layouts.sidebaradmin")

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Pemesanan</h1>
    <div class="mt-5">
        @foreach ($users as $users)
        <a href="/admin/datapelanggan/{{ $users->id }}" class="{{ request()->is('admin/datapelanggan/'.$users->id) ? 'transition-all duration-500 my-2 p-2 bg-lime-400 rounded-lg cursor-pointer flex items-center' : 'transition-all duration-500 my-2 p-2 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex items-center' }}">
            <img src="{{ asset('storage/' . $users->gambar)}}" alt="" class="w-10 h-10 rounded-full mr-2 object-cover ">
            <h1 class="py-2 px-4">{{ $users->nama }}</h1>
        </a>
        @endforeach
    </div>
</div>
<div class="text-xs ml-[310px] bg-white rounded-lg p-5">
    <div class="flex justify-end">
        <a href="/admin/datapelanggan"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <div class="flex items-center">
        <img src="{{ asset('storage/' . $user->gambar)}}" alt="" class="w-64 h-64 object-cover rounded-full mr-2">
        <div>
            <h1 class="font-bold text-xl ml-10 capitalize">{{ $user->nama}}</h1>
            <div class="flex mt-10 ml-10">
                <p class="flex items-center border-r border-black pr-5"><img src="{{ asset('images/icons/envelope.png') }}" alt="Ikon" class="w-4 mr-3">{{ $user->email}}</p>
                <p class="flex items-center border-r border-black pr-5"><img src="{{ asset('images/icons/phone-flip.png') }}" alt="Ikon" class="w-4 mx-3">{{ $user->nomor}}</p>
                <p class="flex items-center"><img src="{{ asset('images/icons/shopping-cart-check.png') }}" alt="Ikon" class="w-4 mx-3"> 25 Pesanan</p>
            </div>
        </div>
    </div>
    <hr class="mt-5">
    <h1 class="font-bold my-5 bg-white p-2 sticky top-0">Riwayat pembelian:</h1>
    <div class="grid grid-cols-3 gap-4 mx-1">
        @foreach ($menus as $menu)
        <div>
            <img src="{{ $menu->gambar }}" alt="" class="w-64 h-64 object-cover rounded-lg mx-1">
            <h1 class="mt-3 ml-3 mb-2">{{ $menu->nama}}</h1>
            <p class="flex items-center mb-5">
                <img src="{{ asset('images/icons/shopping-cart-check.png') }}" alt="Ikon" class="w-4 mx-3">3 Kali pemesanan
            </p>
        </div>
        @endforeach
    </div>
</div>
@endsection