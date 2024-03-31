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
        @foreach ($pesanans as $pembayarans)
        @if ($pembayarans->metode_pembayaran == 'Pilih Metode Pembayaran')
        <a href="/user/pembayaran/{{ $pembayarans->id }}/edit" class="{{ request()->is('user/pembayaran/' .$pembayarans->id. '/edit') ? 'transition-all duration-500 my-2 p-4 bg-lime-400 rounded-lg cursor-pointer flex flex-col' : 'transition-all duration-500 my-2 p-4 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex flex-col' }}">
            <p class="font-bold">ID Pesanan: {{$pembayarans->id_pesanan}}</p>
            <div class="flex justify-between items-center">
                <div>
                    <div class="mt-3 flex items-center">
                        <img src="{{ asset('images/icons/user.png') }}" class="w-3"/>
                        <p class="capitalize ml-3">{{ $pembayarans->nama}}</p>
                    </div>
                    <p class="font-bold mt-1">Rp {{ number_format($pembayarans->total_bayar, 2, ',', '.') }}</p>
                </div>
                <form action="/user/pembayaran/{{ $pembayarans->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    @method('delete')
                    @csrf
                    <button type="submit" class="flex items-center hover:text-white">
                        <img src="{{ asset('images/icons/trash.png') }}" alt="Ikon" class="w-3">
                        <p class="ml-2">hapus</p>
                    </button>
                </form>
            </div>
        </a>
        @endif
        @endforeach
    </div>
</div>
<div class="relative ml-[310px] text-xs bg-white w-sreen h-screen rounded-lg p-5">
    <h1 class="font-bold text-center">Formulir Pembayaran</h1>
    <div class="text-sm absolute top-3 right-5 text-center">
        <a href="/user/pembayaran"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <form action="/user/pembayaran/{{$pembayaran->id}}" method="post" class="py-10" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Nama : <span class="font-bold capitalize">{{ $pembayaran->nama}}</span></label>
            <input type="hidden" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="nama" required value="{{ $pembayaran->nama}}">
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Id Pesanan : <span class="font-bold">{{ $pembayaran->id_pesanan}}</label>
            <input type="hidden" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="id_pesanan" required value="{{ $pembayaran->id_pesanan}}">
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Total Bayar : <span class="font-bold">Rp {{ number_format($pembayaran->total_bayar, 2, ',', '.') }}</label>
            <input type="hidden" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="total_bayar" required value="{{ $pembayaran->total_bayar}}">
        </div>
        <hr class="mt-5 mb-2">
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select name="metode_pembayaran" id="metode_pembayaran" class="p-3 border rounded-lg mt-2" required>
                <option value="">{{ $pembayaran->metode_pembayaran}}</option>
                <option value="transfer">Transfer</option>
                <option value="tunai">Tunai</option>
            </select>
        </div>
        <div id="input_gambar" class="mx-10 pt-5 flex flex-col hidden">
            <label for="gambar">Gambar</label>
            <input type="file" class="p-3 border rounded-lg mt-2 outline-cyan-700" name="gambar">
        </div>
        <script>
            var selectMetodePembayaran = document.getElementById('metode_pembayaran');
            var divInputGambar = document.getElementById('input_gambar');
            selectMetodePembayaran.addEventListener('change', function() {
                if (selectMetodePembayaran.value === 'transfer') {
                    divInputGambar.classList.remove('hidden');
                } else {
                    divInputGambar.classList.add('hidden');
                }
            });
        </script>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="status_pesanan">Pilih Pengiriman</label>
            <select name="status_pesanan" class="p-3 border rounded-lg mt-2" required>
                <option value="">{{ $pembayaran->status_pesanan}}</option>
                <option value="diambil">Diambil di tempat</option>
                <option value="diantar">Diantar</option>
            </select>
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <label for="catatan">Catatan</label>
            <textarea name="catatan" id="" cols="30" rows="10" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="{{$pembayaran->catatan}}" required></textarea>
        </div>
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Selsaikan Pesanan</button>
        </div>
    </form>
</div>
@endsection
@php
$judul = "edit pembayaran";
@endphp
