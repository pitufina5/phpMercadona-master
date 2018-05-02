<?php 
require_once ("Empleado.php");

class EmpleadoGerente extends Empleado {
    var $nivel;

    function __construct ($nombre,$edad,$id,$nivel) {
        parent::__construct($nombre,$edad,$id);
        $this->nivel = $nivel;
    }
    function setNivel ($nivel) {
        $this->nivel = $nivel;
    }
    function getNivel () {
        return $this->nivel;
    }
    function mostrar () {
        parent::mostrar();
        echo "El nivel directivo es".$this->getNivel();
        echo "<br><br>";
    }
}