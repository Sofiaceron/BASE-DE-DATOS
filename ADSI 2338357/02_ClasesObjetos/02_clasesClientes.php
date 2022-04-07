<?php
class Cliente
{
    public $cedula;
    public $nombres;
    public $email;
    public $fecha_registro;
    public $password;

    function __construct(int $vr_cedula, string $vr_nombres, string $vr_email)
    {
        $this->cedula = $vr_cedula;
        $this->nombres = $vr_nombres;
        $this->email = $vr_email;
        $this->fecha_registro = date('Y-m-d');
        $this->password = rand();
    }

    public function getDatosPersonales()
    {
        $arrayDatos = array(
            'Cedula: ' => $this->cedula,
            'Nombres: ' => $this->nombres,
            'Fecha de ingreso: ' => $this->fecha_registro,
        );
        return $arrayDatos;
    }

    public function getCedula()
    {

        return $this->cedula;
    }
    public function setCedula($Cedula)
    {
        $this->cedula = $Cedula;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
    
}


?>