<?php

require_once("01_clasePersona.php");
class Cliente extends Persona
{

    private $credito;


   public function __construct($vr_cedula, $vr_nombre, $vr_edad, $vr_credito)
   {
       //envio los atributos se asigen a la clase persona
       parent ::__construct($vr_cedula, $vr_nombre, $vr_edad);
       $this->credito = $vr_credito;

   }

   public function getCredito(){
       return $this->credito;
   }
}



?>