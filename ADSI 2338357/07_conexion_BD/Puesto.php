<?php 
require_once("conexion.php");

class Puesto extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarPuesto($numpuesto,$disponible,$vehiculosid)
    {
        //preparar una consulta con el SQL Insert INT
        $tabla = $this->db->prepare("INSERT INTO puesto(numpuesto,disponible,vehiculosid)
        VALUES(:numpuesto,:disponible,:vehiculosid)");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':numpuesto', $numpuesto);
        $tabla->bindParam(':disponible', $disponible);
        $tabla->bindParam(':vehiculosid', $vehiculosid);
        
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        //me permite LastInsertId verificar el ultimo registro insertado
        $idPuesto = $this->db->lastInsertId();
        return $idPuesto;
    }

    public function getPuesto()
    {
        //Listar o mostrar pasajeros
        $rows = null;
        //preparo el SQL del Select
        $tabla = $this->db->prepare("SELECT idPuesto,numpuesto,disponible,vehiculosid FROM puesto");
        //Ejecuto la sentencia SQL
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;
        }
        return $rows;
    }

    public function actualizarPuesto($idPuesto,$numpuesto,$disponible,$vehiculosid)
    {
        //prepara el SQL de la consulta
        $tabla = $this->db->prepare("UPDATE puesto SET numpuesto = :numpuesto, disponible = :disponible, vehiculosid = :vehiculosid
                                 WHERE idPuesto = $idPuesto");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':numpuesto', $numpuesto);
        $tabla->bindParam(':disponible', $disponible);
        $tabla->bindParam(':vehiculosid', $vehiculosid);
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        return $tabla;
    }
    
    public function eliminarPuesto($idPuesto)
    {
        $tabla = $this->db->prepare("DELETE FROM puesto WHERE idPuesto = :idPuesto");
        $tabla->bindParam('idPuesto', $idPuesto);
        $tabla->execute();
        return $tabla;
    }
}

?>
