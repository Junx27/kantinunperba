@extends("layouts.sidebaradmin")

@section("container")
<div class="w-full h-screen bg-white p-10 rounded-lg">
    <div class="text-xs">
        <form action="/admin/daftarmenu" method="GET">
            <?php
            $cari = request('cari');
            if ($cari === '') {
                $cari = 'all';
            }
            ?>
            <input type="text" name="cari" class="w-64 text-xs border p-2 rounded-lg outline-cyan-700" placeholder="cari menu" value="{{ $cari }}">
            <a href="/admin/daftarmenu" class="text-xs w-16 text-white bg-orange-500 p-2 rounded-lg">Kembali</a>
        </form>
    </div>
    @if (session('gagal'))
        <div class="my-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Gagal!</strong>
            <span class="block sm:inline">{{ session('gagal') }}</span>
        </div>
     @endif
</div>
@endsection

@php
$judul = "Data Pelanggan";
@endphp