
<?php
    require("connection.php");
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.admireadmin.com/admire_html/delete_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:01 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Delete User | Admire</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- end fo global styles-->
    <!-- plugin styles-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <!--end of page level css-->
    <link rel="stylesheet" href="#" id="skin_change"/>
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
                <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index.php">
                    <h4 class="text-white"><img src="img/logow.png" class="admin_img" alt="logo">ADMIN</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                
                <div class="topnav dropdown-menu-right ml-auto">
                   
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="img/admin.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                <strong>Raghvendra</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admin</div>
                                <a class="dropdown-item" href="edit_user.php"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i> User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>
                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
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
                        <i class="fa fa-home"></i>
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
                        <li class="active">
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
                            <a href="404.html">
                                <i class="fa fa-angle-right"></i> &nbsp; 404
                            </a>
                        </li>
                        <li>
                            <a href="500.html">
                                <i class="fa fa-angle-right"></i> &nbsp; 500
                            </a>
                        </li>
                        <li>
                            <a href="login1.html">
                                <i class="fa fa-angle-right"></i> &nbsp; Login 1
                            </a>
                        </li>
                        <li>
                            <a href="login2.html">
                                <i class="fa fa-angle-right"></i> &nbsp;
                                <span class="link-title">&nbsp;Login 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="login3.html">
                                <i class="fa fa-angle-right"></i> &nbsp;
                                <span class="link-title">&nbsp;Login 3</span>
                            </a>
                        </li>
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
                
                            </ul>
            <!-- /#menu -->
        </div>
    </div>
    <!-- /#left -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-user"></i>
                        Delete User
                    </h4>
                </div>
                <div class="col-sm-7 col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                        <li class="breadcrumb-item active">Delete User</li>
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
                            <div class="card-header bg-white">
                                <i class="fa fa-user"></i>
                                Deleted Users List
                            </div>
                            <div class="card-body m-t-35 table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Gender</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     <tr class="even">
                                        <td class="sorting_1">Martena</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                     <tr class="odd">
                                        <td class="sorting_1">Cedric</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                    <tr class="even">
                                        <td class="sorting_1">Sonya</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">Gavin</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr> 



               
            
                                    </tbody>
                                </table>
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

<script src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="vendors/holderjs/js/holder.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="js/pages/validation.js"></script>
<!-- end of plugin scripts-->
</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/delete_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:01 GMT -->
</html>