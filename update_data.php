<form action="up_insert_data.php" method="POST">

<?php
include 'authentication.php';

include 'db_connect.php';
$std_phone=$_POST['input_phone'];

$display=$db_connection->query("select * from user_registration where number='$std_phone'");
while($query_executed=mysqli_fetch_assoc($display))
{
	$std_name=$query_executed['name'];
	$std_number=$query_executed['number'];
	$std_course=$query_executed['course'];
	$std_address=$query_executed['address'];
	$std_username=$query_executed['username'];

}
?>
<b>Student Name</b>:<input type="text" name="name" value="<?php echo $std_name;?>">
<br>
<b>Student Number</b>:<input type="text" name="number" value="<?php echo $std_number;?>" readonly>
<br>
<b>Student Course</b>:<input type="text" name="course" value="<?php echo $std_course;?>">
<br>
<b>Student Address</b>:<input type="text" name="address" value="<?php echo $std_address;?>">
<br>
<b>Student Username</b>:<input type="text" name="username" value="<?php echo $std_username;?>">
<br>

<input type="submit" value="update">


</form>
