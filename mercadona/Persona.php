<?php

class Persona {
    var $nombre;
    var $edad;

    function __construct ($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nommbre = $nombre;
    }

    function getEdad (){
        return $this->edad;
    }

    function setEdad ($edad){
        $this->edad = $edad;
    }

    function mostrar () {
        echo $this->getNombre()." tiene ".$this->getEdad()." años<br>";
    }
}

?>