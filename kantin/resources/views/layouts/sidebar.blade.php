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
    <div class="fixed top-0 z-10 w-full text-center bg-yellow-400 py-2 text-xl font-bold">
        {{ $judul }}
    </div>
    </head>

    <body class="">
        <!-- Sidebar -->
        <div class="z-20 w-[280px] h-[800px] bg-gray-400 fixed top-0">
            <ul class="pt-20 pl-8">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/profiluser"><span class="material-symbols-outlined">
                        person</span>Profil User</a></button>
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/dasboard"><span class="material-symbols-outlined">
                        home</span>Dasboard</a></button>
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/daftarmenu"><span class="material-symbols-outlined">
                        book
                    </span>Daftar Menu</a></button>
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/keranjang"><span class="material-symbols-outlined">
                        shopping_cart_checkout
                    </span>keranjang</a></button>
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/historypembelian"><span class="material-symbols-outlined">
                        manage_history
                    </span>History Pembelian</a></button>
                <li class="px-4 mb-2"><a href="#" class="block"></a></li><a href="http://127.0.0.1:8000/user/landingpage"><span class="material-symbols-outlined">
                        logout
                    </span>Log out</a></button>
            </ul>
            <!-- end sidebar -->
        </div>
        <!-- content -->
        <div class="m-10 ml-[310px] mt-20">
            @yield ("container")
        </div>
        <!-- end content -->
    </body>

</html>