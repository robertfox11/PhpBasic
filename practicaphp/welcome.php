<?php
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