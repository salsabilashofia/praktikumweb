<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
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
            <th>Nama</th>
            <th>No. Member</th>
            <th>Alamat</th>
            <th>Tanggal Pendaftaran</th>
            <th>Tanggal Bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("member") ?>
    </table>
    <br>
    <a href="FormMember.php"><button>Tambah Data</button></a>
</body>
</html>