<?php
// Mostrar un mensaje por pantalla dentro de la etiqueta <h1> de HTML
echo "<h1>Hola PHP</h1>";

// Recorremos el array lo metemos en li
$tecnology = array('Java', 'PHP', 'Python', 'JavaScript');
echo "<ul>";


foreach($tecnology as $tecnologys){
    echo "<li>". $tecnologys."</li>";
}

echo "</ul>";
//Mensaje de bienvenida
class Welcome{
    public $name;
    public $surname;
    //guardamos nombre
    public function save($name , $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
    //mostramos el nombre
    public function toshow(){
       
            Welcome::format($this->name, $this->surname);
        
    }
    public function format($name, $surname){
        echo "Hola ".$name. " ".$surname." Welcome";
    }
}
$welcome = new Welcome();
$welcome->save("Robert", "Salazar");
$welcome->toshow();
?>