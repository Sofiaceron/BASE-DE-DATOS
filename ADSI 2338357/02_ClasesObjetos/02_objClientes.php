<?php
require_once("02_clasesClientes.php");
$objClientes = new Cliente(1061684233,"Claudia Ceron", "claudia.ceron2@misena.edu.co");
$objClientes->getDatosPersonales();
print_r('<pre>');
print_r($objClientes);
print_r('</pre>');







?>