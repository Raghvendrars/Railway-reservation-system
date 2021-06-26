<?php
require 'connection.php';
extract($_POST);
session_start();
if(isset($_SESSION['id']))
{

$id=$_SESSION['id'];
$result=$con->query("SELECT * from users where id='$id'");
$profile=$result->fetch_object();

}
?>


<html class="no-js">
	<head>
	<!-- Modernizr JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
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
		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Trains</a>
								      </li>
								      
								   </ul>

								   <!-- Tab panes -->

								   <form  action="index.php" method="POST">

									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From:</label>
									<input type="text" name="source" class="form-control" id="from-place" placeholder="Ahmedabad"/ >
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
									<input type="text" name="destination" class="form-control" id="to-place" placeholder="New Delhi"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Journey</label>
									<input type="text"  name="jdate" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
									<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Return</label>
									<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div> 
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select class="cs-select cs-skin-border" name="ddclass">
														<option value="" disabled selected>All Class</option>
														<option value="economy">AC First Class (1A)</option>
														<option value="first">AC 2 Tier (2A)</option>
														<option value="business">AC 3 Tier (3A)</option>
														<option value="business">AC Chair Car (CC)</option>
														<option value="business">Sleeper (SL)</option>
														<option value="business">Second Sitting (2S)</option>


													</select>
												</section>
											</div>
										<div class="col-xs-12">
						<input type="submit" name="btn_search" class="btn btn-primary btn-block" value="Search Train" >
											</div>
										</div>
									 </div>

									</div>
								</form>
								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<!-- <p>HandCrafted by FreeHTML5.co</a></p> -->
									<h2>Book Your Online Ticket Here</h2>
									<h3>Best wishes for a safe, happy, and healthy journey!</h3>
									<span class="price"></span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>




<div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Perfect Holidays</h3>
            <!-- <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p> -->
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-lg-4 col-md-4 col-sm-6">
            
            <table style="width:800px; border: 1px solid #ddd; padding: 8px;">
              <thead>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Source</th>
                <th>Destination</th>
              </thead>
              <tbody id="maintable">
                
              </tbody>
            </table>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              
            </div>
          </div>
          <div class="clearfix visible-md-block"></div>
        </div>

      </div>
    </div>
			</div>

		</div>
		

		
<div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>All Trains</h3>
            <!-- <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p> -->
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-lg-4 col-md-4 col-sm-6">
            
            <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>

            <table   id="traintable" style="width:800px; border: 2px solid black; padding: 8px;margin-left: 40%; ">

            	 <thead>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Availability</th>
              </thead>
              
               <?php
                    
               if (isset($_POST['btn_search']))
              {
       	       $strkey1=$_POST['source'];
               $strkey2=$_POST['destination'];
               $strkey3=$_POST['jdate'];
               $sql="SELECT * FROM `train_schedule` WHERE source= '$strkey1' AND 
               destination='$strkey2' AND  jdate='$strkey3' ";
               $query=mysqli_query($con,$sql);
               // print_r($query);
               // exit();
               while ($row=mysqli_fetch_array($query)) 
               {
               ?>
               
              <tbody id="maintable">
   
                <tr style="color: black;">
                  <!-- <td><?php echo $i; ?></td> -->
                  <td><?php echo $row['train_num'];?></td>
                  <td><?php echo $row['train_name'];?></td>
                  <td><?php echo $row['source'];?></td>
                  <td><?php echo $row['destination'];?></td>
                  <td><?php echo $row['jdate'];?></td>
                  <!-- <td><button class="button1" type="button" onclick="show('classview'); ">Book</button></td> -->
                   <td> <a title="Edit" href="bookform.php?getid=<?php echo $row['id']; ?>">Book</a></td>
                   
                </tr>

                 <?php
                   }
                  ?>
               </tbody>


               <?php
                 }
                ?>
              </table>
          

          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              
            </div>
          </div>
          <div class="clearfix visible-md-block"></div>
        </div>

      </div>
    </div>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Perfect Holidays</h3>
						<p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">GateWay of India (Mumbai)</a></h3>
									<p>The heritage city of India</p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-2.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">India Gate (New Delhi)</a></h3>
									<!-- <span class="posted_by">Sep. 15th</span> -->
									<!--<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>-->
									<p>The heart of India</p>
									<!-- <p><a href="#">Learn More...</a></p> -->
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-3.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">The Tajmahal (Agra)</a></h3>
									<!--<span class="posted_by">Sep. 15th</span>-->
									<!--<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>-->
									<p>One of seven Wonder's of world..</p>
									<!--<p><a href="#">Learn More...</a></p>-->
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

			</div>
		</div>
		
	</div>
		<?php include 'footer/footer.php';  ?>

	

	</div>
	<!-- END fh5co-page -->
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
<script>
	function show(elementId) { 
document.getElementById("container").style.display="block";
}
</script>
	
	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

	</body>
</html>

