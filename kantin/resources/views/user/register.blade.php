<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Registrasi</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-2 text-xl">
        Registrasi
    </div>
    <div class="mt-20 grid grid-cols-2 gap-10">
        <div class="mx-auto">
            <img src="https://www.shutterstock.com/image-vector/avatar-male-profile-gray-person-260nw-538708681.jpg" alt="" class="w-[200px]">
            <button class="w-[150px] bg-orange-400 p-2 rounded-lg mt-4 ml-8">Choose Image</button>
        </div>
        <div>
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg" placeholder="Nama">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Jenis Kelamin">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Email">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="No. Telepon">
            <input type="text" class="p-2 bg-gray-200 w-[350px] rounded-lg mt-4" placeholder="Password">
            <button class="w-[350px] bg-orange-400 p-2 rounded-lg mt-4"><a href="http://127.0.0.1:8000">Register</a></button>
        </div>
    </div>
</body>
</html>