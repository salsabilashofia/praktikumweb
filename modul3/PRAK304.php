<html>
<?php
    $jumlah = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") { $jumlah = (int)$_POST["jumlah"];}
    if (isset($_POST['tambah'])) {$jumlah += 1;}
    if (isset($_POST['kurang'])) {$jumlah -= 1;}
        if (empty($jumlah)) { ?>
            <form action="" method="post">
                <label for="jumlah">Jumlah Bintang : </label>
                <input type="text" name="jumlah"><br>
                <button type="submit" name="kirim">Submit</button>
            </form>
        <?php }
        if(!empty($jumlah)){
            echo "Jumlah bintang : $jumlah " ?> <br>
            <?php
            for($i = 0; $i < $jumlah; $i++){
                echo "<img width='50 px' height='50 px' img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'> &nbsp";
            }
            ?>
            <form method="post">
            <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
        <?php }
    ?>
</html>