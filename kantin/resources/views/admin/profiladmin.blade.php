@extends("layouts.sidebaradmin")

@section("container")
<div class="">
    <div class="relative bg-white rounded-lg pb-[87px]">
        <div class="flex">
            <img src="https://wallpapersmug.com/download/1920x1080/930962/vegetables-fresh.jpg" alt="" class="z-0 w-full h-[300px] object-cover rounded-t-lg">
        </div>
        <div>
            <span class="w-20 h-20 bg-transparent absolute rounded-br-full top-[220px] left-[64.9px] shadow-myShadow1"></span>
            <span class="w-20 h-20 bg-transparent absolute rounded-bl-full top-[220px] right-[590px] shadow-myShadow2"></span>
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYwNDJ8&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="z-10 relative -mt-32 ml-32 border-[15px] border-white w-64 h-64 object-cover rounded-full">
        </div>
        <div class="-mt-24 ml-96 text-gray-400">
            <h1><span class="font-bold mr-1 text-black">25</span>Produk<span class="text-black font-bold ml-8 mr-1">125</span>Pelanggan<span class="text-black font-bold ml-8 mr-1">email:</span>email@gmail.com<span class="text-black font-bold ml-8 mr-1">Tlp.</span>087664356</h1>
            <div class="mt-5 flex flex-row w-[700px] overflow-auto">
                @foreach ($pesanans as $pesanan)
                <img src="{{ $pesanan->foto }}" alt="" class="w-[30px] h-[30px] mx-1 rounded-full object-cover">
                @endforeach
            </div>
            <hr class="my-2 mr-10">
            <div class="mt-10 flex justify-end mr-10 text-xs">
                <a class="font-semibold bg-emerald-500 text-white p-3 px-5 rounded-lg">Edit Profil</a>
            </div>
        </div>
        <h1 class="text-3xl font-bold mt-10 ml-10">Dinda Ayu Sekar M.</h1>
        <p class="mt-5 mx-10 indent-8">Nama Rekening: Admin</p>
        <p class="mt-5 mx-10 indent-8">Nama Bank: BRI</p>
        <p class="mt-5 mx-10 indent-8">No Rekening: 0022342211</p>
        <p class="font-bold ml-10 my-5">Produk added:</p>
        <div class="grid grid-cols-5 gap-5 mx-10 mt-10">
            @foreach ($menus as $menu)
            <img src="{{ $menu->gambar }}" alt="" class="w-64 h-64 object-cover rounded-lg mx-1">
            @endforeach
        </div>

    </div>
</div>
@endsection

@php
$judul = "Profil Admin";
@endphp