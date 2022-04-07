<?php
class Conexion
{
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    public $based = "adsi_2338357";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct()
    {
        try {
            //$db permite crear una instancia a la clase PDO y enviar los atributos 
            //driver, host, based, usuario...
            $db = new PDO ("{$this->driver}:host={$this->host};dbname={$this->based}",
            $this->usuario, $this->contrasena);
            //setAttribute verificar o traer los posibles errores en la conexion
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa";
            return $db;
        } catch (PDOException $e) {
            echo "Ha ocurrido un error al conectarce a la Bd".$e->getMessage();
        }
    }
   

}

//$conectarDb =new conexion();
//print_r($conectarDb);

?>