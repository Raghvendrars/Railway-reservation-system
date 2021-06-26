<?php
    require("connection.php");
    extract($_GET);
?>

<html class="no-js" lang="en">


<!-- Mirrored from demo.admireadmin.com/admire_html/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:05:29 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Edit User | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- end fo global styles-->
    <!-- plugin styles-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--end of page level css-->
    <link rel="stylesheet" href="#" id="skin_change" />
</head>

<body>





<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
    <div id="wrap">
        <div id="top">
            <!-- .navbar -->
            <?php include 'header/header.php';?>
            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper">
            <div id="left">
                <div class="menu_scroll">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/admin.jpg">
                                <p class="text-white user-info">Welcome Micheal</p>
                            </a>
                            <div class="search_bar col-lg-12">
                                <div class="input-group">
                                    <input type="search" class="form-control " placeholder="search">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button"><span class="fa fa-search" >
                                    </span></button>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #menu -->
                    <ul id="menu">
                        
                        <li>
                            <a href="index.php">
                                <i class="fa fa-tachometer"></i>
                                <span class="link-title menu_hide">&nbsp;Dashboard

                                </span>
                            </a>
                        </li>
                        
                        
                       
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="link-title menu_hide">&nbsp; Tables</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                            <li>
                                <a href="simple_tables.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Trains
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.php">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; All Trains </span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                        </li>
                        
                        <li class="dropdown_menu active">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp; Users</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="users.php">
                                        <i class="fa fa-angle-right"></i> &nbsp; User Grid
                                    </a>
                                </li>
                                <li>
                                    <a href="add_user.php">
                                        <i class="fa fa-angle-right"></i> &nbsp; Add User
                                    </a>
                                </li>
                                <li>
                                    <a href="view_user.php">
                                        <i class="fa fa-angle-right"></i> &nbsp; User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="delete_user.php">
                                        <i class="fa fa-angle-right"></i> &nbsp; Delete User
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="link-title menu_hide">&nbsp; Email</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_inbox.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_view.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; View
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_sent.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Sent
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_spam.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_draft.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Draft
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_trash.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Trash
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-file"></i>
                                <span class="link-title menu_hide">&nbsp; Pages</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                
                                <li>
                                    <a href="register1.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Register 1
                                    </a>
                                </li>
                                <li>
                                    <a href="register2.html">
                                        <i class="fa fa-angle-right"></i> &nbsp;
                                        <span class="link-title">&nbsp;Register 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="register3.html">
                                        <i class="fa fa-angle-right"></i> &nbsp;
                                        <span class="link-title">&nbsp;Register 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 1
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen2.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 2
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen3.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 3
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <i class="fa fa-angle-right"></i> &nbsp; Blank Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    <!-- /#menu -->
                </div>
            </div>
            <!-- /#left -->
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg">
                            <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-pencil"></i>
                            Edit User
                        </h4>
                        </div>
                        <div class="col-lg">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Users</a>
                                </li>
                                <li class="breadcrumb-item active">Edit User</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body m-t-25">
                                        <div>
                                            <h4>Personal Information</h4>
                                        </div>

                           <?php
                             $id=$_GET['getid'];
                              $sql = "SELECT * FROM users WHERE id = '$id'";
                              $q1 = mysqli_query($con, $sql);
                              $data = mysqli_fetch_array($q1);
                            ?>


<form class="form-horizontal login_validator" id="tryitForm" action="updatedata.php?getid=<?php echo $id ?>" method="POST">
                                            
     <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>

                                            <div class="row">
                                                <div class="col">
                                                  
                                                    <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                <label for="u-name" class="col-form-label">User Name *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                <div class="input-group">
                                <span class="input-group-addon">
                                 <i class="fa fa-user text-primary"></i>
                                </span>
                                <input type="text" name="txtname" id="u-name" class="form-control" value="<?php echo $data['username'];?>">
                                </div>
                                </div>
                                 </div>

                                 <div class="form-group row">
                                 <div class="col-lg-3 text-lg-right">
                                 <label for="phone" class="col-form-label">Phone*</label>
                                 </div>
                                 <div class="col-xl-6 col-lg-8">
                                 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                            <input type="text" placeholder=" " id="phone" name="txtph" value="<?php echo $data['phone'];?>" class="form-control">
                                 </div>
                                 </div>
                                </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                <input type="text" placeholder=" " id="email" name="txtemail" value="<?php echo $data['email'];?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                               <!--  <div class="form-group row">
                                 <div class="col-lg-3 text-lg-right">
                                 <label for="pwd" class="col-form-label">Password *</label>
                                 </div>
                                <div class="col-xl-6 col-lg-8">
                                <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-lock text-primary"></i></span>
                                <input type="password" name="txtpass" id="pwd" class="form-control">
                                </div>
                                </div>
                                </div> -->
                                                    <!-- <div class="form-group gender_message row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label class="col-form-label">Gender *</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio1" type="radio" name="gender" class="custom-control-input" checked>
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Male</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio2" type="radio" name="gender" class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Female</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="address" class="col-form-label">Address *
                                                            </label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                                <input type="text" value="Australia" id="address" name="address1" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                   
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="checkbox1" class="col-form-label">Status *</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div>
                                                                <label class="custom-control custom-checkbox">
                                                                    <input id="checkbox1" type="checkbox" name="activate" class="custom-control-input" checked>
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Activate your account</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-9 ml-auto">
                                                            <button class="btn btn-primary" id="submit2" type="submit" name="btnUpdate">
                                                                Save
                                                            </button>
                                                            <input type="reset" class="btn btn-warning" value='Reset' id="clear" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        <!--wrapper-->
        <div id="right">
            <div class="right_content">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Welcome Micheal
                        <br/></strong> Set Your Skin Here. Checkout Admin Statistics. Good Day!.
                </div>
                <div class="well well-small dark">
                    <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                        Skins
                    </h4>
                    <br/>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
                        <div class="skin_blue skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
                        <div class="skin_green skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
                        <div class="skin_purple skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
                        <div class="skin_orange skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
                        <div class="skin_red skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
                        <div class="skin_mint skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.html','css')">
                        <div class="skin_brown skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.html','css')">
                        <div class="skin_black skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
                    <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
                    <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
                    <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
                    <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
                    <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
                    <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.html','css')"></div>
                    <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.html','css')"></div>
                </div>
                <div class="well well-small dark">
                    <h4 class="brown_txt margin15_bottom">
                        <img src="img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                        Statistics</h4>
                    <br/>
                    <ul class="list-unstyled">
                        <li class="green_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span> &nbsp; Last Login
                            <span class="inlinesparkline float-right">2hrs Back</span>
                        </li>
                        <li class="warning_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Pending Tasks
                            <span class="dynamicsparkline float-right">12</span>
                        </li>
                        <li class="primary_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Weather Today
                            <span class="dynamicbar float-right">Rainy</span>
                        </li>
                        <li class="margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Events
                            <span class="inlinebar float-right">Team Out</span>
                        </li>
                        <li class="success_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Notifications
                            <span class="inlinebar float-right">5</span>
                        </li>
                    </ul>
                </div>
                <div class="well well-small dark right_progressbar_section">
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                        Alerts
                    </h4>
                    <br/>
                    <span>Sales Improvement</span>
                    <span class="float-right">
                <small>20%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Server Load</span>
                    <span class="float-right">
                <small>80%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-mint w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Traffic Improvement</span>
                    <span class="float-right">
                <small>55%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- # right side -->
    </div>
    <!-- /#wrap -->
    <!-- /#footer -->
    <!-- global scripts-->
    <script src="js/components.js"></script>
    <script src="js/custom.js"></script>
    <!-- end of global scripts-->
    <!-- plugin scripts-->
    <script src="js/pluginjs/jasny-bootstrap.js"></script>
    <script src="vendors/holderjs/js/holder.js"></script>
    <script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
    <!-- end of plugin scripts-->
    <script src="js/pages/validation.js"></script>
    <script>
    </script>
</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:05:34 GMT -->
</html>
