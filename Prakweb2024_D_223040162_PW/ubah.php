<?php
require 'functions.php';

$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('Buku berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
         <script>
                alert('Buku gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$buku["id"];?>" >
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required value="<?= $buku["judul"];?> ">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required value="<?= $buku["tahun"];?> ">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $buku["gambar"];?> ">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Buku</button>
            </li>
        </ul>
    </form>
</body>
</html>