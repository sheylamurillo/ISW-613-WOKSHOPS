<?php
function conectar() {
    $servername = "localhost";
    $database = "workshop3";
    $username = "root";
    $password = "";
    $conexion = mysqli_connect($servername, $username, $password, $database) 
        or die(mysqli_error($conexion));
    return $conexion;
}



    function insertar(){
        $conexion = conectar();
        $nombre = $_POST['name'];
        $lastName = $_POST['last-name'];
        $password = $_POST['password'];
        $province = $_POST['provincia'];
       
        $query = "INSERT INTO usuarios (nombre, apellido, password, provincia_id) VALUES ('$nombre','$lastName','$password', $province)";

        mysqli_query($conexion,$query);
        mysqli_close($conexion);
    }

    function leerProvincias(){
        $conexion = conectar();
       $query = "SELECT idProvincia, nombre FROM provincias";
       $result = mysqli_query($conexion, $query);

       while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['idProvincia'].'">'.$row['nombre'].'</option>';
       }
       mysqli_close($conexion);

        
    }
    function obtenerUltimoUsuario() {
    $conexion = conectar();
    $query = "SELECT nombre, password FROM usuarios ORDER BY idUsuario DESC LIMIT 1";
    $result = mysqli_query($conexion, $query);

    $usuario = null;
    if ($row = mysqli_fetch_assoc($result)) {
        $usuario = $row;
    }

    mysqli_close($conexion);
    return $usuario;
}
    
   // Ejecutar la inserción si viene POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    insertar();
    header("Location: login.php");
    exit(); 
}
?>