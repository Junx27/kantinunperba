<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="text-xs bg-cyan-700 w-full h-screen py-20">
        <div class="relative w-[400px] h-[640px] bg-white mx-auto rounded-lg">
            @if ($errors->any())
            <div class="text-red-500 absolute top-5 left-10">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            <div class="text-sm absolute top-5 right-5 text-center">
                <a href="/">X</a>
            </div>
            <form action="/register" class="py-10" method="post" enctype="multipart/form-data">
                @csrf
                <div class="relative mx-10 pt-5 flex flex-col">
                    <label for="">Nama</label>
                    <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="nama" required value="{{old ("nama")}}">
                </div>
                <div class="relative mx-10 pt-5 flex flex-col">
                    <label for="">Email</label>
                    <input type="email" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="email" name="email" required value="{{old ("email")}}">
                </div>
                <div class="relative mx-10 pt-5 flex flex-col">
                    <label for="">Password</label>
                    <input type="password" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="" name="password" required value="{{old ("password")}}">
                </div>
                <div class="relative mx-10 pt-5 flex flex-col">
                    <label for="">No. Telepone</label>
                    <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nomor" name="nomor" required value="{{old ("nomor")}}">
                </div>
                <div class="mx-10 pt-5 flex flex-col">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="p-3 border rounded-lg mt-2 outline-cyan-700" name="gambar">
                </div>
                <div class="flex justify-center">
                    <button class="text-white w-full p-3 bg-cyan-700 mx-10 mt-10 rounded-lg hover:bg-cyan-600">Daftar</button>
                </div>
                <div class="mt-5 text-center text-cyan-700">
                    <a href="/login ">Sudah punya akun, login disini.</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>