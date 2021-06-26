<?php 
session_start();
extract($_POST);
trim($password);
trim($cpassword);
	if (isset($btn)) {
		$uid = $_SESSION['uid'];
		if ($password == $cpassword) {	
			echo "<strong>Congratulations!!!</strong>  Password Changed...";		
			exit();
			session_unset();
		}
		else
		{
			echo 'Error';
		}
	}
	else {
		header("Location:forgotpassword.php");
	}
 ?>