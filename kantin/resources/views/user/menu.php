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
            padding: 20px;
        }
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
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
        @media screen and (max-width: 768px) {
            .menu-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Dasboard</a>
    <a href="#">Menu</a>
    <a href="#">profil</a>
    <a href="#">keranjang</a>
    <a href="#">history pembelian</a>
    <a href="#">Logout</a>
</div>

<div class="content">
    <h1>Daftar Menu Kantin</h1>

    <h2>Minuman</h2>
    <div class="menu-container">
        <div class="menu-item">
            <img src="minuman1.jpg" alt="Minuman 1">
            <h3>Minuman 1</h3>
            <p>Harga: Rp 10.000</p>
            <p>Stok Tersedia: 20</p>
            <button>Tambahkan Ke Keranjang</button>
        </div>
        <div class="menu-item">
            <img src="minuman2.jpg" alt="Minuman 2">
            <h3>Minuman 2</h3>
            <p>Harga: Rp 12.000</p>
            <p>Stok Tersedia: 15</p>
            <button>Tambahkan Ke Keranjang</button>
        </div>
    </div>

    <h2>Makanan</h2>
    <div class="menu-container">
        <div class="menu-item">
            <img src="makanan1.jpg" alt="Makanan 1">
            <h3>Makanan 1</h3>
            <p>Harga: Rp 15.000</p>
            <p>Stok Tersedia: 10</p>
            <button>Tambahkan Ke Keranjang</button>
        </div>
        <div class="menu-item">
            <img src="makanan2.jpg" alt="Makanan 2">
            <h3>Makanan 2</h3>
            <p>Harga: Rp 18.000</p>
            <p>Stok Tersedia: 8</p>
            <button>Tambahkan Ke Keranjang</button>
        </div>
    </div>
</div>

</body>
</html>

