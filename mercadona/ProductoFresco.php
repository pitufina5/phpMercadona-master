<?php

require_once ("Producto.php");

class ProductoFresco extends Producto{
    var $fechaCad;

    function __construct ($nombre,$precio,$fechaCad){
        parent::__construct($nombre,$precio);
        $this->fechaCad = $fechaCad;
    }

    function getFechaCad (){
        return $this->fechaCad;
    }

    function setFechaCad ($fechaCad){
        $this->fechaCad = $fechaCad;
    }

    function mostrar (){
        parent::mostrar();
        echo $this->fechaCad;
        echo "<br><br>";
    }

}

?>