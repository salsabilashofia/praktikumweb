<html>
<style>
	td { 
        border: 1px solid;
		padding: 5px;
    }
</style>
<form method ="POST" action="">
    <label for="panjang">Panjang :</label> <input type="text"name="panjang"><br/>
    <label for="lebar">Lebar :</label> <input type="text"name="lebar"><br/>
    <label for="nilai">Nilai :</label><input type="text" name="nilai"><br/>
    <button type="submit" name="cetak">Cetak</button><br/>
</form>

<?php
    $panjang = $lebar = $nilai = "";
    if(isset($_POST['cetak'])){
        if(isset($_POST['panjang'])){
            $panjang = $_POST['panjang'];
        }
        if(isset($_POST['lebar'])){
            $lebar = $_POST['lebar'];
        }
        if(isset($_POST['nilai'])){
            $nilai = $_POST['nilai'];
        }
        $i = explode(" ",$nilai); 
        if($panjang * $lebar < count($i)){
            echo "<h3>Panjang nilai tidak sesuai dengan ukuran matrix</h3>";
        }
        else{ ?>
<table cellspacing="0" cellpadding ="0">
<?php
    for($a = 0 ; $a < $panjang ; $a++) {?>
    <tr>
        <?php for($b=0 ;$b < $lebar ; $b++){ ?>
    <td style="text-align: center;">
        <?php
        if(empty($i[($a * $panjang) + $b])){
            echo "";
        } else {
            echo $i[($a * $panjang) + $b];
        }
        ?>
    </td>
        <?php } ?>
    </tr> 
        <?php } ?>
</table>  <?php
        }
    }
?>
</html>
