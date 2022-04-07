<?php
require_once("Puesto.php");

$objPuesto = new Puesto();
//INSERTAR PUESTO
$insertarPuesto = $objPuesto->insertarPuesto(15,"NO",5);
echo $insertarPuesto;

//MODIFICAR PASAJERO 
//$actualizarPasajero = $objPasajero->actualizarPasajero(3,"Willian Dorado","dorado@gmail.com",3152739301);

//ELIMINAR PASAJERO
//$eliminarPasajero = $objPasajero->eliminarPasajero(5);

//LISTA PASAJEROS
/*$verPasajeros = $objPasajero->getPasajeros();
print_r('<pre>');
print_r($verPasajeros);
print_r('</pre>');*/


?>