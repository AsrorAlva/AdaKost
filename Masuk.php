<?php
require 'function1.php';

// Proses Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $user = login($email, $password, $role);

    if ($user) {
        // Login berhasil, arahkan pengguna ke halaman yang sesuai dengan peran (role)
        if ($role == 'pelanggan') {
            header('Location: pengguna.php');
            exit();
        } elseif ($role == 'pemilik') {
            header('Location: penyedia.php');
            exit();
        }
    } else {
        echo "Email atau password salah!";
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
      </div>
      <div id="pengguna" class="tab-content">
        <form id="pengguna-form" action="" method="post">
          <input type="text" placeholder="Email" name="email" required>
          <input type="password" placeholder="Password" name="password" required>

           <!-- Dropdown untuk peran pengguna -->
        <select name="role" class="dropdown" required>
          <option value="pelanggan" name="pelanggan">Pelanggan Kost</option>
          <option value="pemilik" name="pemilik">Pemilik Kost</option>
        </select>
        <br><br> 

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
