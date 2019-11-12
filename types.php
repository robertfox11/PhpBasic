<?php

$numero  = 54;
echo gettype($numero).'</br> ';
$decimal = 27.9;
echo gettype($decimal).'</br>';
$null = null;
echo gettype($null);
$texto ='soy un texto $ '.'<br>';
echo $texto;
echo gettype($texto).'</br>';
//boolean
$boolean = true;
echo $boolean;
echo gettype($boolean);

$animals = array('gato','perro');
var_dump($animals);

$animals = ['gato','perro'];
var_dump($animals);
echo $animals[1];
?>
