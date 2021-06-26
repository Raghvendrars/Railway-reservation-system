<?php
	require("connection.php");
	extract($_GET);

	$q = "DELETE FROM users where id = '$id'";

	$q1 = mysqli_query($con,$q);
		if($q1 > 0){
			header("Location:users.php");
		}else
		{
			echo "Data is not deleted!";
			header("Location:users.php");
		}
?>