<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnInsert)){
		$username = $txtuname;
    	$phone = $txtph;
        $email = $txtemail;
    	$password = $txtpass;
    	
    	// print_r($_POST);
    	// exit();
        // $SEL="SELECT * FROM `users` WHERE `email`='".$email."'";
        // $sel_qry=mysqli_query($con,$SEL);
        // $couunt=mysqli_num_rows($sel_qry);
        // echo $couunt;
        // if($couunt>0)
        // {
        // foreach ($_REQUEST as $key => $value) 
        // {
        //     $_SESSION[$key]=$value;
        //     header('Location:loginsignup2.php');    
        //     $_SESSION['txtemail']="email Are Alredy Exits";
        // }
        // }
        // else
        // {    
    	$q = "INSERT INTO admin(username,phone,email,password) VALUES('$username','$phone','$email',
        '$password')";
    	// print_r($q);
    	// exit();

    	$data = mysqli_query($con,$q);
    	// print_r($data);
    	// exit();
        if($data == true){
        
            header("Location:login.php");
            
        }
	}
?>