<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing Page</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="bg-gray-200 p-10">
    <div class="">
        <div class="bg-white p-5 pb-10 rounded-lg">
            <div class="relative mt-10">
                <div class="flex flex-row items-end">
                    <div class="w-full mx-20">
                        <div class="absolute top-0 w-full top-3">
                            <div class="text-xs mb-10 flex justify-between">
                                <h1 class="font-semibold text-lime-400 bg-cyan-700 py-2 px-3 rounded-full">Kantin Unperba.</h1>
                                <div class="flex mr-32">
                                    <h1 class="font-semibold text-cyan-700 border border-2 border-cyan-700 py-2 px-3 rounded-full mr-3">Food & Drink</h1>
                                    <h1 class="font-semibold text-cyan-700 border border-2 border-cyan-700 py-2 px-3 rounded-full mr-3">Free Delivery</h1>
                                    <h1 class="font-semibold text-cyan-700 border border-2 border-cyan-700 py-2 px-3 rounded-full">Online Payment</h1>
                                </div>
                            </div>
                        </div>
                        <h1 class="tracking-wide text-6xl font-black text-cyan-700">Temukan <br>Menu Favoritmu</h1>
                        <h1 class="tracking-wide text-6xl font-black text-emerald-500">Di Sini Sekarang</h1>
                        <h1 class="tracking-wide text-6xl font-black text-lime-400">Di Kantin Unperba.</h1>
                        <div class="mt-10 flex flex-row">
                            <h1 class="text-emerald-500 font-semibold">Pesanan Kantin Jadi Lebih Mudah!</h1>
                            <p class="text-xs mx-12">Sistem Informasi Kantin kami memberikan pengalaman yang nyaman untuk pemesanan makanan dan minuman favorit Anda.</p>
                        </div>
                        <div class="mt-10">
                            <a href="/register" class="font-semibold bg-emerald-500 text-white p-3 px-16 rounded-lg">Daftar Sekarang</a>
                            <a href="/login" class="font-semibold text-lime-400 bg-cyan-700 p-3 px-24 rounded-lg">Masuk</a>
                        </div>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.p1_lN8nNUyN_Qzn7jpH-vgHaGP?&w=160&h=240&c=7&pid=ImgDet" alt="" class="w-[500px] h-[600px] object-cover rounded-lg mr-10">
                </div>
                <div class="absolute bottom-3 right-14 w-[475px] h-[150px] rounded-lg bg-lime-400 opacity-50">
                </div>
                <h1 class="text-white absolute bottom-20 right-64 font-bold text-7xl">169 K <span class="text-3xl">+</span></h1>
                <p class="w-32 text-xs absolute bottom-20 right-20">Daftar menu makanan dan minuman tersedia di kantin unperba, harga terjangkau!</p>
            </div>
        </div>
    </div>
</body>

</html>