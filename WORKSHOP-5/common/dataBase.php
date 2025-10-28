<?php
class dataBase {
    
    private $servername = "localhost";
    private $database = "workshop5";
    private $username = "root";
    private $password = "";
    private $connection;

   
    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->connection = mysqli_connect($this->servername,$this->username,$this->password,$this->database) or die(mysqli_error($this->connection));
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        mysqli_close($this->connection);
    }
}

?>