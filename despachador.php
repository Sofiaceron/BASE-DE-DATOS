<?php 
require_once("conexion.php");

class Despachador extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarDespachador($nombres,$telefono, $horario, $email, $password)
    {
        //preparar una consulta con el SQL Insert INT
        $tabla = $this->db->prepare("INSERT INTO despachador(nombres, telefono, horario, email, password)
        VALUES(:nombres, :telefono, :horario, :email, :password)");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':nombres', $nombres);
        $tabla->bindParam(':telefono', $telefono);
        $tabla->bindParam(':horario', $horario);
        $tabla->bindParam(':email', $email);
        $tabla->bindParam(':password', $password);
        
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        //me permite LastInsertId verificar el ultimo registro insertado
        $idDespachador = $this->db->lastInsertId();
        return $idDespachador;
    }

    public function getDespachador()
    {
        //Listar o mostrar pasajeros
        $rows = null;
        //preparo el SQL del Select
        $tabla = $this->db->prepare("SELECT idDespachador, nombres, telefono, horario, email, password FROM despachador");
        //Ejecuto la sentencia SQL
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
            $rows[] = $resultado;
        }
        return $rows;
    }

    public function actualizarDespachador($idDespachador, $nombres, $telefono, $horario, $email, $password)
    {
        //prepara el SQL de la consulta
        $tabla = $this->db->prepare("UPDATE despachador SET nombres = :nombres, telefono = :telefono, horario = :horario, email = :email, password = :password
                                 WHERE idDespachador = $idDespachador");
        //bindParam pasa el dato del parametro a la variable especificada
        $tabla->bindParam(':nombres', $nombres);
        $tabla->bindParam(':telefono', $telefono);
        $tabla->bindParam(':horario', $horario);
        $tabla->bindParam(':email', $email);
        $tabla->bindParam(':password', $password);
        //ejecutar la sentencia SQL preparada
        $tabla->execute();
        return $tabla;
    }
    
    public function eliminarDespachador($idDespachador)
    {
        $tabla = $this->db->prepare("DELETE FROM despachador WHERE idDespachador = :idDespachador");
        $tabla->bindParam('idDespachador', $idDespachador);
        $tabla->execute();
        return $tabla;
    }
}

?>
