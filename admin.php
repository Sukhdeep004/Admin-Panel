<html>
    <head>
        <title> Admin Panel </title>
    </head>
    <!-- <style>
        div
            {
                display: inline-block;
                border: 1px solid black;
            }
            </style>  -->
<body>
<?php
    include 'authentication.php';
?>


   <center> <h1> ADMIN PANEL </h1>
    <!-- <form action="reg_input.php">
    <input type="submit" value="Insert" ></form>
    <form action="view.php">
    <input type="submit" value="View" ></form>
    <form action="extract_data.php">
    <input type="submit" value="Update" ></form>
    <form action="delete.php">
    <input type="submit" value="Delete" ></form>  -->

    <a href="reg_input.php"><input type="button" value="Insert"></a>
    <a href="view.php"><input type="button" value="View"></a>
    <a href="extract_data.php"><input type="button" value="Update"></a>
    <a href="delete.php"><input type="button" value="Delete"></a>
    <a href="logout.php"><input type="button" value="Logout"></a>
</center>
</body>

</html>