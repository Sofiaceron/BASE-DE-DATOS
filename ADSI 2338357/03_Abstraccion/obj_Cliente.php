<?php
require_once("01_class_cliente.php");
//*****crear el objeto o instanciar****
$objCliente = new Cliente (1061684233, "Sofia Ceron", "sofiaceron2903@gmail.com",1000000);
echo $objCliente->nombres. "<br>";
echo $objCliente->fecha_registro. "<br>";
echo $objCliente->getCedula(). "<br>";
echo $objCliente->getEmail(). "<br>";
echo $objCliente->Credito(). "<br>";




?>