<?php
class coche{
    //atributos
    public $modelo;
    public $color;
    public $velocidad;
//metodos
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
 
public function acelerar(){
    $this->velocidad++;
}
 
public function frenar(){
    $this->velocidad--;
}
 
public function getVelocidad(){
    return $this->velocidad;
}
 
public function mostrarInfo(){
     
    // Llamamos a otros métodos
    $info = "<h1>Información del coche:</h1>";
    $info.= "Modelo: ".$this->modelo;
    $info.= "<br/> Color: ".$this->getColor();
    $info.= "<br/> Velocidad: ".$this->getVelocidad();
     
    return $info;
}
}
$coche = new Coche("BMW VICTOR", "ROJO", 100);
 
// Mostramos la información del primer coche
echo $coche->mostrarInfo();
 
$coche2 = new Coche("SEAT 500", "VERDE", 60);
 
// Mostramos la información del segundo coche
echo $coche2->mostrarInfo();

class alimento {

    var $comestible;
    var $color;
 
    function Verdura($comestible, $color="verde")
    {
        $this->comestible = $comestible;
        $this->color = $color;
    }
 
    function es_comestible()
    {
        return $this->comestible;
    }
 
    function qué_color()
    {
        return $this->color;
    }
 
 }
 ?>