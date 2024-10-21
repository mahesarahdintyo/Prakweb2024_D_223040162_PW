<?php
require 'functions.php';
$book = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <a href="tambah.php">Tambah Buku</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
    <?php foreach($book as $row) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Edit</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?');">Delete</a>
            </td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["tahun"] ?></td>
            <td>
                <img src="img/<?= $row["gambar"]?>" alt="" width="100">
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
    
</body>
</html>