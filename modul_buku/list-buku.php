<?php

// ... ambil data dari database
include 'proses-list-buku.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
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
            <h1>Daftar Buku</h1>
            <div class="btn-tambah-div">
                <a href="tambah-buku.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_buku)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Cover</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_buku as $buku) : ?>
                <tr>
                    <td align="center"><?php echo $buku['buku_judul'] ?></td>
                    <td align="center"><?php echo $buku['kategori_nama'] ?></td>
                    <td align="center"><?php echo $buku['buku_deskripsi'] ?></td>
                    <td align="center"><?php echo $buku['buku_jumlah'] ?></td>
                    <td align="center"><img class="buku-cover" src="cover/<?php echo $buku['buku_cover'] ?>"></td>
                    <td align="center">
                        <a href="edit-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
