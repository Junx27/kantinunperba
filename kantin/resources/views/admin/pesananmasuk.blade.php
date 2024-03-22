@php
$judul = "Daftar Menu Admin";
@endphp

@extends("layouts.sidebaradmin")

@section("container")
<div class="flex">
    <div class="text-xs w-[300px] h-screen bg-white p-5 rounded-lg mr-3">
        <h1 class="bg-emerald-500 p-2 text-center rounded-lg">Daftar Pesanan</h1>
        <div class="mt-5">
            @foreach ($pesanans as $pesanan)
            <div onclick="showDetailPesanan({{ $pesanan->id }})" class="transition-all duration-500 my-2 p-2 hover:bg-emerald-500 hover:rounded-lg cursor-pointer flex items-center">
                <img src="{{ $pesanan->foto }}" alt="" class="w-10 h-10 rounded-full mr-2">
                <h1 class="py-2 px-4">{{ $pesanan->nama_pembeli }}</h1>
            </div>
            @endforeach
        </div>
    </div>
    <div class=" flex flex-col text-xs w-full h-full">
        <div id="detail_pesanan" class="text-xs w-full h-[170px] bg-white p-5 rounded-lg">
            <h1 class="w-32 bg-lime-400 p-2 text-center rounded-lg">Detail Pesanan</h1>
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
                    <tbody id="detail_pesanan_body">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="mt-3 text-xs w-full h-[600px] bg-white p-5 rounded-lg">
                <h1 class="w-32 bg-lime-400 p-2 text-center rounded-lg">Detail Items</h1>
            </div>
            <div id="bukti_pembayaran" class="ml-3 mt-3 text-xs w-[500px] h-[600px] bg-white p-5 rounded-lg">
                <h1 class="w-32 bg-lime-400 p-2 text-center rounded-lg">Bukti Pembayaran</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function showDetailPesanan(pesananId) {
        // Ambil data pesanan berdasarkan ID dengan AJAX
        $.ajax({
            url: '/admin/pesanan/' + pesananId,
            type: 'GET',
            success: function(response) {
                // Tampilkan data pesanan di sebelah kanan
                $('#detail_pesanan_body').html(`
                    <tr class="bg-white">
                        <td class="py-2 px-4 border">${response.nama_pembeli}</td>
                        <td class="py-2 px-4 border">${response.id_pesanan}</td>
                        <td class="py-2 px-4 border">${response.total_harga}</td>
                        <td class="py-2 px-4 border">${response.tanggal_transaksi}</td>
                        <td class="py-2 px-4 border">${response.metode_pembayaran}</td>
                        <td class="py-2 px-4 border">${response.keterangan}</td>
                    </tr>
                `);

                // Tampilkan bukti pembayaran
                $('#bukti_pembayaran').html(`
                    <img src="${response.foto}" alt="Bukti Pembayaran" class="w-full h-full">
                `);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
</script>
@endsection