@php
$judul = "Pesanan Masuk";
$dataPesanan = [
[
'no' => 1,
'nama_pembeli' => 'John Doe',
'id_pesanan' => 'ORD001',
'total_harga' => 'Rp 500.000',
'tanggal_transaksi' => '2024-02-28',
'metode_pembayaran' => 'Transfer Bank',
'keterangan' => 'Sudah Bayar',
'bukti_pembayaran' => 'Link ke bukti pembayaran',
'aksi' => 'Konfirmasi',
'detail_pesanan' => 'Detail',
],
[
'no' => 2,
'nama_pembeli' => 'Jane Doe',
'id_pesanan' => 'ORD002',
'total_harga' => 'Rp 750.000',
'tanggal_transaksi' => '2024-02-27',
'metode_pembayaran' => 'Kartu Kredit',
'keterangan' => 'Belum Bayar',
'bukti_pembayaran' => '-',
'aksi' => 'Konfirmasi',
'detail_pesanan' => 'Detail',
],
// Anda bisa menambahkan data pesanan lainnya di sini
];

@endphp
@extends("layouts.sidebaradmin")

@section("container")
<div class="text-xs w-full h-screen bg-white p-10 rounded-lg">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
            <thead>
                <tr class="bg-lime-400">
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Nama Pembeli</th>
                    <th class="py-2 px-4">ID Pesanan</th>
                    <th class="py-2 px-4">Total Harga</th>
                    <th class="py-2 px-4">Tanggal Transaksi</th>
                    <th class="py-2 px-4">Metode Pembayaran</th>
                    <th class="py-2 px-4">Ket</th>
                    <th class="py-2 px-4">Bukti Pembayaran</th>
                    <th class="py-2 px-4">Aksi</th>
                    <th class="py-2 px-4">Detail Pesanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPesanan as $pesanan)
                <tr class="bg-white">
                    <td class="py-2 px-4 border">{{ $pesanan['no'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['nama_pembeli'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['id_pesanan'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['total_harga'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['tanggal_transaksi'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['metode_pembayaran'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['keterangan'] }}</td>
                    <td class="py-2 px-4 border">{{ $pesanan['bukti_pembayaran'] }}</td>
                    <td class="py-2 px-4 border">
                        <button class="px-4 py-2 font-semibold hover:text-cyan-700">{{ $pesanan['aksi'] }}</button>
                    </td>
                    <td class="py-2 px-4 border">
                        <button class="px-4 py-2 font-semibold hover:text-cyan-700">{{ $pesanan['detail_pesanan'] }}</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection