<?php
    require("connection.php");
	extract($_POST);

    $con->query("SELECT * FROM `train_schedule` WHERE source='gorakhpur' AND destination='ahmedabad'");

    $data = mysqli_query($con);
	$i = 0;
	while($result = mysqli_fetch_array($data)){
	$i++;
					// print_r($data);
					// exit();

?>