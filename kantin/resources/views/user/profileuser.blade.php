@extends("layouts.sidebar")

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
                    <img src="{{ asset('images/icons/shopping-cart-check.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>15 Pesanan selesai</p>
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
            
            <div class="mt-10 flex justify-end mr-10 text-xs">
                <a href="/user/profileuser/{{ $user->id }}/edit" class="font-semibold bg-emerald-500 text-white p-2 rounded-lg">Edit Profil</a>
            </div>
        </div>
        <p class="font-bold ml-10 my-5">Riwayat pesanan:</p>
       
    </div>
</div>
@endsection

@php
$judul = "Profil Admin";
@endphp