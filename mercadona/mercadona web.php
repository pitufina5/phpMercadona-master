<?php 
require_once ("Tienda.php");

$t1 = new Tienda ("Badajoz");
$t2 = new Tienda ("Caceres");

$pf1 = new ProductoFresco ("Tomates", 1, "30-03-2018");
$pc1 = new ProductoCongelado ("Salmon", 20, -3);
$p = new Producto ("Sardinas",2);

$t1->anadirProducto($pf1);
$t1->anadirProducto($pc1);
$t1->anadirProducto($p);
//$t1->mostrar();

//$e1 = new Empleado ("Juan",24);
//$e2 = new Empleado ("Andrea",24);
//$eg1 = new EmpleadoGerente ("Telmo",24,3);
for ($i=0; $i < 5; $i++) { 
    $e = new EmpleadoGerente ("Telmo".$i , 20*$i, $i, $i);
    $t1->altaEmpleado($e);
}
for ($i=0; $i < 100; $i++) { 
    $e = new Empleado ("Juan".$i , 30*$i , $i);
    $t1->altaEmpleado($e);
}

$t1->bajaEmpleado("Telmo3");
$t1->bajaEmpleado("Juan2");

//cuidado: hay un 'echo' dentro de la función, en la comparación
$joven = $t1->personaMasJoven( EmpleadoGerente::class );


//Imprimir lo que esta ocurriendo
echo "<pre>";
print_r ($joven);
echo "</pre>";



//Ejemplo de uso de instanceof
//Creo dos clases y un objeto $a. Luego, compruebo si $a es un objeto de la clase tal
//var_dump() es parecido a echo o print_r
class MiClase{}
class OtraClase {}
$a = new Miclase;
var_dump($a instanceof MiClase); //dará true
var_dump($a instanceof OtraClase); //dará false

//Otro ejemplo de uso de instanceof