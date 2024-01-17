<?php
require_once 'function.php';

// Mendapatkan ID kos dari parameter URL
$ID = isset($_GET['id']) ? $_GET['id'] : '';

// Query untuk mendapatkan detail kos berdasarkan ID
$query = "SELECT * FROM liat_detail_kos WHERE id = '$ID'";
$result = $koneksi->query($query);

// Menampilkan detail kos jika ditemukan
if ($result && $result->num_rows > 0) {
    $liat_detail_kos = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Detail Kos</title>
    </head>
    <body>
        <h1><?php echo $liat_detail_kos['ID']; ?></h1>
        <p>Nama: <?php echo $liat_detail_kos['NAMA']; ?></p>
        <p>Lokasi: <?php echo $liat_detail_kos['LOKASI']; ?></p>
        <p>Harga: Rp <?php echo number_format($liat_detail_kos['HARGA'], 0, ',', '.'); ?></p>
        <p><?php echo $liat_detail_kos['DESKRIPSI']; ?></p>
    </body>
    </html>
    <?php
} else {
    echo 'Kos tidak ditemukan.';
}

// Menutup koneksi database
$koneksi->close();
?>