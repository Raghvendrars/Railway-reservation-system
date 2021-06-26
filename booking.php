
<?php
require 'connection.php';
session_start();
if(isset($_SESSION['id']))
{

$id=$_SESSION['id'];
$result=$con->query("SELECT * from users where id='$id'");
$profile=$result->fetch_object();

}
?>



<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Booking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style type="text/css">
			
			#classtable{
				width: 100%;
				border:2px black;
  /*display:flex;*/
  justify-content:center;
  				align-items:center;
                min-height:18vh;
                margin-top: -27px;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin-bottom: 0px;
			}

			#classtable th{
				 font-size: 17px;
				 padding-top: 8px;
  				 color: white;
  			     text-align: center;
                 background:#E01A0E;
                 min-height:6vh;
                 font-family:Arial, Helvetica, sans-serif;
			     }
			#classtable td{
				color: black;
  text-align: center;
  /*display: flex;*/
  flex: 1 1 20%;
  padding-top:10px;
  font-weight: bold;
			}

#classtable #avail{
  color: green;
}
#classtable #wl{
  color: red;
}

#classtable #tn{
  color: red;
}
#classtable a{
  /*width: 100%;*/

  background-color:#E01A0E;
  color: white;
  padding: 08px 20px;
  /*margin: 8px 0;*/
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
#classtable a:hover{
  background-color:#1A7809    ;

}
#h2cs h2{
  text-align: center;
   color:white; 
   margin-top: 07%; 
   font-weight: bold;"
}
form{
  background-color: white;
  border: 8px solid white;
  border-radius: 9px;

}
#details p{
  color:#0B66DA; 
  margin: 7px;
  margin-bottom: 40px;
  margin-left: 40px;
  margin-right: auto;
  
  margin-top: -20px; 
  font-size: 22px; 
  font-weight: 800;
  text-align: center;
  line-height: 20px;

}

		</style>
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				    
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
                            if(isset($id))
                            {
                                ?>
                            <li><a href="profile.php"><?php echo  $profile->username;?></a></li>
                           <?php    }
                            else
                            { ?>
                                <li><a href="loginsignup.php">Login/Signup</a></li>
                        <?php   } ?>
                            <!-- <li><a href="view.php">My Profile</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>

                    </nav>
                </div>
            </div>
        </header>
			</header>		
			<section id="main" style="background-color: #00041C;">
				<div class="inner" >
					
                 <header id="h2cs">
						<h2 >Choose Your Class </h2>
						
					</header>
				<form >	
				<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
	
         	
           <table id="classtable">
           	
           	     	<?php

          	     	 $id=$_GET['getid'];
           	     	 $q="SELECT * FROM class INNER JOIN fare ON class.train_num=fare.train_num ";
                  // $q="SELECT * FROM class INNER JOIN train_schedule ON class.train_num=train_schedule.train_num";
           	     	 $sql = mysqli_query($con,$q);
           	     	 $result = mysqli_fetch_array($sql);
           	     	?>
               <div id="details" style="display: inline-flex;">
                 <p style="text-align: center;"><?php echo $result['train_num']?></p>
                  <p>KASHI V EXPRESS</p>
                <!-- <p style="color: black;">from:</p>
                 <p><?php echo $result['source']?></p>
                 <p style="color: black">To:</p>
                 <p> <?php echo $result['destination']?></p> -->
                 </div>
              <thead>
              <th>Train</th>
              <th>AC(1A)</th>
              <th>AC(2-Tier)</th>
              <th>AC(3-Tier)</th>
              <th>AC(CC)</th>
              <th>Sleeper(SL)</th>
              <!-- <th>2nd-Sitting(2S)</th> -->
              
               </thead>
                 <tbody>
           	     	<tr>
           	     		<td id="tn"><?php echo $result['train_num']?></td> 
           	     		<td id="avail"><?php echo $result['class']?></td>
           	     		<td id="avail"><?php echo $result['ac_2t_2a']?></td>
           	     		<td id="wl"><?php echo $result['ac_3t_3a']?></td>
           	     		<td id="avail"><?php echo $result['ac_cc']?></td>
           	     		<td id="avail"><?php echo $result['sleeper']?></td> 
           	     		
           	     	</tr>
                  <tr>
                    <td>Fare</td>
                    <td><?php echo $result['fare']?></td>
                    <td><?php echo $result['2nd_ac']?></td>
                    <td><?php echo $result['3rd_ac']?></td>
                    <td><?php echo $result['ac_cc']?></td>
                    <td><?php echo $result['sleep']?></td>
                    </td>


                  </tr>




           	     	<tr>
           	     		<td></td>
           	     		<td><a href="bookform.php">Book</a></td>
           	     		<td><a href="bookform.php">Book</a></td>
           	     		<td><a href="bookform.php">Book</a></td>
           	     		<td><a href="bookform.php">Book</a></td>
           	     		<td><a href="bookform.php">Book</a></td>
           	     		
           	     		
           	     	</tr>

           	     	<?php

           	     	?>
           	     </tbody>     	
           </table>
              </form>

              <header id="h2cs">
					<h2>Cast Away..Find yourself at better place/</h2>
						
					</header>
         		
				</div>
			</section>

			<?php include 'footer/footer.php';?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>