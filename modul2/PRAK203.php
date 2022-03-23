<form action="" method="post">
    <table>
		<tr>
			<td>
                <label for="">Nilai : </label>
                <input type="text" name="suhu">
			</td>
		</tr>
		<tr>
			<td>
                <label for="">Dari : </label> <br/>
                <input type="radio" name="suhudari" value="celcius1" > Celsius <br/> 
                <input type="radio" name="suhudari" value="fahrenheit1"> Fahrenheit <br/>
                <input type="radio" name="suhudari" value="rheamur1"> Rheamur <br/>
                <input type="radio" name="suhudari" value="kelvin1"> Kelvin <br/>
			</td>
		</tr>
		<tr>
			<td>
                <label for="">Ke : </label> <br/>
                <input type="radio" name="suhuke" value="celcius2" > Celsius <br/> 
                <input type="radio" name="suhuke" value="fahrenheit2"> Fahrenheit <br/>
                <input type="radio" name="suhuke" value="rheamur2"> Rheamur <br/>
                <input type="radio" name="suhuke" value="kelvin2"> Kelvin <br/>
			</td>
		</tr>
        <tr>
            <td>
                <input type = "submit" name = "Submit" value = "Konversi">
            </td>
        </tr>
    </table>
</form>

<?php
    $suhu = $suhudari = $suhuke = "";
    if($_SERVER ["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['suhu'])){
            $suhu = $_POST['suhu'];
        }
        if(isset($_POST['suhudari'])){
            $suhudari = $_POST['suhudari'];
        }
        if(isset($_POST['suhuke'])){
            $suhuke = $_POST['suhuke'];
        }
        switch($suhudari){
            case "celcius1" :
                switch($suhuke){
                case "celcius2" :
                    echo "$suhu °C (Tidak terkonversi)";
                    break;
                case "fahrenheit2" :
                    $suhuterubah = $suhu * 9/5 + 32;
                    echo "<h1> Hasil Konversi: $suhuterubah °F</h1>";
                    break;
                case "rheamur2" :
                    $suhuterubah = $suhu * 4/5;
                    echo "<h1> Hasil Konversi: $suhuterubah °R</h1>";
                    break;
                case "kelvin2" :
                    $suhuterubah = $suhu + 273;
                    echo "<h1> Hasil Konversi: $suhuterubah °K</h1>";
                    break;
                default:
                    echo "";
                }
                break;
            case "fahrenheit1" :
                switch($suhuke){
                case "celcius2" :
                    $suhuterubah = ($suhu - 32) * 5/9;
                    echo "<h1> Hasil Konversi: $suhuterubah °C</h1>";
                    break;
                case "fahrenheit2" :
                    echo "$suhu °F (Tidak terkonversi)";
                    break;
                case "rheamur2" :
                    $suhuterubah = ($suhu - 32) * 4/9;
                    echo "<h1> Hasil Konversi: $suhuterubah °R</h1>";
                    break;
                case "kelvin2" :
                    $suhuterubah = ($suhu - 32) * 5/9 + 273;
                    echo "<h1> Hasil Konversi: $suhuterubah °K</h1>";
                    break;
                default:
                    echo "";
                }
                break;
            case "rheamur1" :
                switch($suhuke){
                case "celcius2" :
                    $suhuterubah = $suhu * 5/4;
                    echo "<h1> Hasil Konversi: $suhuterubah °C</h1>";
                    break;
                case "fahrenheit2" :
                    $suhuterubah = $suhu * 9/4 + 32;
                    echo "<h1> Hasil Konversi: $suhuterubah °F</h1>";
                    break;
                case "rheamur2" :
                    echo "$suhu °R (Tidak terkonversi)";
                    break;
                case "kelvin2" :
                    $suhuterubah = $suhu * 5/4 + 273;
                    echo "<h1> Hasil Konversi: $suhuterubah °K</h1>";
                    break;
                default:
                    echo "";
                }
                break;
            case "kelvin1" :
                switch($suhuke){
                case "celcius2" :
                    $suhuterubah = $suhu - 273 ;
                    echo "<h1> Hasil Konversi: $suhuterubah °C</h1>";
                    break;
                case "fahrenheit2" :
                    $suhuterubah = ($suhu - 273) * 9/5 + 32;
                    echo "<h1> Hasil Konversi: $suhuterubah °F</h1>";
                    break;
                case "rheamur2" :
                    $suhuterubah = ($suhu - 273) * 4/5;
                    echo "<h1> Hasil Konversi: $suhuterubah °R</h1>";
                    break;
                case "kelvin2" :
                    echo "$suhu °K (Tidak terkonversi)";
                    break;
                default:
                    echo "";
                }
                break;
            default:
                echo "";
            }
    }
?>