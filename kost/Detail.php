<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/Logo2.png" />
  <title>Detail</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .kost-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      width: 800px;
      margin-top: 50px;
      border: 1px solid #ccc;
      padding: 20px;
    }

    .kost-image {
      width: 300px;
      height: 300px;
      background-color: #f2f2f2;
      margin-right: 20px;
    }

    .kost-description {
      flex: 1;
    }

    .kost-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .kost-info {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .kost-action {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .kost-action-button {
      padding: 10px 40px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      text-align: center;
      border-radius: 5px;
      margin-top: 131px;
    }
  </style>
</head>
<body>
  <div class="kost-container">
    <?php
      // Koneksi ke database
      $koneksi = mysqli_connect("localhost", "root", "", "adakos");

      // Cek koneksi
      if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
      }

      // Query untuk mengambil informasi kost dari database berdasarkan nama kos dan kota
      $namaKos = "Melati"; // Ganti dengan nama kos yang diinginkan
      $kota = "jakarta";
      $query = "SELECT * FROM kos WHERE nama_kos = '$namaKos' AND kota = '$kota'";
      $result = mysqli_query($koneksi, $query);

      if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="kost-image">
        <img
              src="image/kamarJakarta.jpg"
              border="0"
              width="100%"
              height="100%"
            />
        </div>
        <div class="kost-description">
          <h2 class="kost-title"><?php echo $row['nama_kos']; ?></h2> 
          <p class="kost-info"><?php echo $row['deskripsi']; ?></p>
          <p class="kost-info"><?php echo $row['alamat']; ?></p>
          <p class="kost-info"><?php echo $row['fasilitas_kamar']; ?></p>
        </div>
        <div class="kost-action">
          <a href="Pembayaran.php" class="kost-action-button">Ajukan Sewa</a>
        </div>
        <?php
      }

      // Menutup koneksi database
      mysqli_close($koneksi);
    ?>
  </div>
</body>
</html>
