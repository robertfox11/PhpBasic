<?php

function calculadora($numero1, $numero2){
    //Instrucciones a ejecutar
    $suma= $numero1 + $numero2;
    $resta= $numero1 - $numero2;
    $multiplicacion= $numero1 * $numero2;
    $division= $numero1 / $numero2;
    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Multiplicacion: $multiplicacion </br>";
    echo "Division: $division </br>";
}
calculadora(10,30);
?>

