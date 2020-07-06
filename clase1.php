<?php
//Creación de la clase

class Curso {
    //Creación de los atributos

    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    //Creación de métodos

    public function imprimirInfo(){
        return "El nombre del curso es: ".$this->nombre." y tiene un costo ".$this->costo ." ".$this->moneda."<br>";
    }
}

//Instancia de la clase Curso
$php = new Curso();

//Asignación de valores a los atributos
$php->nombre="POO en PHP";
$php->duracion="5 sesiones";
$php->costo=50;
$php->moneda="PEN";
$php->profesor="Marco García";
$php->disponible= true;

//imprimir valores del objeto
//var_dump($php);
//llamado al  metodo imprimir info
echo $php->imprimirInfo();

//Instancia de la clase curso en objeto 2
$js= new Curso();
//Asignación de valores a los atributos
$js->nombre="JavaScript";
$js->duracion="3 sesiones";
$js->costo=50;
$js->moneda="PEN";
$js->profesor="Juan García";
$js->disponible= true;

//imprimir valores del objeto
//var_dump($js);
echo $js->imprimirInfo();
?>