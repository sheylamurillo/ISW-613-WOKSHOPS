<?php

class Provincias {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function leerProvincias() {
        $query = "SELECT idProvincia, nombre FROM provincias";
        $result = mysqli_query($this->conexion, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['idProvincia'].'">'.$row['nombre'].'</option>';
        }
    }
}
?>