<?php

    include 'db_connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

        $sql="select * from user_registration where username='$username' and password='".md5($password)."'";
        $result=mysqli_query($db_connection,$sql);
        $row=mysqli_num_rows($result);

        if($row==1)
        {
            session_start();
            $_SESSION['username']=$username;
            header("location:admin.php");
        }
        else
        {
            echo '<script>';
            echo 'alert("User not found or incorrect credentials");';
            echo 'window.location="login.php";';
            echo '</script>';
        }


?>