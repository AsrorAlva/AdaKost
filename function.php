<?php
$conn = mysqli_connect('localhost', 'root', '', 'adakos');

function registrasi($data)
{
    global $conn;

    $email = strtolower(stripslashes($data["email"]));
    $username = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek email sudah ada atau belum di tabel 'pemilik'
    $resultpemilik = mysqli_query($conn, "SELECT email FROM pemilik WHERE email = '$email'");
    if (mysqli_fetch_assoc($resultpemilik)) {
        echo "<script>
                alert('Email sudah terdaftar sebagai pemilik!')
              </script>";
        return false;
    }

    // cek email sudah ada atau belum di tabel 'pelanggan'
    $resultpelanggan = mysqli_query($conn, "SELECT email FROM pelanggan WHERE email = '$email'");
    if (mysqli_fetch_assoc($resultpelanggan)) {
        echo "<script>
                alert('Email sudah terdaftar sebagai pelanggan!')
              </script>";
        return false;
    }

    // cek informasi passwordnya
    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    // tambahkan user baru ke database berdasarkan peran ('pemilik' atau 'pelanggan')
    $role = $data["role"];
    if ($role === "pemilik") {
        mysqli_query($conn, "INSERT INTO pemilik (email, username, password) VALUES ('$email', '$username', '$password')");
    } elseif ($role === "pelanggan") {
        mysqli_query($conn, "INSERT INTO pelanggan (email, username, password) VALUES ('$email', '$username', '$password')");
    }

    return mysqli_affected_rows($conn);
}

function login($email, $password)
{
    global $conn;

    $email = strtolower(stripslashes($email));
    $querypemilik = "SELECT * FROM pemilik WHERE email = '$email'";
    $querypelanggan = "SELECT * FROM pelanggan WHERE email = '$email'";

    $resultpemilik = mysqli_query($conn, $querypemilik);
    $resultpelanggan = mysqli_query($conn, $querypelanggan);

    if ($resultpemilik && mysqli_num_rows($resultpemilik) > 0) {
        $user = mysqli_fetch_assoc($resultpemilik);
        if (password_verify($password, $user['password'])) {
            return $user; // Login berhasil sebagai pemilik, mengembalikan data pengguna
        }
    } elseif ($resultpelanggan && mysqli_num_rows($resultpelanggan) > 0) {
        $user = mysqli_fetch_assoc($resultpelanggan);
        if (password_verify($password, $user['password'])) {
            return $user; // Login berhasil sebagai pelanggan, mengembalikan data pengguna
        }
    }

    return false; // Login gagal
}
?>
