<?php
include_once('../common/dataBase.php');
include_once('../actions/sessions.php');
include_once('../actions/users.php');

$session = new sessions();
$session -> startSession();

$dataBase = new dataBase();
$connection = $dataBase -> getConnection();

$user = new users();
$user_id = $_GET['id'];
$result = $user -> oneUser($user_id);


if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    header("Location: /index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>
</head>

<body>
    <h1>Edit</h1>
    <form action="/actions/users.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required value="<?php echo $user['username']?>"><br><br>

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required value="<?php echo $user['name']?>"><br><br>

        <label for="lastName">Apellidos:</label>
        <input type="text" id="lastName" name="lastName" required value="<?php echo $user['lastName'] ?>"><br><br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
