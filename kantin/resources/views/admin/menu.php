<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu Kantin</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: yellow;
            padding: 20px;
            text-align: center;
        }
        .navbar a {
            text-decoration: none;
            color: black;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }
        .content {
            text-align: center;
            padding: 50px;
        }
        .menu-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }
        .menu-item {
            background-color: yellow;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 40%;
            min-width: 250px;
        }
        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .menu-item h2 {
            margin-top: 10px;
        }
        .menu-item p {
            margin-bottom: 10px;
        }
        .menu-item button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .menu-item button:hover {
            background-color: #45a049;
        }
        .footer {
            background-color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="navbar">
<a href="#">Dasboard</a>
    <a href="#">Menu</a>
    <a href="#">profil</a>
    <a href="#">keranjang</a>
    <a href="#">history penjualan</a>
    <a href="#">Logout</a>
    <a href="#">Tambah Menu</a> <!-- Tombol untuk menambahkan menu -->
</div>

<div class="content">
    <div class="menu-container">
        <div class="menu-item">
            <img src="gambar_makanan1.jpg" alt="Makanan 1">
            <h2>Makanan 1</h2>
            <p>Harga: Rp 20.000</p>
            <p>Stok: 10</p>
            <button>Edit Menu</button>
        </div>
        <div class="menu-item">
            <img src="gambar_makanan2.jpg" alt="Makanan 2">
            <h2>Makanan 2</h2>
            <p>Harga: Rp 25.000</p>
            <p>Stok: 8</p>
            <button>Edit Menu</button>
        </div>
        <div class="menu-item">
            <img src="gambar_minuman1.jpg" alt="Minuman 1">
            <h2>Minuman 1</h2>
            <p>Harga: Rp 15.000</p>
            <p>Stok: 15</p>
            <button>Edit Menu</button>
        </div>
        <div class="menu-item">
            <img src="gambar_minuman2.jpg" alt="Minuman 2">
            <h2>Minuman 2</h2>
            <p>Harga: Rp 10.000</p>
            <p>Stok: 20</p>
            <button>Edit Menu</button>
        </div>
    </div>
</div>

</body>
</html>

