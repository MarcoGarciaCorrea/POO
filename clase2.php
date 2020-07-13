<?php

class Accesos{

    public $publico="Este es un atributo público";
    private $privado="Este es unn atributo privado";
    protected $protegido="Este es un atributo protegido";

    #se crea testa función para mostrar el mensaje privado
    function msjPrivado(){
        return $this->privado;
    }
}

$acces= new Accesos();
echo "<p>".$acces->publico."</p>";
echo "<p>".$acces->msjPrivado()."</p>";
?>