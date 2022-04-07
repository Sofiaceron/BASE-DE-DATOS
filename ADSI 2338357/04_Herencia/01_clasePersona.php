<?php
class Persona
{
    private $cedula;
    public $nombre;
    public $edad;

    function __construct(int $vr_cedula, string $vr_nombre, $vr_edad)
    {
        $this->cedula = $vr_cedula;
        $this->nombre = $vr_nombre;
        $this->edad = $vr_edad;
    }
    //mostrar la informacion 
    public function getCedula()
    {
        return $this->cedula;
    }
    public function setCedula($vr_cedula)
    {
        $this->cedula = $vr_cedula;
    }

    public function getDatosPersonales()
    {
        $arrayDatospersonales = array(
            'Cedula: ' => $this->cedula,
            'Nombre: ' => $this->nombre,
            'Edad: ' => $this->edad,
        );
        return $arrayDatospersonales;
    }
}
?>