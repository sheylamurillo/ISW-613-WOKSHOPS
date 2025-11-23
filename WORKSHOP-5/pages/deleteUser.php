<?php
include_once('../common/dataBase.php');
include_once('../actions/users.php');
$dataBase = new dataBase();
$conn = $dataBase->getConnection();
$users = new users();




// edit user page
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit();
}
$user_id = $_GET['id'];
$result = $users -> deleteUser($user_id);

// delete user if id is provided from the database
if ($user_id) {
    
    if ($result) {
        header("Location: /index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
$dataBase-> closeConnection();

?>