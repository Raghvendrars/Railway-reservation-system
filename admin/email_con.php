<?php

$l="localhost";
$r="root";
$p="";
$db="contact";

$con=mysqli_connect($l,$r,$p,$db);
if($con== True){
	echo "";
}
else{
	echo "Unsuccess";
}


?>