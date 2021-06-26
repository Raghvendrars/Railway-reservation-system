<?php

 require("conection.php");
 extract($_GET);

	$q = "DELETE FROM train_schedule where id = '$id'";

	$q1 = mysqli_query($con,$q);
		if($q1 > 0){
			header("Location:simple_datatables.php");
		}else
		{
			echo "Data is not deleted!";
			header("Location:simple_datatables.php");
		}
?>