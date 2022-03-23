<div>
    <form method = "POST">
        <label>Nilai : </label>
        <input type="text" name="nilai"><br>
        <input type="submit" name="konversi" value="Konversi"><br>
    </form>
</div>

<?php
$nilai = NULL;
if($_SERVER ["REQUEST_METHOD"]=="POST") {
    if(isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];
    }
}

if($nilai == 0){
    echo "<h2>Hasil: Nol</h2>";
} elseif (0 < $nilai && $nilai < 10 ){
    echo "<h2>Hasil: Satuan</h2>";
} elseif (10 < $nilai && $nilai< 20 ){
    echo "<h2>Hasil: Belasan</h2>";
} elseif ($nilai == 10 || 19 < $nilai && $nilai< 100 ){
    echo "<h2>Hasil: Puluhan</h2>";
} elseif (99 < $nilai && $nilai < 1000 ){
    echo "<h2>Hasil: Ratusan</h2>";
} elseif ($nilai == 1000){
    echo "<h2>Hasil: Anda Menginput Melebihi Limit Bilangan</h2>";
}
?>