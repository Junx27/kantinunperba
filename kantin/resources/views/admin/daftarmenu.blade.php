@extends("layouts.sidebaradmin")

@section("container")
<div class="">
</div>
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
    <!-- Pencarian -->
    <div class="mb-4">
        <input type="text" id="searchInput" class="border border-gray-300 rounded-md py-2 px-3 w-full" placeholder="Cari...">
    </div>
    <!-- Product List -->
    <div class="flex-1 p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-md">
                <img src="https://th.bing.com/th/id/OIP.3140EtMQYk4Pyb5-gyLeLwHaHa?w=1200&h=1200&rs=1&pid=ImgDetMain" alt="Product 1" class="w-full h-32 object-cover rounded-t-lg">
                <div class="p-4">
                    <h2 class="font-semibold text-lg">Menu 1</h2>
                    <p class="text-gray-500">Rp.10.000</p>
                    <p class="text-gray-500">Stock: 50</p>
                    <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded"></li><a href="http://127.0.0.1:8000/admin/editmenu">Edit</a></button>
                    <button class="mt-2 bg-purple-400 hover:bg-yellow-400 text-white py-2 px-2 rounded">Tambah</button>
                    <button class="mt-2 bg-red-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Hapus</button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-md">
                <img src="https://th.bing.com/th/id/R.c53d6a303a9f174ffe2a02222e1f4f84?rik=UCRBJ9%2bvPp6mbA&riu=http%3a%2f%2fwww.meeteat.org%2fwp-content%2fuploads%2f2021%2f08%2fsate-taichan-6.jpg&ehk=arWjf%2fcYgkff1lpdHyOfzmSFWQSKC%2fv2XMVuYpF7vMc%3d&risl=&pid=ImgRaw&r=0" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                <div class="p-4">
                    <h2 class="font-semibold text-lg">Menu 2</h2>
                    <p class="text-gray-500">Rp.15.000</p>
                    <p class="text-gray-500">Stock: 30</p>
                    <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded"></li><a href="http://127.0.0.1:8000/admin/editmenu">Edit</a></button>
                    <button class="mt-2 bg-purple-400 hover:bg-yellow-400 text-white py-2 px-2 rounded">Tambah</button>
                    <button class="mt-2 bg-red-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Hapus</button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-md">
                <img src="https://cdn-brilio-net.akamaized.net/news/2019/10/01/171511/1104781-1000xauto-resep-soto-ayam-santan.jpg" alt="Product 3" class="w-full h-32 object-cover rounded-t-lg">
                <div class="p-4">
                    <h2 class="font-semibold text-lg">Menu 3</h2>
                    <p class="text-gray-500">Rp. 20.000</p>
                    <p class="text-gray-500">Stock: 20</p>
                    <button class="mt-2 bg-orange-500 hover:bg-yellow-400 text-white py-2 px-2 rounded"></li><a href="http://127.0.0.1:8000/admin/editmenu">Edit</a></button>
                    <button class="mt-2 bg-purple-400 hover:bg-yellow-400 text-white py-2 px-2 rounded">Tambah</button>
                    <button class="mt-2 bg-red-500 hover:bg-yellow-400 text-white py-2 px-2 rounded">Hapus</button>
                </div>
            </div>
            <!-- Add more product cards here -->
        </div>
    </div>
</div>
@endsection

@php
$judul = "Daftar Menu Admin";
@endphp