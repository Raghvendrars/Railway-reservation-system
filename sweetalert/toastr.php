<!DOCTYPE html>
<html>
<head>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="toastr.css" rel="stylesheet"/>
	<script src="toastr.js"></script>
</head>
<body>
	<button class="success">Success</button>
	<script>
		$(".success").click(function(){
			toastr["success"]("Data added successfully","success");
		</script>

</body>
</html>