<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<select name="courses" id="courses">
	<option value="">Select Course</option>
	<?php 

    $q="SELECT * FROM courses";
    $sql=mysqli_query($con,$q);
    $i=0;
    while ($result=mysqli_fetch_array($sql)) {
    $i++;	
    

    ?>
	
    <option><?php echo $result['course_name']?></option>

    <?php
}

    ?>
	
</select>
<!-- <script type="text/javascript">
	$(document).ready(function()
	{
		$('#courses').on('change'.function())
		{
			var coursesID =$(this).val();
			if(coursesID)
			{
				$.ajax({
					type:'POST',
					url:'ajaxData.php',
					data:'course_id='+coursesID,
					success:function(html)
					{}
				});
			}
		};
	});

</script> -->

</body>
</html>



<?php

$q="SELECT * FROM  courses";
$sql=mysqli_query($con,$q);
$i=0;
while ($result=mysqli_fetch_array($sql)) {
$i++;


?>

<h2><?php echo $result['course_name']?></h2>

<?php
}
?>