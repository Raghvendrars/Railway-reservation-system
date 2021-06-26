
<?php
 require("connection.php");
 extract($_POST);

?>


<!DOCTYPE html>
	<head>
	 <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BookMyJourney</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/git/bootstrap.min.css">
        <!-- Animated text css -->
		<link rel="stylesheet" href="css/git/animated.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/git/owl.carousel.css">
        <link rel="stylesheet" href="css/git/owl.transitions.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/git/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/git/animate.css">
		<!-- style css -->
	     <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact/contact.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



 
	

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
	


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



	

	</head>
	<body>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php include 'header/header.php'; ?>

          <div id="contact" class="contact-area area-padding">
            <div class="head-overly"></div>
		    <div class="container">

                <div class="row contact-inner">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="Cont-content">
                            <h4 class="intro-head">Contact me</h4>
                        </div>
                        <div class="map-zone">
                            <!-- Map area -->
                            <div class="map-area">
                            </div><!-- End Map area -->
                            <div class="contact-info">
                                <div class="contact-icons">

                                    <h1 style="color:black;font-weight: 500;">Contact info</h1>
                                    <ul style="color: red;">
                                        <li>
                                            <strong style="font-size: 17px;">Ahmedabad, India.</strong>
                                             
                                        </li>
                                        <li>
                                            <strong style="font-size: 17px;">+919574547152</strong>
                                            
                                        </li>
                                        <li>
                                            <strong style="font-size: 17px;">Raghav26897@gmail.com</strong>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="icons-bottom text-center">
                                    <ul>
                                       <li><a href="https://www.facebook.com/raghvendrars">
                                       	<i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://github.com/Raghav26897">
                                        	<i class="fab fa-github"></i></a></li>
                                        <li><a href="https://www.instagram.com/__raghav__singh__/">
                                        	<i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/raghavendra-singh-a14109154/">
                                        	<i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <div class="Cont-content">
                                <h4 class="intro-head">Leave a massege</h4>
                            </div>
                            <div class="row contact-bg" >
                                <form action="contact_register.php" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input name="txtname" type="text" placeholder="Name (required)" style="font-weight: 500;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="txtemail" type="email" placeholder="Email (required)" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtsub" type="text" placeholder="Subject" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        <input type="submit" name="btnInsert" value="Submit Form" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
		<!-- End contact Area -->
        <!-- Start Footer bottom Area -->
           <?php include 'footer/footer.php'; ?>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

