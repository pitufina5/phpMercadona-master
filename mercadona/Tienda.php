<?php
require_once ("EmpleadoGerente.php");
require_once ("ProductoCongelado.php");
require_once ("ProductoFresco.php");

class Tienda {
    var $ciudad;
    var $personas;
    var $productos;

    function __construct ($ciudad){
        $this->ciudad = $ciudad;
        $this->productos = array();
        $this->personas = array();
    }

    function getCiudad (){
        return $this->ciudad;
    }

    function setCiudad ($ciudad){
        $this->ciudad = $ciudad;
    }

    /**
     * Aquí podemos comparar con instanceof
     * pero como tenemos jerarquía donde EmpleadoGerente hereda de Empleado,
     * si recibimos el tipo = 'Empleado' será verdadera la comparación también con
     * EmpleadoGerente. Por ello, utilizamos get_class(...)
     */
    function personaMasJoven ($tipo){
        $pos = 0;
        $menor = 10000;
        
        for ($i = 0; $i < count($this->personas); $i++){
            if ($this->personas[$i] != null) {
                echo "Comparando ".get_class($this->personas[$i])." con ".$tipo."<br>";
                if (get_class($this->personas[$i]) == $tipo) {
                    if ($this->personas[$i]->getEdad() < $menor){
                        $menor = $this->personas[$i]->getEdad();
                        $pos = $i;
                    }
                }
            }
        }
        return $this->personas[$pos];
    }

    function anadirProducto ($producto){
        $enc = false;
        for ($i = 0; $i < count($this->productos) && ($enc == false); $i++) { 
            if ($this->productos[$i] == null) {
                $this->productos[$i] = $producto;
                $enc = true;
            }
        }
        if ($enc == false){
            $this->productos[] = $producto;
        }
    }

    function borrarProducto ($nomproducto){
        $enc = false;
        for ($i = 0; $i < count ($this->productos) && ($enc == false); $i++){
            if ($this->productos[$i]->getNombre() == $nomproducto){
                $this->productos[$i] = null;
                $enc = true;
            }
        }
    }

    function altaEmpleado ($empleado) {
        $this->personas[] = $empleado;
    }

    function bajaEmpleado ($nombreEmpleado) {
        $enc = false;
        for ($i=0; ($i < $this->personas) && ($enc==false); $i++) { 
            if ($this->personas[$i] != null) {
                if ($this->personas[$i]->getNombre() == $nombreEmpleado) {
                    $this->personas[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    //Me muestra toda la tienda
    function mostrar (){
        echo "Mi tienda está en ".strtoupper($this->getCiudad());
        echo "<br>";

        echo "----- PRODUCTOS -----<br>";
        for ($i = 0; $i < count($this->productos); $i++){
            echo $this->productos[$i]->mostrar();
        }

        echo "----- personas -----<br>";
        for ($i = 0; $i < count($this->personas); $i++){
            echo $this->personas[$i]->mostrar();
        }
    }
}


?>