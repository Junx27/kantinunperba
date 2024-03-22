@php
$judul = "Daftar Menu Admin";
@endphp

@extends("layouts.sidebaradmin")

@section("container")
<div class="flex">
    <div class="text-xs w-[300px] h-screen bg-white p-5 rounded-lg mr-3">
        <h1 class="bg-emerald-500 p-2 text-center rounded-lg">Daftar Pesanan</h1>
        <div class="mt-5">
            @foreach ($pesanans as $pesanans)
            <a href="/admin/pesananmasuk/{{ $pesanans->id}}" class="{{ request()->is('admin/pesananmasuk/'.$pesanans->id) ? 'transition-all duration-500 my-2 p-2 bg-lime-400 rounded-lg cursor-pointer flex items-center' : 'transition-all duration-500 hover:bg-lime-400 hover:rounded-lg my-2 p-2 cursor-pointer flex items-center' }}">
                <img src="{{ $pesanans->foto }}" alt="" class="w-10 h-10 rounded-full mr-2">
                <h1 class="py-2 px-4">{{ $pesanans->nama_pembeli }}</h1>
            </a>
            @endforeach
        </div>
    </div>
    <div class=" flex flex-col text-xs w-full h-full">
        <div id="detail_pesanan" class="text-xs w-full h-[170px] bg-white p-5 rounded-lg">
            <h1 class="w-32 bg-emerald-500 p-2 text-center rounded-lg">Detail Pesanan</h1>
            <div class="mt-5 overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                    <thead>
                        <tr class="bg-lime-400">
                            <th class="py-2 px-4">Nama Pembeli</th>
                            <th class="py-2 px-4">ID Pesanan</th>
                            <th class="py-2 px-4">Total Harga</th>
                            <th class="py-2 px-4">Tanggal Transaksi</th>
                            <th class="py-2 px-4">Metode Pembayaran</th>
                            <th class="py-2 px-4">Ket</th>
                        </tr>
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="mt-3 text-xs w-full h-[600px] bg-white p-5 rounded-lg">
                <h1 class="w-32 bg-emerald-500 p-2 text-center rounded-lg">Detail Items</h1>
            </div>
            <div id="bukti_pembayaran" class="ml-3 mt-3 text-xs w-[500px] h-[600px] bg-white p-5 rounded-lg">
                <h1 class="w-32 bg-emerald-500 p-2 text-center rounded-lg">Bukti Pembayaran</h1>
            </div>
        </div>
    </div>
</div>
@endsection