<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'train_details');
if(!$selectdb){
	die("Database Selection Failed" . mysqli_error($connection));
}
$class_id = (int) $_GET['class_id'];
$sql = "SELECT * FROM seat WHERE class_id=$class_id";
$result = mysqli_query($connection, $sql);
	echo "<option disabled selected>Select Your Seat</option>";
while($row = mysqli_fetch_assoc($result)){
	echo "<option value='" . $row['id'] . "'>" . $row['name'] ."</option>";
}

?>