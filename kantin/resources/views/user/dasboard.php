<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        .footer {
            background-color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 30%;
            min-width: 250px;
        }
        @media screen and (max-width: 768px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Menu</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
    <a href="#">Logout</a>
</div>

<div class="content">
    <div class="dashboard-container">
        <div class="card">
            <h2>Daftar Menu</h2>
            <p>Daftar menu yang tersedia hari ini</p>
            <!-- Tambahkan konten dinamis di sini -->
        </div>
        <div class="card">
            <h2>Riwayat Pesanan</h2>
            <p>Lihat riwayat pesanan yang sudah dilakukan</p>
            <!-- Tambahkan konten dinamis di sini -->
        </div>
        <div class="card">
            <h2>Keranjang</h2>
            <p>lakukan proses pemesanan</p>
            <!-- Tambahkan konten dinamis di sini -->
        </div>
    </div>
</div>

<div class="footer">
    <p>Informasi Kantin: Alamat Kantin, Nomor Telepon Kantin, Email Kantin</p>
</div>

</body>
</html>
