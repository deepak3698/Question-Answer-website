<?php
include "conn.php";
if(!$con)
{
	die("failed to connect" . mysqli_connect_error());
}
$msg=$_POST['text'];
$sql="INSERT INTO msg(msgs) 
Values('$msg')";
if(!mysqli_query($con,$sql))
{
	echo "exrror" .mysqli_error($con);
}
else
{
	
	header('location:http://localhost/solution/index.php');
}


?>