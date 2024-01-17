<?php
include 'functionpa.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai dari inputan form
    $nama = $_POST['nama_kos'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $tipe = $_POST['tipe_kamar'];
    $fasilitas = $_POST['fasilitas'];
    $harga = $_POST['harga_kamar'];
    $peraturan = $_POST['peraturan'];
    $kontak = $_POST['kontak'];
    $kota = $_POST['kota'];
    $path = "image/".$foto;

    // Periksa apakah ada file gambar yang diunggah
    if (!empty($foto['name'])) {
        $file_name = $foto['name'];
        $file_tmp = $foto['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        // Generate nama unik untuk file gambar
        $new_file_name = uniqid().'.'.$file_ext;

        // Tentukan lokasi direktori tujuan untuk menyimpan file gambar
        $upload_path = 'image/'.$new_file_name;

        // Pindahkan file gambar ke direktori tujuan
        if (move_uploaded_file($file_tmp, $upload_path)) {
            // File berhasil diunggah dan disimpan
            echo "File gambar berhasil diunggah dan disimpan.";
        } else {
            // Terjadi kesalahan saat memindahkan file
            echo "Gagal mengunggah file gambar.";
        }

        // Simpan nama file gambar ke dalam variabel $foto
        $foto = $new_file_name;
    } else {
        // Tidak ada file gambar yang diunggah, atur $foto menjadi null atau string kosong, sesuai kebutuhan
        $foto = null;
    }

    // ...

    // Simpan data ke database
    if (saveKos($nama, $alamat, $deskripsi, $tipe, $fasilitas, $harga, $foto, $peraturan, $kontak, $kota) > 0) {
        echo "<script>
                alert('Data penyedia kost berhasil ditambahkan!');
              </script>";
    } else {
        echo "Gagal menambahkan data penyedia kost.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/Logo.png" />
    <link rel="stylesheet" href="penyedia.css" />
    <title>AdaKos</title>
  </head>
  <body>
    <header>
      <h1>
        <a href="index.php">
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
    <div class="container">
    <h1>Form Penyedia Kost</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <label for="nama">Nama Kost:</label>
      <input type="text" id="nama_kos" name="nama_kos" required>

      <label for="alamat">Alamat:</label>
      <input type="text" id="alamat" name="alamat" required>

      <label for="deskripsi">Deskripsi:</label>
      <textarea id="deskripsi" name="deskripsi" required></textarea>

      <label for="tipe">Tipe Kost:</label>
      <select id="tipe_kamar" name="tipe_kamar">
        <option value="eksklusif">Eksklusif</option>
        <option value="putri">Kost Putri</option>
        <option value="putra">Kost Putra</option>
        <option value="campur">Kost Campur</option>
      </select>

      <label for="fasilitas" name="fasilitas">Fasilitas:</label>
      
      <label for="fasilitas-ac" name>AC</label>
      <input type="checkbox" id="fasilitas-ac" name="fasilitas[]" value="AC">
      <label for="fasilitas-wifi">WiFi</label>
      <input type="checkbox" id="fasilitas-wifi" name="fasilitas[]" value="WiFi">
      <label for="fasilitas-TV">TV</label>
      <input type="checkbox" id="fasilitas-TV" name="fasilitas[]" value="TV">
      <label for="fasilitas-Lemari">Lemari</label>
      <input type="checkbox" id="fasilitas-Lemari" name="fasilitas[]" value="Lemari">
      <label for="fasilitas-Kulkas">Kulkas</label>
      <input type="checkbox" id="fasilitas-Kulkas" name="fasilitas[]" value="Kulkas">

      <label for="harga">Harga:</label>
      <input type="number" id="harga_kamar" name="harga_kamar" required>

      <label for="foto">Foto:</label>
      <input type="file" id="foto" name="foto" />

      <label for="peraturan">Peraturan Kost:</label>
      <textarea id="peraturan" name="peraturan"></textarea>

      <label for="kontak">Kontak:</label>
      <input type="text" id="kontak" name="kontak" required>

      <label for="kota">kota:</label>
      <select name="kota" id="kota">
    <option value="">Pilih Kota</option>
      <option value="jogja">Kos Yogyakarta</option>
      <option value="jakarta">Kos Jakarta</option>
      <option value="bandung">Kos Bandung</option>
      <option value="surabaya">Kos Surabaya</option>
      <option value="malang">Kos Malang</option>
      <option value="semarang">Kos Semarang</option>
      <option value="medan">Kos Medan</option>
      <option value="bali">Kos Bali</option>
      <option value="makassar">Kos Makassar</option>
      <option value="pontianak">Kos Pontianak</option>
      <option value="maluku">Kos Maluku</option>
      <option value="ambon">Kos Ambon</option>
      <option value="samarinda">Kos Samarinda</option>
      <option value="batam">Kos Batam</option>
      <option value="pekanbaru">Kos Pekanbaru</option>
      <option value="tangerang">Kos Tangerang</option>
      <option value="depok">Kos Depok</option>
      <option value="cirebon">Kos Cirebon</option>
      <option value="solo">Kos Solo</option>
      <option value="majalengka">Kos Majalengka</option>
      <option value="serang">Kos Serang</option>
      <option value="purwokerto">Kos Purwokerto</option>
      <option value="ponorogo">Kos Ponorogo</option>
      <option value="banyumas">Kos Banyumas</option>
      <option value="sragen">Kos Sragen</option>
      <option value="jombang">Kos Jombang</option>
      <option value="cilacap">Kos Cilacap</option>
      <option value="tasikmalaya">Kos Tasikmalaya</option>
      <option value="banjarmasin">Kos Banjarmasin</option>
      <option value="manado">Kos Manado</option>
      <option value="balikpapan">Kos Balikpapan</option>
      <option value="padang">Kos Padang</option>
      <option value="bandarlampung">Kos Bandar Lampung</option>
      <option value="bengkulu">Kos Bengkulu</option>
      <option value="gorontalo">Kos Gorontalo</option>
      <option value="jayapura">Kos Jayapura</option>
      <option value="palangkaraya">Kos Palangkaraya</option>
      <option value="mataram">Kos Mataram</option>
      <option value="palu">Kos Palu</option>
      <option value="kupang">Kos Kupang</option>
      <option value="jambi">Kos Jambi</option>
      <option value="palembang">Kos Palembang</option>
      <option value="bekasi">Kos Bekasi</option>
      <option value="bogor">Kos Bogor</option>
      <option value="Banyuwangi">Banyuwangi</option>
      <option value="Magelang">Magelang</option>
      <option value="Salatiga">Salatiga</option>
      <option value="Sleman">Sleman</option>
      <option value="Tuban">Tuban</option>
      <option value="Mojokerto">Mojokerto</option>
      <option value="Blitar">Blitar</option>
      <option value="Madiun">Madiun</option>
      <option value="Pasuruan">Pasuruan</option>
      <option value="Probolinggo">Probolinggo</option>
      <option value="Lumajang">Lumajang</option>
      <option value="Ngawi">Ngawi</option>
      <option value="Kediri">Kediri</option>
      <option value="Batu">Batu</option>
      <option value="Bondowoso">Bondowoso</option>
      <option value="Situbondo">Situbondo</option>
      <option value="Jember">Jember</option>
      <option value="Bojonegoro">Bojonegoro</option>
      <option value="Lamongan">Lamongan</option>
      <option value="Gresik">Gresik</option>
      <option value="Sidoarjo">Sidoarjo</option>
      <option value="Bima">Bima</option>
      <option value="Sumbawa">Sumbawa</option>
      <option value="Maumere">Maumere</option>
      <option value="Nganjuk">Nganjuk</option>
      <option value="Caruban">Caruban</option>
      <option value="Madura">Madura</option>
      <option value="Trenggalek">Trenggalek</option>
      <option value="Pacitan">Pacitan</option>
      <option value="Sukabumi">Sukabumi</option>
      <option value="Cianjur">Cianjur</option>
      <option value="Garut">Garut</option>
      </select> 
      <br></br>
      <input type="submit" value="Submit" name="saveKos">
      
    </form>
  </div>
  </body>
</html>
