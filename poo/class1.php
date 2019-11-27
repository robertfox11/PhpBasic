<?php
//declaramos 
class Contact{
    //atributos
    public $nombre;
    public $apellidos;
    public $edad;
    //Creamos el constructor
    public function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre= $nombre;
        $this->apellidos= $apellidos;
        $this->edad= $edad;
    }
    //metodos
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->$nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function setApellidos($apellidos){
        return $this->$apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        return $this->$edad;
    }

    //Verificacion de datos
    public function info(){
        $info = "<h1>Información del Contacto:</h1>";
        
        $info.= "<br/> Nombre: ".$this->getNombre();
        $info.= "<br/> Apellidos: ".$this->getApellidos();
        $info.= "<br/> Edad: ".$this->getEdad();
        return $info;
    
        }
        public function __destruct()
        {
            echo "hola ";
        }
}
$contact = new Contact("Pepe","Perez",2);

echo $contact->info();
$contact = new Contact("Pepa","Lopez",3);
echo $contact->info();



?>