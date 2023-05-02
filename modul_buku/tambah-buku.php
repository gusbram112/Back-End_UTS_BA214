<?php
include '../modul_kategori/proses-list-kategori.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
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
            <h2>Tambah Data Buku</h2>
            <form method="post" action="proses-tambah-buku.php" enctype="multipart/form-data">
                <p>Judul</p>
                <p><input type="text" name="judul"></p>

                <p>Kategori</p>
                <p>
                	<select name="kategori">
                        <?php foreach ($data_kategori as $kategori) : ?>
                            <option value="<?php echo $kategori['kategori_id'] ?>"><?php echo $kategori['kategori_nama'] ?></option>
                        <?php endforeach ?>
                	</select>
                </p>

                <p>Deskripsi</p>
                <p><textarea name="deskripsi"></textarea></p>

                <p>Jumlah</p>
                <p><input type="number" name="jumlah"></p>

                <p>Cover</p>
                <p><input type="file" name="cover"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-signup" value="Batal" onclick="self.history.back();">
                </p>

            </form>
        </div>

    </div>
</body>
</html>
