<?php
class Cliente
{
    protected $cedula;
    public $nombres;
    public $email;
    public $fecha_registro;
    public $password;
    public $salario;

    function __construct(int $vr_cedula, string $vr_nombres, $vr_email, $vr_salario)
    {
        $this->cedula = $vr_cedula;
        $this->nombres = $vr_nombres;
        $this->email = $vr_email;
        $this->fecha_registro = date('Y-m-d');
        $this->password = rand(111111,555555);
        $this->salario = $vr_salario;
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
    public function Credito(){
        if($this->salario >=1000000){
            $cred = ("El trabajador puede acceder a un prestamo de $2.000.000 con un 1.5% de interes");
        }else{
            $cred = ("El trabajador no cumple con los requisitos");
        }
        return $cred;
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

    //Set para poder cambiar el valor de la informacion del atributo
  /*  public function setCedula($vrcedula)
    {
        $this->cedula = $vrcedula;
    }*/
}
?>