<?php
require_once("01_clasesCuentabancaria.php");
//crear una instancia de la clase cuenta bancaria
$objCuentabancaria = new Cuentabancaria(1001, "Ahorro", 1050000.55, "Retiro");
echo $objCuentabancaria->id . "<br>";
//echo $objCuentabancaria->tipo_de_cuenta . "<br>";
$objCuentabancaria->getCuentabancaria();
print_r('<pre>');
print_r($objCuentabancaria);
print_r('</pre>');
echo "<br>";
echo $objCuentabancaria->retirar_dinero(150000.3) . "<br>";
echo "Tipo de cuenta: " . $objCuentabancaria->getTipocuenta();
echo $objCuentabancaria->setTipocuenta("Cuenta Corriente");
//hay que llamar nuevamente al metodo get
echo "<br>";
echo "Tipo de cuenta: " . $objCuentabancaria->getTipocuenta();

/*echo $objCuentabancaria->getSaldo();

echo $objCuentabancaria->getMovimientos();
echo"<br>";
echo $objCuentabancaria-> consignar_dinero(100.00)."<br>";
echo $objCuentabancaria->saldo;*/



?>