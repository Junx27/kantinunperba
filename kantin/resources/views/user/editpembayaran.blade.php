@extends("layouts.sidebar")
@php
$totalKeseluruhan = 0;
@endphp
@foreach ($keranjangs as $menu)
@php
$subtotal = $menu->harga * $menu->jumlah;
$totalKeseluruhan += $subtotal;
@endphp
@endforeach

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Pemesanan</h1>
    <div class="mt-5">
        @foreach ($pesanans as $pesanan)
        <a href="/user/pembayaran/{{ $pesanan->id }}/edit" class="{{ request()->is('user/pembayaran/'.$pesanan->id. '/edit') ? 'transition-all duration-500 my-2 p-2 bg-lime-400 rounded-lg cursor-pointer flex items-center' : 'transition-all duration-500 my-2 p-2 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex items-center' }}">
            <p class="font-bold capitalize">{{ $pesanan->nama}}</p>
        </a>
        @endforeach
    </div>
</div>
<div class="ml-[310px] text-xs bg-white w-sreen h-screen rounded-lg p-5">
    <p class="capitalize">Rp {{ number_format($totalKeseluruhan, 2, ',', '.') }}</p>
    <form action="/user/pembayaran" method="post" class="py-10">
        @csrf
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Nama</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="nama" required value="{{ $pembayaran->nama}}">
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Alamat</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="alamat" required value="{{ $pembayaran->alamat}}">
        </div>
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Buat Pesanan</button>
        </div>
    </form>
</div>
@endsection
@php
$judul = "edit pembayaran";
@endphp
