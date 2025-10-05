<?php
include("save.php"); 

$nombreUltimo = '';
$passwordUltimo = '';

$ultimo = obtenerUltimoUsuario();

if ($ultimo) {
    $nombreUltimo = $ultimo['nombre'];
    $passwordUltimo = $ultimo['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="save.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($nombreUltimo); ?>" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($passwordUltimo); ?>" required><br><br>
        
        <button type="submit">Login</button>
    </form>


</body>

</html>