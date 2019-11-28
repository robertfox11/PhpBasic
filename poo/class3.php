<?php
//declaramos 
class Fruit{
    //atributos
    public $name;
    public $color;
    
    //Creamos el constructor Instanciamos 
    public function __construct($name, $color)
    {
        $this->name= $name;
        $this->color= $color;
        
    }
    //metodos
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->$name;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        return $this->$color;
    }

    //Verificacion de datos
    public function info(){
        $info = "<h1>Información de la Fruit:</h1>";
        
        $info.= "<br/> Nombre: ".$this->getName();
        $info.= "<br/> Color: ".$this->getColor();
        
        return $info;
    
        }
        //metodo destructor
    public function __destruct()
        {
            echo "hola soy el destructor";
        }
        //funcion para convertir objeto a string
    public function __toString()
    {
        try 
        {
            
            return (string) $this->name. " ".$this->color;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
    
}
// Instanciamos 
$fruit = new Fruit("Pear", "green");
// echo $contact;
echo $fruit->info()."<br>";
//convertimos el objeto a string
$str = "Convertimos objeto a String =>".$fruit->__toString()."<br>";
echo $str;
//clonacion
$clonFruit = clone $fruit;
echo "<h1>"."Soy la clonacion ".$clonFruit->info()."<br>";

$fruit2 = new Fruit("Apple", "red");
echo $fruit2->info()."<br>";
?>