<?php
//for(variable contador,condicion,incremento o decremento contador){blque de instrucciones
//}
$result =0;

for($i=0;$i<10;$i++){
    $result = $result+$i;
    echo "<p>".$result."</p>";
}
echo "<h1>El resultado es: $result</h1>";

$nombres = array("Robert", "Dennis");

foreach($nombres as $name){
    echo $name."<br>";
}


?>

