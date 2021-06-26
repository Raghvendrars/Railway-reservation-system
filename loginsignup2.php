
<?php

require("connection.php");
 extract($_POST);

session_start();
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$dat=$con->query("SELECT * from users where id='$id'");
$profile=$dat->fetch_object();
}
?>

 <html class="no-js"> 
	<head>
    <link rel="stylesheet" type="text/css" href="css/logcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/logcss/iofrm-theme9.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body style="height:70%;">
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
                            
                                <li><a href="loginsignup.php">Login/Signup</a></li>
                        
                            <!-- <li><a href="view.php">My Profile</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>

                    </nav>
                </div>
            </div>
        </header>

		<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Signup platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <!-- <img src="images/graphic5.svg" alt=""> -->
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <!-- <img class="logo-size" src="images/logoimg/logo-light.svg" alt=""> -->
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="loginsignup.php">Login</a><a href="loginsignup2.php" class="active">Register</a>
                        </div>
                        <form action="registration_process.php" method="POST" enctype="multipart/form-data">
                            <input class="form-control" type="text" name="txtuname"  placeholder="Full Name" required style="color: red; font-weight: bold; font-size: 15px;">
                          <input class="form-control" type="text" name="txtph" placeholder="Phone Number" required style="color: red; font-weight: bold; font-size: 15px;">
                           <input class="form-control" type="text" name="txtemail" placeholder="E-mail Address" required="" value="" style="color: red; font-weight: bold; font-size: 15px;">

                            <input class="form-control" type="Password" name="txtpass" placeholder="Password" required style="color: red; font-weight: bold; font-size: 15px;">
                            <div class="form-button">
                                <button id="submit" type="submit" name="btnInsert" class="ibtn" >Register</button>
                            </div>
                            <!-- <?php  echo $_SESSION['txtemail']="email Are Alredy Exits";?> -->
                        </form>
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
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
	?>
    <br>
		</div>
		</div>

		<?php include 'footer/footer.php'; ?>
	</div>
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

<script type="text/javascript">
    
        

   
    
    

</script>

	</body>
</html>

