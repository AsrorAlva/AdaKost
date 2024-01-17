<?php
$conn = mysqli_connect('localhost', 'root', '', 'adakos');

function login($email, $password, $role)
{
    global $conn;

    $email = strtolower(stripslashes($email));
    $query = "";

    if ($role == "pelanggan") {
        $query = "SELECT * FROM pelanggan WHERE email = '$email'";
    } elseif ($role == "pemilik") {
        $query = "SELECT * FROM pemilik WHERE email = '$email'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            // Lakukan verifikasi password dan lakukan tindakan sesuai keberhasilan verifikasi
            if ($password == $user['password']) {
                return true;
            }
        }
    }

    return false;
}
?>
