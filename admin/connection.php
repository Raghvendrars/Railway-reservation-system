<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "train_details";

	$con = mysqli_connect($l, $r, $p, $db);

	if($con == true){
		echo "";
	}else
	{
		echo "Unsuccessful";
	}
?>