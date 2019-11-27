<?php
//declaramos 
class Contact{
    //atributos
    public $nombre= array();
    public $apellidos = array();
    public $edad = array();
// Metodo Guardar datos
    public function save($nombre, $apellidos, $edad){
        // this hacemos referencia al nombre
        $this->nombre[] = $nombre;
        $this->apellidos[] = $apellidos;
        $this->edad[] = $edad;        
    }
    // MEtodo mostrar datos
    public function toshow(){
        //llamamos al nombre
        for ($i=0; $i < count($this->nombre); $i++) { 
           Contact::format($this->nombre[$i],$this->apellidos[$i],$this->edad[$i]);
        }
    }
    //formatear datos
    public function format($nombre, $apellidos, $edad){
    echo "Nombre: " .$nombre. " | apellidos: " .$apellidos. " |Edad:  " .$edad."<br>"; 
        }
}
$contact = new Contact();
echo "<h1>Información del Contacto:</h1>";
$contact->save("Pepe","Perez", 22);
$contact->save("Paco","Lopez", 23);
// accedemos al metodo de al objeto contacto
$contact->toshow();

 