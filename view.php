<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border="1px" align="center">
        <tr>
        <th>Student Name</th>
        <th>Number</th>
        <th>Course</th>
        <th>Address</th>
        <th>Username</th>
</tr>
<?php
include 'authentication.php';

    require 'db_connect.php';
    $sql = "SELECT * FROM `user_registration`";
    $result = mysqli_query($db_connection,$sql);
    $i=0;
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr><td>'.$row['name'].'</td>';
        echo '<td>'.$row['number'].'</td>';
        echo '<td>'.$row['course'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['username'].'</td></tr>';
        $i++;
    }
?>
    </table>
<center><a href="admin.php"><input type="button" value=Back></a></center>
</body>
</html>
