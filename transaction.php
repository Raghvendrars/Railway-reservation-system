<?php
require("connection.php");
	extract($_POST);

if (isset($btnInsert)) {
	
	// $trans_id=$transid;
	$name=$txtname;
	$age=$txtage;
	$gender=$gen;
	$mobile=$txtnum;
	$adhar=$txtadhar;

         

	$query="INSERT INTO transaction (name, age, gender, mobile, adhar) VALUES('$name','$age','$gender','$mobile','$adhar')";


	$data = mysqli_query($con,$query);
    	
        if($data == true){
            header("Location:index.php");
        }
        else{
        	header("Location:bookform.php");
        }
     }

?>