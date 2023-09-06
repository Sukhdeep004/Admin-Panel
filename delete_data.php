<?php
include 'authentication.php';
    include 'db_connect.php';
    $delete_data=$_POST['input_phone'];

    $sql="delete from user_registration where number='$delete_data'";
    if(mysqli_query($db_connection,$sql))
    {
        echo '<script>';
        echo 'alert(" Delete Succesfull");';
        echo 'window.location="admin.php";';
        echo '</script>';

    }
    else
    {
        echo '<script>';
        echo 'alert(" Delete Failed");';
        echo 'window.location="delete.php";';
        echo '</script>';
    }


?>