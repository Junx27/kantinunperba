@extends("layouts.sidebar")

@section("container")
<div class="text-xs bg-white w-sreen h-screen rounded-lg p-5">
    <form action="/user/pembayaran" method="post" class="py-10">
        @csrf
        <div class="mx-10 pt-5 flex flex-col">
            <label for="username">Nama</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="nama" required>
        </div>
        <div class="flex justify-center">
            <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Buat Pesanan</button>
        </div>
    </form>
</div>
@endsection
@php
$judul = "pembayaran";
@endphp
