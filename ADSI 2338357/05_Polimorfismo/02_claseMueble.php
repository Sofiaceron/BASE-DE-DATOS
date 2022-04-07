<?php
require_once("01_claseProducto.php");
class Mueble extends Producto
{
    public $color;
    public $material;

    public function __construct($vr_descripcion, $vr_precio, $vr_color, $vr_material)
    {
        parent::__construct($vr_descripcion, $vr_precio);
        $this->color = $vr_color;
        $this->material = $vr_material;
    }

}


?>