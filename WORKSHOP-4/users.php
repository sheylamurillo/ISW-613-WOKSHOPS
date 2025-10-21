<?php
include_once("dataBase.php");

class Users {
    private $conexion;
    private $dataBase;

   
    public function __construct(/*$conexion*/) {
        //$this->conexion = $conexion;
        $this->dataBase = new DataBase();
        $this->conexion = $this->dataBase->getConnection();
    }
    

    public function insertUsers($nombre, $apellido, $password, $provincia) {
        $query = "INSERT INTO usuarios (nombre, apellido, password, provincia_id) VALUES ('$nombre', '$apellido', '$password', $provincia)";
        mysqli_query($this->conexion, $query);
    }

    public function obtenerUltimoUsuario() {
        $query = "SELECT nombre, password FROM usuarios ORDER BY idUsuario DESC LIMIT 1";
        $result = mysqli_query($this->conexion, $query);

        $usuario = null;
        if ($row = mysqli_fetch_assoc($result)) {
            $usuario = $row;
        }
        return $usuario;
    }
}

?>