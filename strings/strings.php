<?php
//imprimir cadena de texto
$imprimir ="Imprimiendo Texto";
echo '<br>';
print_r($imprimir);
//contar caracters
echo '<br>';
//PAra no interpretar variable en un texto es comilla simples
$textoNoIntepretaVariable ='Soy un texto imprimir no interpreto variable';
echo $textoNoIntepretaVariable;
echo '<br>';
//Texto que interpreta variable
$TextoInterpretaVariable ="Texto interpreta variable: $imprimir";
$OtraTextoInterpretaVariable ='Texto intepreta variable '.$imprimir;
echo $TextoInterpretaVariable;
echo '<br>';
echo $OtraTextoInterpretaVariable;
echo '<br>';

//contando texto
$cadena ="hola";
echo strlen($cadena);
//función que permita obtener la posición de la primera ocurrencia de un texto dentro de una cadena de texto
echo '<br>';
$frase ="La Busqueda del tesoro ";
echo strpos($frase, "Busqueda");

echo '<br>';
//reemplazar una cadena de texto sin que tenga en cuenta mayuscula y miniscula
$frase = str_replace("tesoro", "oro", $frase);

echo $frase;

echo '<br>';
echo "Convertir de mayuscula a minuscula:". strtolower($frase);
//convertir de minuscula a mayuscual
echo '<br>';
echo "Convertir de minuscula a Mayuscula:". strtoupper($frase);
echo '<br>';
//EXtracion de texto 
echo '<br>';
echo 'Extracion de texto '.substr($frase,3 , -1); 
//Escribir n veces un texto
echo '<br>';
echo str_repeat($frase, 5);


?>
