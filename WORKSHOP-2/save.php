<?php
$servername = "localhost";
$database = "workshop2";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database)or die(mysql_error());
 insertar($conexion);

    function insertar($conexion){
        $nombre = $_POST['name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
       
        $query = "INSERT INTO persona(nombre,apellido,correo,telefono) VALUES ('$nombre','$lastName','$email', $phone)";

        mysqli_query($conexion,$query);
        mysqli_close($conexion);
    }
?>