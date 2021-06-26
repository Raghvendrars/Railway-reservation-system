<?php
	require("connection.php");
	extract($_POST);
	$id=$_GET['getid'];
	$row=$con->query("UPDATE users SET username='$txtname',phone='$txtph',email='$txtemail' WHERE id='$id';");

		;
		if($row){
			header("Location:index.php");
		}else
		{
			echo "Data is not Updated.";
		}
	
?>