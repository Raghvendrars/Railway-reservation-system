
<?php
 require("connection.php");
 extract($_POST);

?>


<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	
<!-- 	<link rel="stylesheet" type="text/css" href="css/search.css">
 -->	<!-- <link rel="stylesheet" href="csss/styles.css"> -->
 <!-- Login Css -->
    <link rel="stylesheet" type="text/css" href="css/logcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-theme9.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body style="height:70%;">
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
                             

			<?php include  'header/header.php'; ?>



		<div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="images/logimg/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logimg/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="loginsignup.php" class="active">Login</a><a href="loginsignup2.php">Register</a>
                        </div>
                        <form action="controller.php" method="POST">
                        <input class="form-control" type="text" name="username" placeholder="E-mail Address" required style="color: red; font-weight: bold; font-size: 15px;">
                        <input class="form-control" type="password" name="password" placeholder="Password" required style="color: red; font-weight: bold; font-size: 15px;">
                        <div class="form-button">
                        <button id="submit" type="submit" name="btnLogin" class="ibtn">Login</button>
                        <a href="forget9.html">Forget password?</a>
                        </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
		
      			<?php
		if(isset($_SESSION['error'])){
			echo "<b style='color:red'>".$_SESSION['error']."</b><br>";
			unset($_SESSION['error']);
		}else
		{
			echo "";
		}
	?><br>
	
		</div>
		</div>
	
		<?php include 'footer/footer.php';  ?>
	
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
    <script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

     <!-- Login Javascript -->
     <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

    <script  src="jss/index.js"></script>





	</body>
</html>

