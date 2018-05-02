<?php

class Producto {
    var $nombre;
    var $precio;

    function __construct ($nombre,$precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getPrecio (){
        return $this->precio;
    }

    function setPrecio ($precio){
        $this->precio = $precio;
    }

    function mostrar(){
        echo $this->nombre;
        echo "<br>";
        echo $this->precio;
        echo "<br>";
    }
}

?>