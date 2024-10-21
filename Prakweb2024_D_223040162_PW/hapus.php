<?php
require 'functions.php';
$id = $_GET["id"];

if(hapus($id)>0){
    echo "
            <script>
                alert('Buku berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Buku gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
}

?>