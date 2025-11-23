<?php
include("dataBase.php");
include("users.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new DataBase();
    $conexion = $db->getConnection();

    $nombre = $_POST['name'];
    $lastName = $_POST['last-name'];
    $password = $_POST['password'];
    $province = $_POST['provincia'];

    $user = new Users(); //LA CONEXIÓN FUE CREADA AL CREAR UN OBJETO DE LA BASE DE DATOS, Y USERS LA UTILIZA 
    $user->insertUsers($nombre, $lastName, $password, $province);

    header("Location:login.php");
    exit();
}
?>
