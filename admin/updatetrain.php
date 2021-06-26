<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnUpdate)){
		
		$sql = "UPDATE train_schedule SET
				train_num = '$txtnum',
				train_name = '$txtname',
				source = '$txtrsc',
				destination = '$txtdest',
				WHERE id = '$editID'";
		$q1 = mysqli_query($con, $sql);
		if($q1>0){
			header("Location:simple_databasetables.php");
		}else
		{
			echo "Data is not Updated.";
		}
	}
?>