<?php

class Cuentabancaria
{
    //atributos
    public $id;
    protected $tipo_de_cuenta;
    protected $saldo;
    protected $movimientos;
    public $fecha_movimiento;
    public $vr_saldo;

    //metodo principal
    function __construct($vr_id, string $vr_tipo_cuenta, float $vr_saldo, $vr_movimientos)
    {
        $this->id = $vr_id;
        $this->tipo_de_cuenta = $vr_tipo_cuenta;
        $this->saldo = $vr_saldo;
        $this->movimientos = $vr_movimientos;
        $this->fecha_movimiento = date('Y-m-d');
    } //end_constructor

    //metodos secundarios
    public function getCuentabancaria()
    {
        $arrayCuentabancaria = array(
            'No. cuenta: ' => $this->id,
            'Tipo de cuenta: ' => $this->tipo_de_cuenta,
            'Saldo: ' => $this->saldo,
            'Movimientos: ' => $this->movimientos,
            'Fecha: ' => $this->fecha_movimiento,
        );
        return $arrayCuentabancaria;
    }
    public function retirar_dinero(float $retiro)
    {
        if ($this->saldo > $retiro) {
            $vr_saldo = $this->saldo;
            $vr_saldo = $vr_saldo - $retiro;
            $this->saldo = $vr_saldo;
        } else {
            echo "El monto excede el saldo de la cuenta";
        }
        echo "Valor del retiro:  $retiro " . "<br>" . "Nuevo saldo: " . $this->vr_saldo;
    }

    /*public function consignar_dinero(float $consignacion){
        if ($consignacion >2000 ) {
            $vr_saldo = $this->saldo;
         $vr_saldo = $vr_saldo + $consignacion;
       $this->saldo = $vr_saldo;
       }else{
        echo "El valor es insuficiente para consignar"."<br>";
        }
        //metodo getter para mostra la informacion de un atributo
        }*/
    public function getTipocuenta()
    {
        return $this->tipo_de_cuenta;
    }
    public function setTipocuenta($cuenta)
    {
        $this->tipo_de_cuenta = $cuenta;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getMovimientos()
    {
        return $this->movimientos;
    }
}//end clase

?>