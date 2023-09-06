<html>
<head>
	<title> </title>

<body>
<?php
    include 'authentication.php';
?>
<form action="delete_data.php" method="POST">

Phone Number:<input type="text" name="input_phone">
<input type="submit" value=DELETE>
<?php
include 'view.php';
?>
</form> 
<!-- <a href="admin.php"><input type="button" value=Back></a> -->
</body>
</html>