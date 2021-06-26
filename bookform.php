<?php

require 'connection.php';
extract($_POST);

session_start();
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$dat=$con->query("SELECT * from users where id='$id'");
$profile=$dat->fetch_object();
}
?>




<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
  die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'train_details');
if(!$selectdb){
  die("Database Selection Failed" . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Basic hotel booking form</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="bookingform/css/style.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style type="text/css">
  h2,h3{
    text-align: center;}

  
  #state-select,#city-select{
      display: none;
    }

    #transid, #tnameid{

    /*width: 100%;*/
  
  
  }
  .column {
  float: right;
  width: 15%;
  cursor: pointer;
  border-bottom: 1px solid black;
  margin-top: -52px;
  font-weight: bold;
  color: red;
  font-family: helvetica;
  text-decoration: none;
  text-transform: uppercase;

}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: red;
  font-size: 35px;
  cursor: pointer;
}
</style>
  
</head>

<body style="background-image: url(images/bookform.jpg);">

      
<header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo">
                      <a href="index.php">BookMyJourney</a></h1>
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

           <div class="upper-cont">
           <?PHP
              if (!(isset($_SESSION['id']) && $_SESSION['id'] != '')) {
                    header ("Location: loginsignup.php");
                  }
                  ?>
           <div style="border: 2px solid black; width: 70%;margin-left: 200px;">
           <div class="imgcss" style="margin-left: 430px; margin-top: 30px; ">
           <i class="fas fa-subway fa-3x" style=""></i>
           </div>
           <div>
           <h2 style="font-weight: bold">Passenger Details</h2>
          </div>
          </div>
          </div>


<!-- Dropdown Code -->





<div class="main-cont">
  <h4>Note: The Adhar card will be required during journey</h4>
  <form class="mainfor" action="transaction.php" method="POST" enctype="multipart/form-data">
  <div id="td"> 


                         <?php
                             $id=$_GET['getid'];
                              $sql = "SELECT * FROM train_schedule WHERE id = '$id'";
                              $q1 = mysqli_query($con, $sql);
                              $data = mysqli_fetch_array($q1);
                            ?>
  
    <label id="lables" style="margin-left: 5%;">Train No:</label>
    <input type="number" name="txttname" id="tdata" value="<?php echo $data['train_num']?>">
    <label id="lables" style="margin-left:2%;">Train Name:</label>
    <input type="text"  name="transid" id="tdata" style="width: 16%;" value="<?php echo $data['train_name']?>">
    <label id="lables" style="margin-left: 4%;">From</label>
    <input type="text"  name="transid" id="tdata" value="<?php echo $data['source']?>">
    <label id="lables" style="margin-left: 2%">To</label>
    <input type="text"  name="transid" id="tdata" value="<?php echo $data['destination']?>"><br>
    <!-- <label id="lables" style="display: none;">Transaction id:</label> -->
    <input type="number" name="transid" style="display: none;" id="transid" value="<?php echo rand(100000, 999999);?>">
    <!-- <label id="lables" style="">PNR:</label> -->
    <input type="number" name="transid" style="display: none;" id="transid" value="<?php echo rand(100000, 999999);?>">
    <?php

                  ?>
    
    </div>
    <div id="form" class="custom-select">
         <!-- <h2>Select the Country & State</h2> -->
         <label id="lables" style="">Class:</label>
          <select id="country-select">
            <option disabled selected>Select Class</option>
            <?php
               $sql = "SELECT * FROM countries";
               $result = mysqli_query($connection, $sql);
               while($row = mysqli_fetch_assoc($result)){
             ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
            <?php } ?>
          </select>
          <select id="state-select">
    
          </select>
          <select id="city-select">
    
          </select>
          <script type="text/javascript">
            function getStatesSelectList(){
            var country_select = document.getElementById("country-select");
            var city_select = document.getElementById("city-select");
      
            var country_id = country_select.options[country_select.selectedIndex].value;
            console.log('CountryId : ' + country_id);

            var xhr = new XMLHttpRequest();
            var url = 'states.php?country_id=' + country_id;
            // open function
            xhr.open('GET', url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
            // check response is ready with response states = 4
            xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
             var text = xhr.responseText;
            //console.log('response from states.php : ' + xhr.responseText);
            var state_select = document.getElementById("state-select");
            state_select.innerHTML = text;
            state_select.style.display='inline';
            city_select.style.display='none';
             }
            }

            xhr.send();
          }

            function getCitySelectList(){
            var state_select = document.getElementById("state-select");

            var state_id = state_select.options[state_select.selectedIndex].value;
            console.log('StateId : ' + state_id);

            var xhr = new XMLHttpRequest();
            var url = 'cities.php?state_id=' + state_id;
            // open function
            xhr.open('GET', url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
            // check response is ready with response states = 4
            xhr.onreadystatechange = function()
            {
              if(xhr.readyState == 4 && xhr.status == 200)
              {
               var text = xhr.responseText;
               //console.log('response from cities.php : ' + xhr.responseText);
               var city_select = document.getElementById("city-select");
               city_select.innerHTML = text;
               city_select.style.display='inline';
               }
              }

              xhr.send();
             }

             var country_select = document.getElementById("country-select");
             country_select.addEventListener("change", getStatesSelectList);

             var state_select = document.getElementById("state-select");
             state_select.addEventListener("change", getCitySelectList);
            </script>
            </div>


            <!-- Second drop down -->
            <div id="form" class="custom-select">
         <!-- <h2>Select the Country & State</h2> -->
         <label id="lables" style="">Class:</label>
          <select id="country-select">
            <option disabled selected>Select Class</option>
            <?php
               $sql = "SELECT * FROM class";
               $result = mysqli_query($connection, $sql);
               while($row = mysqli_fetch_assoc($result)){
             ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
            <?php } ?>
          </select>
          <select id="state-select">
    
          </select>
          <select id="city-select">
    
          </select>
          <script type="text/javascript">
            function getStatesSelectList(){
            var class_select = document.getElementById("class-select");
            var city_select = document.getElementById("city-select");
      
            var class_id = class_select.options[class_select.selectedIndex].value;
            console.log('ClassId : ' + class_id);

            var xhr = new XMLHttpRequest();
            var url = 'states.php?class_id=' + class_id;
            // open function
            xhr.open('GET', url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
            // check response is ready with response states = 4
            xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
             var text = xhr.responseText;
            //console.log('response from states.php : ' + xhr.responseText);
            var state_select = document.getElementById("state-select");
            state_select.innerHTML = text;
            state_select.style.display='inline';
            city_select.style.display='none';
             }
            }

            xhr.send();
          }

            function getCitySelectList(){
            var state_select = document.getElementById("state-select");

            var state_id = state_select.options[state_select.selectedIndex].value;
            console.log('StateId : ' + state_id);

            var xhr = new XMLHttpRequest();
            var url = 'cities.php?state_id=' + state_id;
            // open function
            xhr.open('GET', url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
            // check response is ready with response states = 4
            xhr.onreadystatechange = function()
            {
              if(xhr.readyState == 4 && xhr.status == 200)
              {
               var text = xhr.responseText;
               //console.log('response from cities.php : ' + xhr.responseText);
               var city_select = document.getElementById("city-select");
               city_select.innerHTML = text;
               city_select.style.display='inline';
               }
              }

              xhr.send();
             }

             var class_select = document.getElementById("class-select");
             class_select.addEventListener("change", getStatesSelectList);

             var state_select = document.getElementById("state-select");
             state_select.addEventListener("change", getCitySelectList);
            </script>
            </div>



<div id="travel">
  <h3>Traveller Details</h3>
  
    <div class="column" onclick="openTab('b1');" style="">Add More Traveller</div>
    <input type="text" id="nameid" name="txtname" placeholder="Name">    
    <input type="text" id="ageid" name="txtage" placeholder="Age">  
    <select id="sel" name="gen">
      <option>Gender</option>
      <option name="opt1" >Male</option>
      <option name="opt2">Female</option>
      <option name="opt3">Transgender</option>
    </select>
    <input type="text" name="txtnum" placeholder="Mobile No">   
    <input type="text" id="adharid" name="txtadhar" placeholder="Adhar">

  <div id="b1" class="containerTab" style="display:none; margin-top: -25px;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  
  <input type="text" id="nameid" name="txtname" placeholder="Name">    
    <input type="text" id="ageid" name="txtage" placeholder="Age">
    <select id="sel" name="gen">
      <option>Gender</option>
      <option name="opt1" >Male</option>
      <option name="opt2">Female</option>
      <option name="opt3">Transgender</option>
    </select>
    <input type="text" name="txtnum" placeholder="Mobile No">   
    <input type="text" id="adharid" name="txtadhar" placeholder="Adhar">
</div>
</div> 



    <div id="btnid">
    <input type="reset" id="btn1" name="reset" value="Reset">
    <input type="submit" id="btn1" name="btnInsert" value="Submit">
    </div>


    <?php ?>
    
  </form>
  

</div>

<?php include 'footer/footer.php'; ?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>
    <script  src="bookingform/js/index.js"></script>

<!-- For add new passenger -->
    <script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>


</body>

</html>
