<?php
require_once("02_clasesCliente.php");

class Empleado extends Cliente {

private $salario;

public function __construct($vr_cedula, $vr_nombre, $vr_edad, $vr_credito, $vr_salario)
{
   parent::__construct($vr_cedula, $vr_nombre, $vr_edad, $vr_credito);
   $this->salario = $vr_salario;
}

public function getSalario(){
    return $this->salario;
}
public function setSalario($vr_salario){
    $this->salario = $vr_salario;
}








}
?>