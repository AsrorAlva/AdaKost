<?php
// Fungsi untuk membuat koneksi ke database
function connectDB() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'adakos';

    // Buat koneksi
    $conn = mysqli_connect($host, $username, $password, $database);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}

// Fungsi untuk memeriksa apakah data kos dengan nama yang sama sudah ada dalam database
function isKosExist($nama) {
    $conn = connectDB();

    $query = "SELECT COUNT(*) as total FROM kos WHERE nama_kos = '$nama'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];

        if ($total > 0) {
            return true; // Data kos sudah ada dalam database
        }
    }

    return false; // Data kos belum ada dalam database

    // Tutup koneksi
    mysqli_close($conn);
}

// Fungsi untuk menyimpan data kos ke database
function saveKos($nama, $alamat, $deskripsi, $tipe, $fasilitas, $harga, $foto, $peraturan, $kontak, $kota) {
    $conn = connectDB();

    // Siapkan query untuk menyimpan data kos
    $fasilitas_kamar = implode(", ", $fasilitas);
    // Ubah $fasilitas menjadi string dengan menggabungkan nilai-nilainya menggunakan implode

    $query = "INSERT INTO kos (nama_kos, alamat, deskripsi, tipe_kamar, fasilitas_kamar, harga_kamar, foto, peraturan, kontak, kota) 
              VALUES ('$nama', '$alamat', '$deskripsi', '$tipe', '$fasilitas_kamar', '$harga', '$foto', '$peraturan', '$kontak', '$kota')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa hasil eksekusi query
    if ($result) {
        echo "Data kos berhasil disimpan.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>