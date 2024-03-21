<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="text-center">
        <h1 class="text-3xl font-bold mt-20">
            Selamat Datang di Sistem Informasi Menu Kantin UNPERBA
        </h1>
        <p class="mt-20">Login Admin</p>
    </div>
    <div class="w-[600px] h-[280px] bg-yellow-400 rounded-[20px] mx-auto mt-5">
        <div class="flex flex-col mx-20 py-5">
            <label for="" class="my-2 flex items-center"><span class="material-symbols-outlined mr-3">
                    mail
                </span>Username</label>
            <input type="text" class="p-3 rounded-lg outline-none" placeholder="username">
        </div>
        <div class="flex flex-col mx-20">
            <label for="" class="my-2 flex items-center"><span class="material-symbols-outlined mr-3">
                    encrypted
                </span>Password</label>
            <input type="text" class="p-3 rounded-lg outline-none" placeholder="password">
        </div>
        <p class="mt-20 ml-5 text-xs text-blue-400">Forgot password?</p>
        <a href="/admin/dasboard" class="flex justify-end mt-3">
            <button class="bg-orange-400 p-2 px-20 rounded-[13px]">Login</button>
        </a>
    </div>
</body>

</html>