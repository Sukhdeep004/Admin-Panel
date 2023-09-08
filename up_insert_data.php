<?php
include 'authentication.php';

    include 'db_connect.php';
    $update_name=$_POST['name'];
    $number=$_POST['number'];
    $update_course=$_POST['course'];
    $update_address=$_POST['address'];
    $update_username=$_POST['username'];

    $sql="update user_registration set name='$update_name',course='$update_course',address='$update_address',username='$update_username' where number='$number'";
    if(mysqli_query($db_connection,$sql))
    {
        echo '<script>';
        echo 'alert(" Update Succesfull");';
        echo 'window.location="admin.php";';
        echo '</script>';

    }
    else
    {
        echo '<script>';
        echo 'alert(" Update Failed");';
        echo 'window.location="extract_data.php";';
        echo '</script>';
    }

?>