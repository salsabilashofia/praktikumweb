<html>
    <form method="post">
        <label for="">Batas Bawah :</label>
        <input type="text" name ="batasbawah"></br>
        <label for="">Batas Atas :</label>
        <input type="text" name ="batasatas"></br>
        <input type="submit" value="Cetak">
    </form>
<?php
    $bawah = $atas = null;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['batasbawah'])){
            $bawah = $_POST['batasbawah'];
        }
        if(isset($_POST['batasatas'])){
            $atas = $_POST['batasatas'];
        }
    } 
    do{
        if($bawah>$atas){
            echo "batas bawah tidak bisa lebih besar";
        } else {
            if(($bawah+7)%5==0){    
                echo "<img width='20 px' height='20 px' src ='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'> ";
            }
        else {
            echo " $bawah";
        }
    }
    $bawah++;
    } while($bawah<=$atas);
?>
</html>