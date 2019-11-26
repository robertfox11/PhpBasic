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
//Texto que interpreta variable con comillas dobles
$TextoInterpretaVariable ="Texto interpreta variable: $imprimir";
// Concatenar una variable texto declarada previa mente con un prunto
$OtraTextoInterpretaVariable ='Texto intepreta variable '.$imprimir;
// Concatenar una variable texto declarada previa mente con un prunto
echo $TextoInterpretaVariable."<br>";
echo '<br>';
echo $OtraTextoInterpretaVariable;
echo '<br>';

//strlen — Obtiene la longitud de un string
$cadena ="hola";
echo strlen($cadena);

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
//EXtracion de texto  función que permita obtener una subcadena de texto a partir de la posición
echo '<br>';
echo 'Extracion de texto '.substr($frase,3 , -1); 
//Escribir n veces un texto
echo '<br>';
echo str_repeat($frase, 5);


//función que permita obtener la posición de la primera ocurrencia de un texto dentro de una cadena de texto
echo '<br>';
$frase ="La Busqueda del tesoro ";
echo strpos($frase, "Busqueda");
?>
