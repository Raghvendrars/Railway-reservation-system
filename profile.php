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
    <link rel="stylesheet" type="text/css" href="css/profile.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js">	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Pprofile table -->
<!-- for edit table -->

<style>
#profile-name{
    
    text-align: center; 
    padding-top:20px; 
    color: white;

    font-family: bold;
    font-size: 35px;
    /*border-radius: px;*/
    /*margin-left: 400px;"*/
    

}

.profile-head{
    margin-left: 30px;
    padding-top: ;
}

#btnAddMore{
    background-color: #C70039;
    border: none;
    color: white;
    margin-top: 02%;
    padding:08px 12px;
    border-radius: 10px;
}
#btnAddMore:hover{
    background-color: green;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#btn-logout{
    background-color: #C70039;
    border: none;
    color: white;
    margin-top: 02%;
    padding:08px 12px;
    border-radius: 10px;
    font-size: 20px;
}

#btn-logout:hover{
    background-color: green;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#result a{
    color: #FF0000;
    font-weight: bold;
}




/*popup*/


</style>



</head>
	
	<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);"  >
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
	
				<div class="container emp-profile">
                 <form method="post">
                    <div class="row">

                    <div class="col-md-6" style="background-color: #FF334C  ; min-width: 100%; padding-top: -30px; max-height: 30%; " >


                                     <?php
                                        $q="SELECT * from users inner join transaction on users.id=transaction.id";
                                         $sql=mysqli_query($con,$q);
                                          
                                        $result = mysqli_fetch_array($sql);

                                        ?>
                                    <div class="profile-head">
                                    <h2 id="profile-name">
                                    <?php echo $result['username']?>
                                    </h2><br><br><br>
                                    <h5 style="font-size: 20px; ">
                    <button id="btn-logout" style="float: right;"><a href="logout.php" style="color: white;">Logout</a></button>
                    <input type="submit" id="btnAddMore" name="btnAddMore" value="Edit Profile" style="float: right;"></a>
                               
                        </div>
                    </div>

                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist" >
                                <li class="nav-item" >
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Booking</a>
                                </li>
                                
                            </ul>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['username']?></p> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $result['email']?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['phone']?> </p>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p> 
                                            </div>
                                        </div> -->

                                        <?php

                                ?> 
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       
                            <div id="customers">
                                
                                <table id="result">
                                    <thead>
                                        <th>Id</th>
                                        <th>Booking Id</th>
                                        <th>PNR</th>
                                        <th>Passenger</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Fare</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>


                                      <?php

                                         $q="SELECT * from transaction inner join users on transaction.user_id=users.user_id";
                                         $sql=mysqli_query($con,$q);
                                        $i=0;
                                        while ($result = mysqli_fetch_array($sql)) {
                                        $i++;
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $result['trans_id'];?></td>
                                            <td><?php echo $result['pnr'];?></td>
                                            <td><?php echo $result['name'];?></td>
                                            <td><?php echo $result['age'];?></td>
                                            <td><?php echo $result['gender'];?></td>
                                            <td>RS.<?php echo $result['fare'];?>/-</td>
                           
                            <td><a class="button" href="ticket_view.php?getid=<?php echo $result['id']; ?>">View</a></td>
                             <td> <a href="invoice.php?getid=<?php echo $result['id']; ?>">Print</a></td>
                            </tr>
        <!-- Popup -->
                               
                                        <?php
                                          }
                                         ?>
                            
                                    </tbody>
                                </table>


                                   </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

		<!-- fh5co-page -->
		</div>
	
		<?php include  'footer/footer.php'; ?>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	</body>
</html>

