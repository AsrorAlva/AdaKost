<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="image/Logo.png" width="300" height="200">
  <link rel="stylesheet" href="Area.css" />
  <title>AdaKos</title>
</head>
<body>
  <header>
    <h1>
      <a href= "index.php">
        <img src="image/Logo.png" alt="" class="Logo" />
      </a>
    </h1>
    <nav>
      <ul>
        <li><a href="PB.php">Pusat Bantuan</a></li>
        <li><a href="SK.php">Syarat dan Ketentuan</a></li>
        <li><a href="Masuk.php">Masuk</a></li>
      </ul>
    </nav>
  </header>
  <div class="content-kost">
    <div class="content-kost-b1">
      <?php
      // Query untuk mengambil informasi kos dari database
      $koneksi = mysqli_connect("localhost", "root", "", "adakos");
      $query = "SELECT * FROM kos WHERE kota = 'jakarta'";
      $result = mysqli_query($koneksi, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <img src="image/Jakarta.jpg<?php echo $row['foto']; ?>" border="0" width="225px" height="325px" />
        <table>
          <tbody>
            <tr>
              <td>
                <div class="nama" data-label=""><?php echo $row['nama_kos']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="fasilitas" data-label=""><?php echo $row['fasilitas_kamar']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="alamat" data-label=""><?php echo $row['alamat']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="harga" data-label="">Rp <?php echo $row['harga_kamar']; ?></div>
              </td>
            </tr>
          </tbody>
        </table>
        <?php
      }
      ?>
    </div>
  </div>
</body>
</html>
