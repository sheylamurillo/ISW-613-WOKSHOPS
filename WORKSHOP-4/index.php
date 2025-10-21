<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKSHOP3</title>
</head>

<body>
    <form action="save.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>


        <label for="last-name">Last-name:</label><br>
        <input type="text" id="last-name" name="last-name" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="provincia">Provincia:</label><br>
        <select name="provincia" id="provincia"> 
           
            <?php
              include("dataBase.php");
              include("provinces.php");
              $db = new DataBase();
              $conexion = $db->getConnection();
              $provincias = new Provincias($conexion);
              $provincias->leerProvincias();
           ?>
        </select> 

        
        <button type="submit">Save</button>
    </form>


</body>

</html>