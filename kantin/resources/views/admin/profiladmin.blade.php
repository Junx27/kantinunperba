@extends("layouts.sidebaradmin")

@section("container")
<div class="text-xs">
    <div class="relative bg-white rounded-lg pb-[87px]">
        <div class="flex">
            <img src="https://wallpapersmug.com/download/1920x1080/930962/vegetables-fresh.jpg" alt="" class="z-0 w-full h-[300px] object-cover rounded-t-lg">
        </div>
        <div>
            <span class="w-20 h-20 bg-transparent absolute rounded-br-full top-[220px] left-[64.9px] shadow-myShadow1"></span>
            <span class="w-20 h-20 bg-transparent absolute rounded-bl-full top-[220px] right-[590px] shadow-myShadow2"></span>
            <img src="{{ asset('storage/' . $user->gambar)}}" alt="" class="z-10 relative -mt-32 ml-32 border-[15px] border-white w-64 h-64 object-cover rounded-full">
        </div>
        <div class="-mt-32 ml-96">
            <h1 class="mt-5 text-3xl font-bold ml-2 capitalize">{{ $user->nama}}</h1>
            <div class="flex mt-5">
                <div class="flex items-center border-r border-black pr-3">
                    <img src="{{ asset('images/icons/shopping-cart-add.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{count($menus)}} Produk</p>
                </div>
                <div class="flex items-center border-r border-black pr-3">
                    <img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{count($users)}} Pelanggan</p>
                </div>
                <div class="flex items-center border-r border-black pr-3">
                    <img src="{{ asset('images/icons/envelope.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{ $user->email}}</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('images/icons/phone-flip.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{ $user->nomor}}</p>
                </div>
            </div>
            <div class="mt-5 flex flex-row w-[700px] overflow-auto">
                @foreach ($users as $users)
                <img src="{{ asset('storage/' . $users->gambar)}}" alt="" class="w-[30px] h-[30px] mx-1 rounded-full object-cover">
                @endforeach
            </div>
            <div class="mt-10 flex justify-end mr-10 text-xs">
                <a href="/admin/datapelanggan/{{ $user->id }}/edit" class="font-semibold bg-emerald-500 text-white p-2 rounded-lg">Edit Profil</a>
            </div>
        </div>
        <p class="font-bold ml-10 my-5">Produk added:</p>
        <div class="grid grid-cols-4 gap-5 mx-10 mt-10">
            @foreach ($menus as $menus)
            <div>
                <img src="{{ asset('storage/' . $menus->gambar)}}" alt="" class="w-64 h-64 object-cover rounded-lg mx-1 hover:scale-[101%] hover:rounded-none transition-all duration-500">
                <h1 class="mt-3 ml-3 mb-2">{{ $menus->nama_menu}}</h1>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection

@php
$judul = "Profil Admin";
@endphp