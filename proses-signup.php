<?php

include 'connection.php';

$petugas_nama       = $_POST['petugas_nama'];
$username           = $_POST['username'];
$password_petugas   = md5 ($_POST['password_petugas']);

$query = "INSERT INTO petugas (petugas_nama, username, password_petugas) 
    VALUES ('$petugas_nama', '$username', '$password_petugas')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    echo "<script>alert('Data Petugas Berhasil Disimpan!'); window.location = 'login.php';</script>";
} else {
    echo "<script>alert('Isi Data Dengan Benar!'); window.location = 'signup.php';</script>";
}