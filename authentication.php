<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
        exit();
    
    }
    else
    {
        $username=$_SESSION['username'];
    }
?>