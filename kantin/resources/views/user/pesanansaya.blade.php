@php
$judul = "Pesanan Saya";
$dataPembelian = [
[
'no' => 1,
'tanggal_transaksi' => '2024-02-28',
'nama_menu' => 'Menu 1',
'id_pesanan' => 'ORD001',
'total_harga' => 'Rp 500.000',
'metode_pembayaran' => 'Transfer Bank',
'detail' => 'Lihat',
'status_pengiriman' => 'Dikirim',
],
[
'no' => 2,
'tanggal_transaksi' => '2024-02-28',
'nama_menu' => 'Menu 2',
'id_pesanan' => 'ORD001',
'total_harga' => 'Rp 200.000',
'metode_pembayaran' => 'Transfer Bank',
'detail' => 'Lihat',
'status_pengiriman' => 'Belum Dikirim',
],
// Anda dapat menambahkan data pembelian lainnya di sini
];
@endphp

@extends("layouts.sidebar")

@section("container")
<div class="text-xs w-full h-screen bg-white p-10 rounded-lg">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
            <thead class="bg-lime-400">
                <tr>
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Tanggal Transaksi</th>
                    <th class="py-2 px-4">Nama Menu</th>
                    <th class="py-2 px-4">ID Pesanan</th>
                    <th class="py-2 px-4">Total Harga</th>
                    <th class="py-2 px-4">Metode Pembayaran</th>
                    <th class="py-2 px-4">Detail</th>
                    <th class="py-2 px-4">Status Pengiriman</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($dataPembelian as $pembelian)
                <tr class="border">
                    <td class="py-2 px-4 border">{{ $pembelian['no'] }}</td>
                    <td class="py-2 px-4 border">{{ $pembelian['tanggal_transaksi'] }}</td>
                    <td class="py-2 px-4 border">{{ $pembelian['nama_menu'] }}</td>
                    <td class="py-2 px-4 border">{{ $pembelian['id_pesanan'] }}</td>
                    <td class="py-2 px-4 border">{{ $pembelian['total_harga'] }}</td>
                    <td class="py-2 px-4 border">{{ $pembelian['metode_pembayaran'] }}</td>
                    <td class="py-2 px-4 border"><a href="#">{{ $pembelian['detail'] }}</a></td>
                    @if ($pembelian['status_pengiriman'] === 'Belum Dikirim')
                    <td class="py-2 px-4 border text-red-500">{{ $pembelian['status_pengiriman'] }}</td>
                    @else
                    <td class="py-2 px-4 border text-green-500">{{ $pembelian['status_pengiriman'] }}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection