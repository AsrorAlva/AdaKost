<?php

require 'function.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Memanggil fungsi login
    $user = login($email, $password);

    if ($user) {
      // Login berhasil
      // Alihkan ke halaman yang sesuai dengan jenis pengguna (pengguna atau penyedia)
      if ($user['jenis_pengguna'] === 'pengguna') {
        header("Location: Pengguna.php");
        exit();
      } else if ($user['jenis_pengguna'] === 'penyedia') {
        header("Location: Penyedia.php");
        exit();
      }
    } else {
      // Login gagal
      echo "<script>
              alert('Login gagal. Periksa kembali email dan password Anda.');
            </script>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Daftar</title>
  <link rel="stylesheet" href="Login.css">
  <link rel="icon" href="image/Logo.png" />
</head>
<body>
<div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <div class="login-tabs">
        <button class="tab-btn active" data-tab="pengguna">Pengguna</button>
        <button class="tab-btn" data-tab="penyedia-kost">Penyedia Kost</button>
      </div>
      <div id="pengguna" class="tab-content">
        <form id="pengguna-form" action="" method="POST">
          <input type="text" placeholder="Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <button type="submit" name="login">Masuk</button>
        </form>
        <div class="register-link">
          <p>Belum punya akun? <a href="Daftar.php">Daftar</a></p>
        </div>
      </div>
      <div id="penyedia-kost" class="tab-content" style="display: none;">
        <form id="penyedia-form" action="" method="POST">
          <input type="text" placeholder="Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <button type="submit" name="login">Masuk</button>
        </form>
        <div class="register-link">
          <p>Belum punya akun? <a href="Daftar.php">Daftar</a></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Ambil elemen-elemen yang diperlukan
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    // Tambahkan event listener untuk setiap tombol tab
    tabButtons.forEach(button => {
      button.addEventListener("click", function() {
        // Hapus kelas 'active' dari semua tombol tab
        tabButtons.forEach(btn => btn.classList.remove("active"));
        // Sembunyikan semua konten tab
        tabContents.forEach(content => (content.style.display = "none"));

        // Tambahkan kelas 'active' pada tombol yang diklik
        this.classList.add("active");
        // Tampilkan konten tab yang sesuai dengan tombol yang diklik
        const tabId = this.getAttribute("data-tab");
        const tabContent = document.getElementById(tabId);
        tabContent.style.display = "block";
      });
    });
  </script>
</body>
</html>
