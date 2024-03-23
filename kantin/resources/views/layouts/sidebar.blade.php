<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>{{ $judul }}</title>
</head>

<body>
    <div class="text-xs m-2 z-20 w-[280px] h-[760px] bg-white fixed top-0 rounded-lg">
        <div class="flex flex-col pt-20">
            <a href="/user/dasboard" class="{{ request()->is('user/dasboard') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/dashboard.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Dashboard
            </a>
            <a href="/user/profiluser" class="{{ request()->is('user/profiluser') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Profil User
            </a>
            <a href="/user/daftarmenu" class="{{ request()->is('user/daftarmenu') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/restaurant.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Daftar Menu
            </a>
            <a href="/user/pesanansaya" class="{{ request()->is('user/pesanansaya*') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/shopping-cart-add.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Pesanan Saya
            </a>

            <a href="/user/historypembelian" class="{{ request()->is('user/historypembelian') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/time-past.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                History Pembelian
            </a>
            <a href="/user/keranjang" class="{{ request()->is('user/keranjang') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/address-book.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Keranjang
            </a>
            <a href="/admin/landingpage" class="{{ request()->is('') ? 'flex items-center bg-cyan-700 text-white p-2 pl-5 mx-5 rounded-lg my-1' : 'flex items-center p-2 pl-5 mx-5 my-1' }}">
                <img src="{{ asset('images/icons/leave.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full mr-3">
                Logout
            </a>
        </div>
    </div>
    <!-- content -->
    <div class="bg-gray-200 pl-[300px] p-2">
        @yield ("container")
    </div>
    <!-- end content -->
</body>

</html>