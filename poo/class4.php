<?php
//declaramos 
class Book{
    //atributos
    public $title;
    public $author;
    public $copy;
    //Creamos el constructor Instanciamos 
    public function __construct($title, $author, $copy)
    {
        $this->title= $title;
        $this->author= $author;
        $this->copy =$copy;
        
    }
    //metodos
    public function getTitle(){
        return $this->title;
    }
    public function setName($title){
        return $this->$title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setColor($author){
        return $this->$author;
    }
    public function getCopy(){
        return $this->copy;
    }
    public function setCopy($copy){
        return $this->$copy;
    }

    //Verificacion de datos
    public function info(){
        $info = "<h1>Información del libro:</h1>";
        
        $info.= "<br/> Nombre: ".$this->getTitle();
        $info.= "<br/> Autor: ".$this->getAuthor();
        $info.= "<br/> Copy: ".$this->getCopy();
        
        return $info;
    
        }
        //metodo destructor
    public function __destruct()
        {
            echo "hola soy el destructor ";
        }
        //funcion para convertir objeto a string
    public function __toString()
    {
        try 
        {
            
            return (string) $this->title. " ".$this->author."".$this->copy;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
    
}
// Instanciamos 
$book = new Book("Julio Verne", "Viaje a la Luna", 20000);
// echo $contact;
echo $book->info()."<br>";
//convertimos el objeto a string
$str = "Convertimos objeto a String =>".$book->__toString()."<br>";
echo $str;
// //clonacion
$clonBook = clone $book;
echo "<h1>"."Soy la clonacion ".$clonBook->info()."<br>";

$book2 = new Book("Julio Verne", "20.000 Leguas de Viaje Submarino", 40000);
echo $book2->info()."<br>";
?>
