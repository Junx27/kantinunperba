@extends("layouts.sidebar")

@section("container")
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Three Boxes with PHP and Tailwind CSS</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Fitur Section -->
    <section class="container mx-auto py-5">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Fitur 1 -->
            <div class="bg-purple-300 shadow-md p-8 rounded-md text-center">
                <p class="text-gray-600"><span class="material-symbols-outlined">restaurant_menu</span></p>
                <a href="http://127.0.0.1:8000/user/daftarmenu">
                    <h3 class="text-xl font-semibold mb-4">Daftar Menu
                </a></button>
            </div>
            <!-- Fitur 2 -->
            <div class="bg-blue-300 shadow-md p-8 rounded-md text-center">
                <p class="text-gray-600"><span class="material-symbols-outlined">shopping_cart</span>
                    <a href="http://127.0.0.1:8000/user/keranjang">
                        <h3 class="text-xl font-semibold mb-4">Keranjang Saya
                    </a></button>
            </div>
            <!-- Fitur 3 -->
            <div class="bg-green-300 shadow-md p-8 rounded-md text-center">
                <p class="text-gray-600"><span class="material-symbols-outlined">monitoring</span>.</p>
                <a href="http://127.0.0.1:8000/user/historypembelian">
                    <h3 class="text-xl font-semibold mb-4">Histori Pembelian
                </a></button>
            </div>
            <!-- Fitur 4 -->
            <div class="bg-yellow-300 shadow-md p-8 rounded-md text-center">
                <p class="text-gray-600"><span class="material-symbols-outlined">featured_play_list</span></p>
                <a href="http://127.0.0.1:8000/user/pesanansaya">
                    <h3 class="text-xl font-semibold mb-4">Pesanan Saya
                </a></button>
    </section>
</body>
@endsection

@php
$judul = "Dasboard";
@endphp