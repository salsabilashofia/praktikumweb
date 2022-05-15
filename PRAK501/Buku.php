<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html>
<style>
    table,th,td {
        border-collapse: collapse; 
        border: solid black 1px; 
    }
</style>
<body>
    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?=tampildata("buku") ?>
    </table>
    <br>
    <a href="FormBuku.php"><button>Tambah Data</button></a>
</body>
</html>