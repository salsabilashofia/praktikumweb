<?php require('./Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_member'])) ? "<title>Update Data | Member</title>" : "<title>Tambah Data | Member</title>" ?>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="10" required> <?php echo (isset($_GET['id_member'])) ?  $result[0]["alamat"]  : ""; ?> </textarea> <br></td>
            </tr>
            <tr>
                <td>Tanggal Mendaftar</td>
                <td><input type="datetime-local" name="tanggaldaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td><input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["password"] . "" : "value = '' "; ?> required><br></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tanggaldaftar = date_create($_POST['tanggaldaftar']);
        $tanggaldaftar = date_format($tanggaldaftar, "Y-m-d H:i:s");
        print_r($_POST);
        tambahmember($_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tanggaldaftar, $_POST['tgl_terakhir_bayar'], $_POST['password']);
    }
    if (isset($_POST['update'])) {
        $tanggaldaftar = date('Y-m-d H:i:s', strtotime($_POST['tanggaldaftar']));
        updatemember($_GET['id_member'], $_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tanggaldaftar, $_POST['tgl_terakhir_bayar'], $_POST['password']);
    }
    ?>
</body>
</html>