<?php
    
    include_once './config.php';

    session_start();   
    
    if(!isset($_SESSION['loginUser'])) {
        header("Location:login.php");
    }
?>

