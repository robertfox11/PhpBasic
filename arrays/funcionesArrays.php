<?php
//Funcion que arregue un array
$peliculas =array('SuperHERO', 'El Libro de la selva', 'El rey leon');
array_push($peliculas, "Halo");

var_dump($peliculas);

echo '<br>';
//longitud de un array
$colores = array("azul","rojo","amarillo");
$numero_colores = sizeof($colores);
echo $numero_colores;
echo '<br>';
//Extre el ultimo elemento de un array
$ultimo = array_pop($peliculas);
echo $ultimo;
echo '<br>';
//combina dos omas arrays
$array1    = array("color" => "red", 2, 4);
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultado = array_merge($array1, $array2);
var_dump($resultado);;

?>

