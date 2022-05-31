<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
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
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?=tampildata("peminjaman") ?>
    </table>
    <br>
    <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
</body>
</html>