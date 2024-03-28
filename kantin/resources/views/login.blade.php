<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="text-xs bg-cyan-700 w-full py-5">
        <div class=" relative w-[400px] h-[600px] bg-white mx-auto rounded-lg">
            @if ($errors->any())
            <div class="text-red-500 absolute top-5 left-10">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            @if (session('berhasil'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('berhasil') }}</span>
            </div>
            @endif
            <div class="text-sm absolute top-2 right-2 text-center">
                <a href="/">X</a>
            </div>
            <form action="/login" method="post" class="py-10">
                @csrf
                <div class="mx-10 pt-5 flex flex-col">
                    <label for="username">Email</label>
                    <input type="email" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="email" name="email" required value="{{ old ("email")}}">
                </div>
                <div class="mx-10 pt-5 flex flex-col">
                    <label for="username">Password</label>
                    <input type="password" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="username" name="password" required>
                </div>
                <div class="flex justify-center">
                    <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Masuk</button>
                </div>
                <div class="mt-5 text-center text-cyan-700">
                    <a href="/register">Belum punya akun, register disini.</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>