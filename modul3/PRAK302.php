<html>
    <?php
    if(isset($_POST['cetak'])){
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];
    }
    ?>
    <form method="post">
        <label for="">Tinggi :</label>
        <input type="text" name = "tinggi"></br>
        <label for= "">Alamat Gambar :</label>
        <input type="text" name ="gambar"></br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['cetak'])){
    if($tinggi>0){
        $i = 1;
        while($i <= $tinggi){
            $x = 1;
            while($x < $i){
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
                $x++;
            }
            $x = $i;
            while($x<=$tinggi){
                echo '<img width="30 px" height="30 px" img src="'.$gambar.'"/>';
                $x++;
            }
            $i++;
            echo "<br>";
        }
    }
}

?>