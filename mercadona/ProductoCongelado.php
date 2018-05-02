<?php
require_once ("Producto.php");

class ProductoCongelado extends Producto {
    var $temp;

    function __construct ($nombre,$precio,$temp){
        parent::__construct($nombre,$precio);
        $this->temp = $temp;
    }

    function getTemp (){
        return $this->temp;
    }

    function setTemp ($temp){
        $this->temp = $temp;
    }

    function mostrar(){
        parent::mostrar();
        echo $this->getTemp()."<br><br>";
    }
}

?>