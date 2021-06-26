 <?php
	require 'connection.php';
	session_start();
	if (isset($_SESSION['id'])) {

		$id = $_SESSION['id'];
		$result = $con->query("SELECT * from users where id='$id'");
		$profile = $result->fetch_object();
	}
	?>


 <?php
	require("connection.php");
	extract($_POST);

	?>
 <html class="no-js">

 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>BookMyJourney</title>

 	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
 	<link rel="shortcut icon" href="favicon.ico">

 	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

 	<!-- Animate.css -->
 	<link rel="stylesheet" href="css/animate.css">
 	<!-- Icomoon Icon Fonts-->
 	<link rel="stylesheet" href="css/icomoon.css">
 	<!-- Bootstrap  -->
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<!-- Superfish -->
 	<link rel="stylesheet" href="css/superfish.css">
 	<!-- Magnific Popup -->
 	<link rel="stylesheet" href="css/magnific-popup.css">
 	<!-- Date Picker -->
 	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
 	<!-- CS Select -->
 	<link rel="stylesheet" href="css/cs-select.css">
 	<link rel="stylesheet" href="css/cs-skin-border.css">

 	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="css/search.css">

 	<!-- Modernizr JS -->
 	<script src="js/modernizr-2.6.2.min.js"> </script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

 	<style>
 		table {
 			border-collapse: collapse;
 			width: 40%;
 			color: black;
 			/*display: none;*/
 		}

 		.tablebody {
 			width: 50%;
 			height: 100%;
 			margin-left: auto;
 			margin-right: auto;
 		}

 		th,
 		td {
 			text-align: left;
 			padding: 0px;
 			width: auto;
 		}
 		tr:nth-child(even) {
 			background-color: #f2f2f2
 		}

 		th {
 			background-color: #4CAF50;
 			color: white;
 		}
 		#myInput {
 			border-color: green;
 			margin-top: 20px;
 		}
 		/*This is for pagination*/
 		.center {
 			text-align: center;

 		}
 		.pagination {
 			display: inline-block;
 			margin-top: 0px;
 		}
 		.pagination a {
 			color: black;
 			float: left;
 			padding: 8px 16px;
 			text-decoration: none;
 			transition: background-color .3s;
 			border: 1px solid #ddd;
 			margin: 0 4px;
 		}
 		.pagination a.active {
 			background-color: #4CAF50;
 			color: white;
 			border: 1px solid #4CAF50;
 		}

 		.pagination a:hover:not(.active) {
 			background-color: #ddd;
 		}
 	</style>
 </head>
 <body>
 	<body>
 		<div id="fh5co-wrapper">
 			<div id="fh5co-page">

 				<header id="fh5co-header-section" class="sticky-banner">
 					<div class="container">
 						<div class="nav-header">
 							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
 							<h1 id="fh5co-logo"><a href="index.php">BookMyJourney</a></h1>
 							<!-- START #fh5co-menu-wrap -->
 							<nav id="fh5co-menu-wrap" role="navigation">
 								<ul class="sf-menu" id="fh5co-primary-menu">
 									<li class="active"><a href="index.php">Home</a></li>

 									<li><a href="schedule.php">Train Schedule</a></li>
 									<?php
										if (isset($id)) {
										?>
 										<li><a href="profile.php"><?php echo  $profile->username; ?></a></li>
 									<?php	} else { ?>
 										<li><a href="loginsignup.php">Login/Signup</a></li>
 									<?php	} ?>
 									<!-- <li><a href="view.php">My Profile</a></li> -->
 									<li><a href="contact.php">Contact</a></li>
 								</ul>

 							</nav>
 						</div>
 					</div>
 				</header>

 				<!-- end:header-top -->
 				<div class="tablebody">

 					<div class="search">
 						<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
 						<table class="table table-bordered table-striped">
 							<thead>
 								<tr class="header">
 									<th>Id</th>
 									<th>Number</th>
 									<th>Name</th>
 									<th>Source</th>
 									<th>Destination</th>
 									<th>Schedule</th>
 								</tr>
 							</thead>
 							<tbody id="myTable">

 								<?php
									$q = "SELECT * FROM train_schedule";
									$data = mysqli_query($con, $q);
									$i = 0;
									while ($result = mysqli_fetch_array($data)) {
										$i++;

									?>
 									<tr>
 										<td><?php echo $i; ?></td>
 										<td><?php echo $result['train_num']; ?></td>
 										<td id="tname"><?php echo $result['train_name']; ?></td>
 										<td><?php echo $result['source']; ?></td>
 										<td><?php echo $result['destination']; ?></td>
 										<td><button onclick="document.getElementById('id01').style.display='block'" class="">Open</button></td>
 									</tr>
 									<tr>
 									</tr>
 								<?php
									}
									?>
 							</tbody>
 						</table>
 					</div>
 				</div>
		</div>
 			<?php include 'footer/footer.php';  ?>
 		</div>
 		

 		</div>
 		
 		<script src="js/jquery.min.js"></script>
 		<!-- jQuery Easing -->
 		<script src="js/jquery.easing.1.3.js"></script>
 		<!-- Bootstrap -->
 		<script src="js/bootstrap.min.js"></script>
 		<!-- Waypoints -->
 		<script src="js/jquery.waypoints.min.js"></script>
 		<script src="js/sticky.js"></script>
 		<!-- Stellar -->
 		<script src="js/jquery.stellar.min.js"></script>
 		<!-- Superfish -->
 		<script src="js/hoverIntent.js"></script>
 		<script src="js/superfish.js"></script>
 		<!-- Magnific Popup -->
 		<script src="js/jquery.magnific-popup.min.js"></script>
 		<script src="js/magnific-popup-options.js"></script>
 		<!-- Date Picker -->
 		<script src="js/bootstrap-datepicker.min.js"></script>
 		<!-- CS Select -->
 		<script src="js/classie.js"></script>
 		<script src="js/selectFx.js"></script>
 		<!-- Main JS -->
 		<script src="js/main.js"></script>



 		<script>
 			$(document).ready(function() {
 				$("#myInput").on("keyup", function() {
 					var value = $(this).val().toLowerCase();
 					$("#myTable tr").filter(function() {
 						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 					});
 				});
 			});
 		</script>

 	</body>

 </html>