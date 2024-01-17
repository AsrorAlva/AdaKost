<?php
function koneksi() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'adakos';

    // Membuat koneksi
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " " . mysqli_connect_error());
    }

    return $koneksi;
}

// Memanggil fungsi koneksi
$Koneksi = koneksi();
?>
