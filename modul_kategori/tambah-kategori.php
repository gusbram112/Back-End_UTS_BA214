<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../css/mainstyle.css">
</head>
<body>
    <div class="container clearfix" style="margin-top: 120px;">
        <center>
			<img src="../img/stikombali1.png" style="width:10%; padding-top:20px">
	    </center>
        <h1 align="center">SISTEM INFORMASI PERPUSTAKAAN</h1>

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h3>Tambah Data Kategori</h3>
            <form method="post" action="proses-tambah-kategori.php">
                <p>Kategori</p>
                <p><input type="text" name="kategori"></p>
                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
