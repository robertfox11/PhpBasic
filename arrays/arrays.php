<?php
//definimos un array simple de texto
$peliculas =array('SuperHERO', 'El Libro de la selva', 'El rey leon');
echo $peliculas[1];
echo '<br>';
//definimos un array numero y decimales
$numero = array(1,2,3,4,5,6.5);
echo $numero[5];
echo '<br>';
//Array multidimensionales accedemos por indices en el echo
$contactos = array(
    array(
        'nombre'=>'Robert',
        'email'=>'robert.es'
    ),
    array(
        'nombre'=>'Pedro',
        'email'=>'Pedro.es'
    )
);
 echo $contactos[0]['nombre'];
 
 foreach ($contactos as $key => $contactos) {
    echo ($contactos['nombre']);
}
?>

