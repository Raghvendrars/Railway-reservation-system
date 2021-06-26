<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnInsert)){
		$name = $txtname;
    	$email = $txtemail;
    	$phone = $txtph;
    	$gender = $gen;
    	$address = $txtaddress;
    	$country1 = $txtcountry;
    	$hobby = implode(',',$_POST["in"]);
    	// print_r($_POST);
    	// exit();

    	$q = "INSERT INTO register(name,email,phone,gender,address,country,interest) VALUES('$name','$email','$phone','$gender','$address','$country1','$hobby')";
    	// print_r($q);
    	// exit();

    	$data = mysqli_query($con,$q);
    	// print_r($data);
    	// exit();
        if($data == true){
            header("Location:view.php");
        }
	}
?>