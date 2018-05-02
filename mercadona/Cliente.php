<?php
require_once ("Persona.php");

class Cliente extends Persona {
    var $pedidos;

    function __construct ($nombre,$edad,$pedidos){
        parent::__construct ($nombre, $edad);
        $this->pedidos= $pedidos;
    }

    function getPedidos (){
        return $this->pedidos;
    }

    function setPedidos ($pedidos){
        $this->pedidos = $pedidos;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getPedidos()." <br>";
    }
}

?>