<?php
require_once ("Persona.php");

class Empleado extends Persona {
    var $id;

    function __construct ($nombre,$edad,$id){
        parent::__construct ($nombre, $edad);
        $this->id = $id;
    }

    function getId (){
        return $this->id;
    }

    function setId ($id){
        $this->id = $id;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getId()." <br>";
    }
}

?>