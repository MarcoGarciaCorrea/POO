<?php

    define('INC','/');
    require_once __DIR__ . INC .'Persona.php';
    class Clase3 extends Persona {
        
        function __construct($name,$ape){
            parent::__construct($name,$ape);
        }

        function bienvenida(){
            return "Bienvenido " .$this->nombre; 
        }


    }
       
    $mostrar = new Clase3("Marco","García");
    echo $mostrar->bienvenida();
?>