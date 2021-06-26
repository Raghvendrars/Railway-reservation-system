<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnUpdate)){
		
		$sql = "UPDATE registered SET
				name = '$txtname',
				email = '$txtemail',
				phone = '$txtph',
				WHERE id = '$editID'";
		$q1 = mysqli_query($con, $sql);
		if($q1>0){
			header("Location:view.php");
		}else
		{
			echo "Data is not Updated.";
		}
	}
?>