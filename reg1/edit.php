<?php
	require("connection.php");
	extract($_GET);
?>
<html>
<head></head>
    <body>
        
<?php
   
        
?>        
        
<form action="updateController.php" method="POST">
	<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="txtname" value="<?php echo $data['username'];?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="txtemail" value="<?php echo $data['email'];?>"></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" name="txtph" value="<?php echo $data['phone'];?>"></td>
		</tr>
		<tr>
			
		
		<tr>
			<td><input type="submit" name="btnUpdate" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
    </table>
</form>
</body>
</html>