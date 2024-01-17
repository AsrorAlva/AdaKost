<?php
require 'function.php';

if (isset($_POST["register"])) {
    $data = [
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "password2" => $_POST["password2"],
        "role" => $_POST["role"] // Menambahkan field "role" ke dalam data
    ];

    if (registrasi($data) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
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
  <link rel="stylesheet" href="Daftar.css">
  <link rel="icon" href="image/Logo.png" />
</head>
<body>
<div class="register-container">
      <h2>Daftar</h2>
      <form method="post" action="">
        <input type="text" name="username" placeholder="Nama Lengkap">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Konfirmasi Password">

        <!-- Dropdown untuk peran pengguna -->
        <select name="role" class="dropdone">
          <option value="pelanggan" name="pelanggan">Pelanggan Kost</option>
          <option value="pemilik" name="pemilik">Pemilik Kost</option>
        </select>
        <br></br> 

        <button type="submit" name="register">Daftar</button>
      </form>
      <div class="login-link">
        <p>Sudah punya akun? <a href="Masuk.php">Masuk</a></p>
      </div>
    </div>
</body>
</html>