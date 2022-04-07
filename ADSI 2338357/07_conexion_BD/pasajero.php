<?php
require_once("conexion.php");

class Pasajero extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarPasajeros($nombre, $email, $telefono)
    {
        //preparar una consulta con el SQL Insert INT
        $tabla = $this->db->prepare("INSERT INTO pasajero(nombre, email, telefono)
        VALUES(:nombre, :email, :telefono)");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':nombre', $nombre);
        $tabla->bindParam(':email', $email);
        $tabla->bindParam(':telefono', $telefono);
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        //me permite LastInsertId verificar el ultimo registro insertado
        $idPasajero = $this->db->lastInsertId();
        return $idPasajero;
    }

    public function getPasajeros()
    {
        //Listar o mostrar pasajeros
        $rows = null;
        //preparo el SQL del Select
        $tabla = $this->db->prepare("SELECT idPasajero, nombre, email, telefono FROM pasajero");
        //Ejecuto la sentencia SQL
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;
        }
        return $rows;
    }

    public function actualizarPasajero($idPasajero, $nombre, $email, $telefono)
    {
        //prepara el SQL de la consulta
        $tabla = $this->db->prepare("UPDATE pasajero SET nombre = :nombre, email = :email, telefono = :telefono 
                                 WHERE idPasajero = $idPasajero");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':nombre', $nombre);
        $tabla->bindParam(':email', $email);
        $tabla->bindParam(':telefono', $telefono);
        //$tabla->bindParam(':idPasajero', $idPasajero);
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        return $tabla;
    }
    
    public function eliminarPasajero($idPasajero)
    {
        $tabla = $this->db->prepare("DELETE FROM pasajero WHERE idPasajero = :idPasajero");
        $tabla->bindParam('idPasajero', $idPasajero);
        $tabla->execute();
        return $tabla;
    }
}


?>