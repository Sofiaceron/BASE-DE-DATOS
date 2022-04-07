<?php
require_once("01_claseProducto.php");
require_once("02_claseMueble.php");
$objIndMuebles = new Producto("Mesa rustica ", 3500000);

echo "Precio del producto: " . number_format($objIndMuebles->getPrecio()) . "<br>";
echo "Estado del producto: " . Producto::$estado . "<br>";
$objIndMuebles->setEstado("Inactivo");
echo "Estado del producto: " . Producto::$estado;
$objIndMuebles->getInfoproducto();
print_r('<pre>');
print_r($objIndMuebles);
print_r('</pre>');

echo "<h3> Clase mueble</h3>";

$objMuebles = new Mueble("Mesa con marco", 2700000, "Amarillo", "pino");
echo "<br>";
$objMuebles->getInfoproducto();
print_r('<pre>');
print_r($objMuebles);
print_r('</pre>');

?>