@php
$judul = "Pesanan Saya";
$pesanan_terendah = $pembayarans->first();
@endphp

@extends("layouts.sidebar")

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Pemesanan</h1>
    <div class="mt-5">
        @foreach ($pembayarans as $pembayaran)
        <a href="/user/pembayaran/{{ $pembayaran->id }}/edit" class="{{ $pembayaran->id == $pesanan_terendah->id ? 'transition-all duration-500 my-2 p-2 bg-lime-400 rounded-lg cursor-pointer flex items-center' : 'transition-all duration-500 my-2 p-2 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex items-center' }}">
            <p>{{$pembayaran->nama}}</p>
        </a>
        @endforeach
    </div>
</div>
<div class=" flex flex-col text-xs ml-[310px] h-full">
    <div class="w-full bg-white p-2 rounded-lg">
        <h1 class="mx-auto w-32 p-2 text-center">Detail Pesanan</h1>
    </div>
    <div class="mt-2 text-xs w-full h-[170px] bg-white p-5 rounded-lg">
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
                <tbody>
                    <tr class="bg-white">
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->nama }}</td>
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->id_pesanan }}</td>
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->total_bayar }}</td>
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->created_at }}</td>
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->metode_pembayaran }}</td>
                        <td class="py-2 px-4 border">{{ $pesanan_terendah->keterangan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="text-xs w-full mt-2 rounded-lg">
            <div class="w-full bg-white p-2 rounded-lg">
                <h1 class="mx-auto w-32 p-2 text-center">Informasi Pesanan</h1>
            </div>
            <div class="relative mt-2 bg-white rounded-lg w-full h-[470px] p-5 overflow-auto">
                <img src="{{ $pesanan_terendah->foto}}" alt="" class="mx-auto w-32 h-32 rounded-full object-cover">
                <h1 class="sticky -top-5 bg-white border-b font-bold text-center mt-5 py-3 px-4">{{ $pesanan_terendah->nama_pembeli }}</h1>
                
                <hr>
                <p class="font-bold my-2 text-end">Total = Rp. 200.000,00</p>
            </div>
        </div>
        <div id="bukti_pembayaran" class="text-xs w-[500px] mt-2 ml-2 rounded-lg">
            <div class="w-full bg-white p-2 rounded-lg">
                <h1 class="mx-auto w-32 p-2 text-center">Bukti pembayaran</h1>
            </div>
            <img src="{{ $pesanan_terendah->bukti_pembayaran }}" alt="" class="w-full h-[470px] object-cover mt-2 rounded-lg border">
        </div>
    </div>
</div>
@endsection