@extends("layouts.sidebar")

@section("container")
<!-- Konten -->
<div class="flex justify-center">
    <div class="ml-[5px] p-2">
        <h1 class="flex justify-center text-2xl font-bold mb-5">History Pembelian</h1>
        <!-- Tabel Data History Penjualan -->
        <table class="ml-[100px]">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Nama Pembeli</th>
                    <th class="py-2 px-4">ID Pesanan</th>
                    <th class="py-2 px-4">Total Harga</th>
                    <th class="py-2 px-4">Tanggal Transaksi</th>
                    <th class="py-2 px-4">Metode Pembayaran</th>
                    <th class="py-2 px-4">Detail</th>
                    <th class="py-2 px-4">Status Pengiriman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Dinda</td>
                    <td class="py-2 px-4">12345</td>
                    <td class="py-2 px-4">Rp 150.000</td>
                    <td class="py-2 px-4">2024-02-07</td>
                    <td class="py-2 px-4">Transfer Bank</td>
                    <td class="py-2 px-4"><a href="#">Detail</a></td>
                    <td class="py-2 px-4">Dikirim</td>
                </tr>
                <!-- Data History Penjualan lainnya -->
            </tbody>
        </table>
    </div>
    @endsection

    @php
    $judul = "Histori Pembelian";
    @endphp