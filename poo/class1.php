<?php
//declaramos 
class Contact{
    //atributos
    public $name;
    public $surname;
    public $year;
    //Creamos el constructor Instanciamos 
    public function __construct($name, $surname, $year)
    {
        $this->name= $name;
        $this->surname= $surname;
        $this->year= $year;
    }
    //metodos
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->$name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setApellidos($surname){
        return $this->$surname;
    }
    public function getYear(){
        return $this->year;
    }
    public function setEdad($year){
        return $this->$year;
    }

    //Verificacion de datos
    public function info(){
        $info = "<h1>Información del Contacto:</h1>";
        
        $info.= "<br/> Nombre: ".$this->getName();
        $info.= "<br/> Apellidos: ".$this->getSurname();
        $info.= "<br/> Edad: ".$this->getYear();
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
            
            return (string) $this->surname. " ".$this->name. " ".$this->year ;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
    
}
// Instanciamos 
$contact = new Contact("Pepe","Perez",2);
// echo $contact;
echo $contact->info()."<br>";
//convertimos el objeto a string
$str = "Convertimos objeto a String =>".$contact->__toString()."<br>";
echo $str;
//clonacion
$clonContact = clone $contact;
echo "<h1>"."Soy la clonacion ".$clonContact->info()."<br>";

$contact2 = new Contact("Pepa","Lopez",3);
echo $contact2->info()."<br>";
?>