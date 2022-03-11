<?php
require_once("despachador.php");

$objDespachador = new Despachador();
//INSERTAR DESPACHADOR
/*$insertarDespachador = $objDespachador->insertarDespachador("Edgar Huila",3165372961,"15:19:10","edgar@gmail.com","j1290");
echo $insertarDespachador;*/

//MODIFICAR DESPACHADOR
//$actualizarDspachador = $objDespachador->actualizarDespachador(2,"Hernan Dorado",3150395829, "13:50:28","hernan89@gmail.com","ya8364");

//ELIMINAR DESPACHADOR
$eliminarDespachador = $objDespachador->eliminarDespachador(3);

//LISTA PASAJEROS
$verDespachador = $objDespachador->getDespachador();
print_r('<pre>');
print_r($verDespachador);
print_r('</pre>');


?>