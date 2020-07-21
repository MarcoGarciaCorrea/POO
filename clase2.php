<?php

class Accesos{

    public $publico="Este es un atributo público";
    private $privado="Este es un atributo privado";
    protected $protegido="Este es un atributo protegido";
    private $dni;
    private $nombre;
    #se crea testa función para mostrar el mensaje privado
    function msjPrivado(){
        return $this->privado ;
        
    }
    #se crea esta función para mostrar datos personales del constructor
    public function msjDatos(){
        return "Sr(a): " . $this->nombre . " Identificado con ". $this->dni;
    }

    function __construct($dni,$nombre){
        $this->dni=$dni;
        $this->nombre=$nombre;
    }

    #Encapsulación: métodos Gettes and Setter
}

$acces= new Accesos(76145669,'Marco');
echo "<p>".$acces->publico."</p>";
echo "<p>".$acces->msjPrivado()."</p>";
echo "<p>".$acces->msjDatos()."</p>";
?>