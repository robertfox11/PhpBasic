<?php
class car{
    //atributos
    public $modelo;
    public $color;
    public $velocidad;
//Creamos el constructor Instanciamos 
public function __construct($modelo, $color, $velocidad = 0){
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = $velocidad;
}
 
//Métodos
public function getColor(){
// Devolvemos un atributo
    return $this->color;
}
 
public function setColor($color){
//Le damos un valor a un atributo
    $this->color = $color;
}
 
public function getVelocidad(){
    return $this->velocidad;
}
 
public function info(){
     
    // Llamamos a otros métodos
    $info = "<h1>Información del coche:</h1>";
    $info.= "Modelo: ".$this->modelo;
    $info.= "<br/> Color: ".$this->getColor();
    $info.= "<br/> Velocidad: ".$this->getVelocidad();
     
    return $info;
    }
public function __destruct()
        {
            echo "hola soy el destructor";
        }
        public function __toString()
        {
            try 
            {
                
                return (string) $this->modelo. " ".$this->color. " ".$this->velocidad ;
            } 
            catch (Exception $exception) 
            {
                return '';
            }
        }
}
$coche = new Car("BMW VICTOR", "ROJO", 100);
 
// Mostramos la información del primer coche
echo $coche->info()."<br>";
//convertimos el objeto a string
$str = "Convertimos objeto a String =>".$coche->__toString()."<br>";
echo $str;
 
//clonacion
$clonCoche = clone $coche;
echo "<h1>"."Soy la clonacion ".$clonCoche->info()."<br>";

$coche2 = new Car("SEAT 500", "VERDE", 60);
// Mostramos la información del segundo coche
echo $coche2->info()."<br>";
 ?>