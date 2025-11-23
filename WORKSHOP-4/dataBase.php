<?php
class DataBase {
    
    private $servername = "localhost";
    private $database = "workshop3";
    private $username = "root";
    private $password = "";
    private $conexion;

   
    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conexion = mysqli_connect($this->servername,$this->username,$this->password,$this->database) or die(mysqli_error($this->conexion));
    }

    public function getConnection() {
        return $this->conexion;
    }

    public function closeConnection() {
        mysqli_close($this->conexion);
    }
}

?>