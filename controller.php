<?php
	session_start();
	require 'lib/dao.php';
	require 'lib/model.php';
	$d= new dao();
	$m= new model();
	extract($_POST);
	if(isset($_POST['btnLogin'])){
			$q=$d->select("users","username='$username' AND password='$password'");
			/*$i = 0;*/
			$result = mysqli_fetch_array($q);
					/*$i++;*/

					if($result > 0){
				 $_SESSION['id']=$result['id'];
				 echo $_SESSION['id'];
				$_SESSION['username']=$username;
				
				$_SESSION['success']="You're Logged in!";
				header('Location:index.php');
			}else
			{
				//echo "Something's Wrong";
				$_SESSION['error']="<br>".'Invalid username or password';
				header('Location:loginsignup.php');
			}
	}
?>