<?php
session_start();
if(isset($_SESSION['success'])){
	session_destroy();
	header('Location:index.php');}
	else{
		header('Location:index.php');
	}
?>