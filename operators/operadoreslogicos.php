<?php
//Ejemplos de operadores logicos 
$edad = 19;
$edad2 =64;
$edadOficial = 18;

if($edadOficial >= $edad && $edadOficial <= $edad2){
    echo 'Estas en edad de trabajar';
}else {
    echo 'No puede Trabajar'.'<br>';
}

//Operador de comparacion and logico
$pais = "EEUU";
if($pais == "Mexico" || $pais =="España" || $pais =="Ecuador"){
    echo 'En este pais se habla español';
} else {
    echo 'Este pais no habla español';
}
?>


