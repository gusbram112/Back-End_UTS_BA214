<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Petugas</title>
    <link rel="stylesheet" href="css/mainstyle.css">
</head>
<body>
    <div class="container clearfix" style="margin-top: 120px;">
        <center>
			<img src="img/stikombali1.png" style="width:10%; padding-top:20px">
	    </center>
        <h1 align="center">SISTEM INFORMASI PERPUSTAKAAN</h1>
        <div class="sidebar">
            <ul>
                <li><a href="modul_kategori/list-kategori.php">Data Kategori</a></li>
                <li style="height:10px"></li>
                <li><a href="modul_buku/list-buku.php">Data Buku</a></li>
                <li style="height:10px"></li>
                <li><a href="modul_anggota/list-anggota.php">Data Anggota</a></li>
                <li style="height:10px"></li>
                <li><a href="modul_peminjaman/pinjam-data.php">Peminjaman</a></li>
                <li style="height:10px"></li>
                <li><a href="modul_pengembalian/list-pengembalian.php">Pengembalian</a></li>
                <li style="height:10px"></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1 align="center">Selamat Datang, <?php echo $_SESSION['user']['petugas_nama']; ?></h1>
            <p align="justify" style="padding:20px">Sistem Informasi Perpustakaan atau Sistem Informasi Manajemen Perpustakaan merupakan Sistem Informasi Manajemen (SIM) yang dipakai untuk mengelola data buku, artikel, jurnal dan majalah ilmiah, surat kabar, dokumen digital, thesis, laporan riset, microfilm, basis data konten digital (Proquest, misalnya), dan semua bahan pustaka yang berada di sebuah perpustakaan.</p>
        </div>
    </div>
</body>
</html>
