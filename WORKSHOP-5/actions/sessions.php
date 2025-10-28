<?php 
class sessions{

    public function startSession(){
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: /index.php");
            exit();
        }
    }
    public function closeSession(){
        session_start();
        session_destroy();
        setcookie(session_name(), '', time() - 3600);
        header("Location: /index.php");
    }
}

?>
