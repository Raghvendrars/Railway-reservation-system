<?php
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Train Details
	</title>
</head>
<body>

  <table>
  	
  	<?php
					$q = "SELECT * FROM train_schedule";
					$data = mysqli_query($con,$q);
					$i = 0;
					while($result = mysqli_fetch_array($data)){
						$i++;
					// print_r($data);
					// exit();
				?>

  	<tr>
  		<td><?php echo $i;?></td>
  		<td><?php echo $result['train_num'];?></td>
  		<td><?php echo $result['train_name'];?></td>
  		<td><?php echo $result['source'];?></td>
  		<td><?php echo $result['destination'];?></td>
  	</tr>
<?php
  	}

  	?>


  </table>


</body>
</html>