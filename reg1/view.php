<?php
	require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		table,tr,td{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
			<thead>
				<tr>
					<td>No.</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Gender</td>
					<td>Address</td>
					<td>Country</td>
					<td>Hobby</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$q = "SELECT * FROM registered";
					$data = mysqli_query($con,$q);
					$i = 0;
					while($result = mysqli_fetch_array($data)){
						$i++;
					// print_r($data);
					// exit();
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $result['username'];?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $result['phone'];?></td>
<!--					<td><?php echo $result['gender'];?></td>-->
<!--					<td><?php echo $result['address'];?></td>-->
<!--					<td><?php echo $result['country'];?></td>-->
<!--					<td><?php echo $result['interest'];?></td>-->
					<td><a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>
					    <a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
				</tr>
				<?php
			}
			?>
			</tbody>
	</table>
	<p><a href="delete_multiple.php">Would like to DELETE multiple pages?</a></p>
	<p><a href="registration.php">Go to Registration Page</a></p>
</body>
</html>