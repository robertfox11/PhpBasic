<?php

//condicional IF
$dia = "lunes";
if ($dia == 'lunes') {
    echo '<h1>' . $dia . '</h1>';
}

$mes = "Noviembre";
if ($mes == 'Octubre') {
    echo $mes;
} else {
    echo 'no es mes de octubre' . '<br>';
}

$minuto = 12;
if ($minuto < 10) {
    echo $minuto . ' si el minuto actual es inferior a 10' . '<br>';
} elseif ($minuto > 15) {
    echo $minuto . ' si el minuto actual es superior a 15' . '<br>';
} else {
    echo ' si el minuto actual es superio a 10 y menor que 15'.'<br>';
}

//Switch
$semana = 5;
echo 'Mostrando el dia de la semana'.'<br>';
switch ($semana) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
}
?>

