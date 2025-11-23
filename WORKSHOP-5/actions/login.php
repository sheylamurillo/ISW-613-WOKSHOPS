<?php
include_once('../common/dataBase.php');
include_once('users.php');
include_once('sessions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check user in the database
    $users = new users();
    $result = $users ->verifyUser($username);

    $session = new sessions();
    
    $dataBase = new dataBase();
    

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (md5($password) === $row['password']){
          $users->updateLastLogin($row['id']);

          session_start();
          
          $_SESSION['username'] = $row['username'];
          $_SESSION['firstname'] = $row['name'];

          header("Location: /pages/dashboard.php");
          exit();
        } else {
          header("Location: /index.php");
        }
    } else {
        header("Location: /index.php");
    }
    $dataBase->closeConnection();

} else {
    header("Location: /index.php");
    exit();
}

