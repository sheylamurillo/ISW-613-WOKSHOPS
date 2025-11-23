<?php
$currentDir = dirname(__FILE__);
$parentDir = dirname($currentDir);

include($parentDir . '/common/dataBase.php');

if ($argc < 2) {
    echo "Uso: php script.php <minutos>\n";
    exit(1);
}

$minutos = intval($argv[1]); 

$dataBase = new DataBase();
$conn = $dataBase->getConnection();


$query = "
SELECT id, username, last_login_datetime
FROM users
WHERE status = 'active'
  AND last_login_datetime IS NOT NULL
  AND (
        TIMESTAMPDIFF(MINUTE, last_login_datetime, NOW()) > $minutos
        OR DATE(last_login_datetime) < CURDATE()
      )
";



$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error al consultar usuarios: " . mysqli_error($conn) . "\n";
    exit(1);
}

$usuariosInactivos = [];
while ($row = mysqli_fetch_assoc($result)) {
    $usuariosInactivos[] = $row;
}

if (count($usuariosInactivos) > 0) {
    echo "Usuarios inactivos encontrados:\n";

    foreach ($usuariosInactivos as $row) {
        $id = $row['id'];
        $username = $row['username'];
        $lastLogin = $row['last_login_datetime'];

        $updateQuery = "UPDATE users SET status = 'inactive' WHERE id = $id";
        mysqli_query($conn, $updateQuery);

        echo "- $username (último login: $lastLogin) marcado como inactivo.\n";
    }

    echo "funciona.\n";
} else {
    echo "No hay users $minutos que superen esos min.\n";
}

$dataBase->closeConnection();
?>
