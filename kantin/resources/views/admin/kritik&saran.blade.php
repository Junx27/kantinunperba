<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran Konsumen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Kritik dan Saran Konsumen</h1>

        <!-- Komentar dan Kritikan dari Konsumen -->
        <?php
        // Contoh data komentar dan kritikan dari konsumen (dapat diambil dari database)
        $comments = [
            ["nama" => "John Doe", "komentar" => "Pelayanan sangat ramah dan cepat! Terima kasih banyak.", "timestamp" => "2024-03-15 10:30:00"],
            ["nama" => "Jane Smith", "komentar" => "Saya menyarankan untuk meningkatkan kualitas produk.", "timestamp" => "2024-03-14 09:45:00"],
            // Tambahkan data komentar dan kritikan lainnya sesuai kebutuhan
        ];

        // Tampilkan komentar dan kritikan
        foreach ($comments as $comment) {
            ?>
            <div class="border p-4 mb-4 rounded-lg">
                <div class="text-gray-800 font-bold mb-2"><?= $comment['nama'] ?></div>
                <p class="text-gray-700"><?= $comment['komentar'] ?></p>
                <div class="text-gray-600 text-sm mt-2"><?= date("d M Y H:i", strtotime($comment['timestamp'])) ?></div>
            </div>
            <?php
        }
        ?>

        <!-- Akhir Komentar dan Kritikan -->

    </div>
</body>
</html>

