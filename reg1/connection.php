<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "registration";

	$con = mysqli_connect($l, $r, $p, $db);

	if($con == true){
		echo "Success";
	}else
	{
		echo "Unsuccessful";
	}
?>