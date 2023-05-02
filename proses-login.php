<?php
session_start();
include "connection.php";

// dari <input name="username" ...
$username = $_POST['username'];
$password_petugas = md5($_POST['password_petugas']);

// ... periksa username

$query = "SELECT * FROM petugas WHERE username = '$username'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

if ($data_user != null) {

    // ... jika hasil tidak null berarti user ketemu,
    // ... lanjut periksa password

    if ($password_petugas == $data_user['password_petugas']) {
        $_SESSION['user'] = $data_user;
        header('Location: home.php');
    } else {
        echo "<script>alert('Password Salah!'); window.location = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Username atau Password Salah!'); window.location = 'login.php';</script>";
}
