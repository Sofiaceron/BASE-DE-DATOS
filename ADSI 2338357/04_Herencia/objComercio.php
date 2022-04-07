<?php
require_once("01_clasePersona.php");
require_once("02_clasesCliente.php");
require_once("03_claseEmpleado.php");

//INSTANCIA DE LA CLASE
$objPersona = new Persona(1002457184, "Juan Lopez", 20);
echo "<h2> Llamado a la clase persona </h2><br>";
echo "Cedula: " . $objPersona->getCedula() . "<br>";
echo "Nombres: " . $objPersona->nombre . "<br>";
echo "Edad: " . $objPersona->edad . "<br>";

//Instancia de la clase Cliente
$objCliente = new Cliente(1061684233, "Sofia Ceron", 18, 2450000);
echo "<h2> Llamado a la clase Cliente </h2><br>";
echo "Cedula : ". $objCliente -> getCedula(). "<br>";
echo "Nombre : ". $objCliente->nombre."<br>";
echo "Valor del credito: ". $objCliente->getCredito();

//Instancia de la clase Empleado
$objEmpleado = new Empleado (1061672377, "Julian Sanchez", 25, 3000000, 2000000);
echo "<h2> Llamado a la clase Empleado </h2><br>";
echo "Cedula : ". $objEmpleado -> getCedula(). "<br>";
echo "Nombre : ". $objEmpleado->nombre."<br>";
echo "Valor del credito: ". $objEmpleado->getCredito() . "<br>";
echo "Salario: ". $objEmpleado->getSalario(); 
?>

