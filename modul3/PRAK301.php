<html>
    <form method="POST">
        <label for="jumlah">Jumlah Peserta : </label>
        <input type="number" name="peserta"></br>
        <button type="submit">Cetak</button>
    </form>
</html>

<?php
    $peserta = NULL;

    if($_SERVER ["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['peserta'])){
            $peserta = $_POST['peserta'];
         }
    }

    $i = 1; 

    while($i <= $peserta){
        if($i % 2 == 0){
            echo "<h3 style=color:green>Peserta ke-$i </h3>";
        } else {
            echo "<h3 style=color:red>Peserta ke-$i </h3>";
        }
        $i++;
    }
?>
