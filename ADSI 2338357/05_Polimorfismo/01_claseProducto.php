<?php

class Producto{
    public $descripcion;
    private $precio;
    public $stock_inv;
    static $estado = "Activo";

    function __construct($vr_descripcion, $vr_precio)
    {
        $this->descripcion = $vr_descripcion;
        $this->precio = $vr_precio;
        $this->stock_inv = 40;
        Producto::$estado = "Activo";
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($vr_precio)
    {
        $this->precio = $vr_precio;
    }

    public function setEstado($vr_estado)
    {
        Producto::$estado = $vr_estado;
    }

    public function getInfoproducto()
    {
        $arrayProducto = array(
            'Descripcion: ' => $this->descripcion,
            'Precio: ' => $this->precio,
            'Stock inventario: ' => $this->stock_inv,
            'Estado: ' => Producto::$estado,


        );
        return $arrayProducto;
    }






}//end de la clase

?>