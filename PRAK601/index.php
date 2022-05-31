<?php
session_name("login");
session_start();
if (!isset($_SESSION['login']))
{
	header("location: errorpage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
</head>
<body>
    <table style = "">
        <tr>
            <th><a href="Buku.php">Data Buku<br></a></th>
            <th><a href="Member.php">Data Member<br/></a></th>
            <th><a href="Peminjaman.php">Data Peminjaman<br/></a></th>
            <th><a href="FormLogin.php">Log out</a></th>
        </tr>
    </table>
</body>
</html>