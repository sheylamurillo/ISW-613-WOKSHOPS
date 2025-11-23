<?php
include_once('../common/dataBase.php');

class Users {
    private $connection;
    private $dataBase;

    public function __construct() {
        $this->dataBase = new DataBase();
        $this->connection = $this->dataBase->getConnection();
    }

    public function insertUser($name, $lastName, $username, $password, $role, $status) {
        $query = "INSERT INTO users (name, lastName, username, password, role, status) VALUES ('$name', '$lastName', '$username', '$password', '$role', '$status')";
        return mysqli_query($this->connection, $query);
    }

    public function deleteUser($user_id) { 
        $query = "DELETE FROM users WHERE id = $user_id";
        return mysqli_query($this->connection, $query);
    }

    public function oneUser($user_id) { 
        $query = "SELECT * FROM users WHERE id = $user_id";
        return mysqli_query($this->connection, $query);
    }

    public function allUser() { 
        $query = "SELECT id, name, lastName, username, role FROM users";
        return mysqli_query($this->connection, $query);
    }

    public function verifyUser($username) {
        $query = "SELECT * FROM users WHERE username = '$username'";
        return mysqli_query($this->connection, $query);
    }
    public function updateLastLogin($user_id) {
        $query = "UPDATE users SET last_login_datetime = NOW() WHERE id = $user_id";
        return mysqli_query($this->connection, $query);
}

}
?>
