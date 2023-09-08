<?php
    require 'db_connect.php';
    $std_name = $_POST['name'];
    $std_number = $_POST['number'];
    $std_course = $_POST['course'];
    $std_address = $_POST['address'];
    $std_username = $_POST['username'];
    $std_password = $_POST['password'];

//    echo $std_name."<br>";
//     echo $std_number;
//     echo $std_course;
//     echo $std_address;
    $sql="insert into user_registration values('$std_name','$std_number','$std_course','$std_address','$std_username','".md5($std_password)."')";
    if(mysqli_query($db_connection,$sql))
    {
        echo '<script>';
        echo 'alert("Registration Succesful");';
        echo 'window.location="admin.php";';
        echo '</script>';

    }
    else
    {
        echo '<script>';
        echo 'alert("Registration Failed");';
        echo 'window.location="admin.php";';
        echo '</script>';
    }

?>
