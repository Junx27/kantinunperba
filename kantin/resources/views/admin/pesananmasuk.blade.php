@extends("layouts.sidebaradmin")

@section("container")
<!-- Konten -->
<div class="flex justify-center">
    <div class="ml-[10px] p-2">
        <h1 class="flex justify-center text-2xl font-bold mb-10">Pesanan Masuk</h1>
        <!-- Tabel Data Pesanan Masuk -->
        <table class="ml-10 p-2">
            <thead>
                <tr class="bg-yellow-400">
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
                <tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Dinda</td>
                    <td class="py-2 px-4">12345</td>
                    <td class="py-2 px-4">Rp 150.000</td>
                    <td class="py-2 px-4">2024-02-07</td>
                    <td class="py-2 px-4">Transfer Bank</td>
                    <td class="py-2 px-4">Sudah Bayar</td>
                    <td class="py-2 px-4"><button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Detail</button>
                    <td class="py-2 px-4"><button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-green-600">Konfirmasi</button>
                    <td class="py-2 px-4"><button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600"><a href="http://127.0.0.1:8000/admin/detailpesanan">Lihat</button>
                </tr>
                <!-- Data Pesanan Masuk Lainnya -->
            </tbody>
        </table>
    </div>
    @endsection

    @php
    $judul = "Pesanan Masuk";
    @endphp