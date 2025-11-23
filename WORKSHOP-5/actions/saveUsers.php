<?php 

include_once('../common/dataBase.php');
include_once('users.php');

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $dataBase = new dataBase();
    $connection = $dataBase->getConnection();

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = "user";
    $status = "active";
    
    $user = new users();
    $insertUser = $user -> insertUser($name,$lastName,$username,$password,$role,$status);

    if($insertUser){
        header("Location: /index.php?username=$username");
        exit();
    }
    else {
        header("Location: /index.php?errors=registraton_failed");
        exit();
    }

    $dataBase->closeConnection();
}

?>