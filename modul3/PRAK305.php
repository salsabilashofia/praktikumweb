<html>
<form method="post">
    <input type="text" name="kata">
    <button type="submit" name="submit">submit</button>
</form>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(isset($_POST['submit'])){
        $kata = $_POST['kata'];
        echo "<h2>Input:</h2>";
        echo "$kata";
        
        echo "<h2>Output:</h2>";

        $panjangkata = strlen($kata);

        for($i = 0; $i<$panjangkata; $i++){
            $hurufbesar = strtoupper($kata);
            echo $hurufbesar[$i];

            for($j=1; $j<$panjangkata; $j++){
                $hurufkecil = strtolower($kata);
                echo $hurufkecil[$i];
            }   
        }
    }
}
?>