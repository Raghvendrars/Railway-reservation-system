<?php

if (isset($_POST)& !empty($_POST)) {

   $username=mysqli_rpl_escape_string($connection, $_POST['username']);
   $sql="SELECT * FROM registered where username='$username'";
   $res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);

	if($count == 1){
		echo "Send email to user with password";
	}else{
		echo "User name does not exist in database";
	}

}



$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : vivek@codingcyber.com";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}




?>