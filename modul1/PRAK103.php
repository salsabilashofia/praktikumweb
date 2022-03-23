<?php
    $c = 37.841;
    $f = (9/5*$c)+32;
    $r = 4/5*$c;
    $k = $c+273;

    echo "Fahrenheit (F) = ";
    echo number_format ("$f",4);
    echo "<br/>";
    echo "Reamur (R) = ";
    echo number_format ("$r",4);
    echo "<br/>";
    echo "Kelvin (K) = ";
    echo number_format ("$k",4);
    echo "<br/>";
?>