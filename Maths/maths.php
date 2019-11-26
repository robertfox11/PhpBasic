<?php

echo "</br>";
$valorRedondeado1 = 10;
$valorRedondeado2 = 20;
echo "Numero aleatorio entre 10 y 40 :". rand($valorRedondeado1, $valorRedondeado2);
echo "</br>";
//es dar un valor positivo 
$valorAbsoluto = -20.7;
echo "Valor absoluto ". abs($valorAbsoluto);
echo "</br>";
//redondeado al alsa
$valorAlto= 20.26;
echo "Valor redondeado mas alto".ceil($valorAlto);
echo "</br>";
//Redondeado a al baja
$valorBaja = 25.99;
echo "El valor redondeado a la baja".floor($valorBaja);
//redondear al partir del segun valor 
echo "redondear". round(7.9854, 2);
?>

