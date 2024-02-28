<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    <title>Dasboard</title>
</head>
<body>
    <div class="text-center bg-yellow-400 py-5 text-xl">
        Dasboard Admin
  </div>
  <head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website dengan PHP dan Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 bg-gray-200 h-screen text-black">
            <div class="p-4">
              <div class="p-4">
           
            <ul>
            <li class="mb-2"><a href="#" class="block">Profil Admin</a></li>
                <li class="mb-2"><a href="#" class="block">Data Menu</a></li>
                <li class="mb-2"><a href="#" class="block">Pesanan Masuk</a></li>
                <li class="mb-2"><a href="#" class="block">History Penjualan</a></li>
                <li class="mb-2"><a href="#" class="block">Data Pelanggan</a></li>
                <li class="mb-2"><a href="#" class="block">Logout</a></li>
            </ul>
            </div>
            </div>
        </div>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Boxes with PHP and Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center mt-5">
        <?php
        // Daftar nama yang akan dimasukkan ke dalam kotak
        $names = ["Daftar Menu", "Pesanan Masuk", "History Penjualan"];
        
        // Loop melalui array nama untuk membuat kotak
        foreach ($names as $name) {
            ?>
            <div class="w-[250px] bg-yellow-300 m-10 p-10 h-[130px]">
                <h2 class="text-xl font-bold"><?php echo $name; ?></h2>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>