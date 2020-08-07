<?php

    define('INC','/');
    require_once __DIR__ . INC .'Persona.php';
    class Clase3 extends Persona {
        
        function __construct($name,$ape){
            parent::__construct($name,$ape);
        }

        public function validaNombre(){
            if($this->nombre==""){
                throw new Exception("Ingresa un nombre",1);
            }
         
        }
        public function bienvenida(){
            try{
                $this->validaNombre();
            }catch(Exception $e){
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
            
            //return "Bienvenido " .$this->nombre; 
        }


    }
       
    $mostrar = new Clase3("","García");
    echo $mostrar->bienvenida();
?>