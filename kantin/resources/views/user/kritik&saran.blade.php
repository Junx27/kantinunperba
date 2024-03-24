@extends("layouts.sidebar")

@section("container")

    <div class="w-full bg-white p-4 rounded-lg overflow-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Kritik dan Saran Konsumen</h1>
        <form action="submit.php" method="post" class="space-y-4">
    <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
    </div>
     <div>
            <label for="kritik" class="block text-sm font-medium text-gray-700">Kritik</label>
            <textarea name="kritik" id="kritik" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
    </div>
    <div>
            <label for="saran" class="block text-sm font-medium text-gray-700">Saran</label>
            <textarea name="saran" id="saran" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
    </div>
    <div class="text-center">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Kirim</button>
            </div>
        </form>
    </div>
    @endsection
@php
$judul = "Formulir Kritik&Saran";
@endphp
