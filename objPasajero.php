<?php
require_once("pasajero.php");

$objPasajero = new Pasajero();
//INSERTAR PASAJERO
/*$insertarPasajero = $objPasajero->insertarPasajeros("Carlos Fernandez","carlos@gmail.com",3117572961);
echo $insertarPasajero;*/

//MODIFICAR PASAJERO 
//$actualizarPasajero = $objPasajero->actualizarPasajero(3,"Willian Dorado","dorado@gmail.com",3152739301);

//ELIMINAR PASAJERO
$eliminarPasajero = $objPasajero->eliminarPasajero(5);

//LISTA PASAJEROS
$verPasajeros = $objPasajero->getPasajeros();
print_r('<pre>');
print_r($verPasajeros);
print_r('</pre>');


?>