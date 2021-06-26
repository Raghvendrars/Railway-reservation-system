<?php
  require("contact_con.php");
  extract($_POST);

if (isset($btnInsert)) {

	$name=$txtname;
	$email=$txtemail;
	$subject=$txtsub;
	$message=$message;


	// print_r($_POST);
	// exit();

	$q="INSERT INTO contact_form(name,email,subject,message) VALUES('$name', '$email', '$subject', '$message')";
	$data=mysqli_query($con,$q);


	// print_r($data);
 //    	exit();

	if ($data == True) {
		header("location:index.php");
	}
	else{
		header("contact.php");
	}
}


?>