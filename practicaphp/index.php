<?php
// Mostrar un mensaje por pantalla dentro de la etiqueta <h1> de HTML
echo "<h1>Hola PHP</h1>";

// Recorremos el array lo metemos en li
$tecnology = array('Java', 'PHP', 'Python', 'JavaScript');
echo "<ul>";


foreach($tecnology as $tecnology){
    echo "<li>". $tecnology."</li>";
}

echo "</ul>";
?>