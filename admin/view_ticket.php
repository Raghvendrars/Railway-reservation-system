<?php

require 'connection.php';
extract($_GET);

?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/view_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:11:53 GMT -->
<head>
    <meta charset="UTF-8">
    <title>View user | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- Bootstrap -->
    <!--Global css-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--end of Global css-->
    <!--Plugin css-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="vendors/fullcalendar/css/fullcalendar.min.css"/>
    <!--End off plugin css-->
    <!--Page level css-->
    <link rel="stylesheet" href="css/pages/timeline2.css"/>
    <link rel="stylesheet" href="css/pages/calendar_custom.css"/>
    <link rel="stylesheet" href="css/pages/profile.css"/>
    <link rel="stylesheet" href="css/pages/gallery.css"/>
    <link rel="stylesheet" href="#" id="skin_change"/>
    <!--end of page level css-->
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

    <!--new top-->

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
                                    <i class="fa fa-angle-right"></i> &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.php">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
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
                            <li class="active">
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
                            User Profile
                        </h4>
                    </div>
                    <div class="col-12 col-sm-7">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
                            </li>
                            <li class="active breadcrumb-item">User Profile</li>
                        </ol>
                    </div>
                        </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-lg-6 m-t-25">
                                    <?php
                                    $id=$_GET['getid'];
                                    $q="SELECT * from transaction where id='$id'";
                                    $sql=mysqli_query($con,$q);
                                    $data=mysqli_fetch_array($sql);

                                    ?>


                                    <div>
                                        <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
                                        <ul class="nav nav-inline view_user_nav_padding">
                                            <li class="nav-item card_nav_hover">
                                                <a class="nav-link active" href="#user" id="home-tab"
                                                   data-toggle="tab" aria-expanded="true">User Details</a>
                                            </li>
                                            <li class="nav-item card_nav_hover">
                                                <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">About Me</a>
                                            </li>
                                            <li class="nav-item card_nav_hover">
                                                <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Followers</a>
                                            </li>
                                        </ul>
                                        <div id="clothing-nav-content" class="tab-content m-t-10">
                                            <div role="tabpanel" class="tab-pane fade show active" id="user">
                                                <table class="table" id="users" style="font-size: 16px;font-weight: bold;">
                                                    <tr>
                                                        <td>ID</td>
                                                        <td class="inline_edit">
                                                            <span class="editable"
                                                              data-title="Edit User Name">
                                                              <?php echo $data['id'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNR</td>
                                                        <td>
                                                        <span class="editable" data-title="Edit E-mail">
                                                            <?php echo $data['pnr'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transaction Id</td>
                                                        <td>
                                                            <span class="editable" data-title="Edit Phone Number"><?php echo $data['trans_id'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>User Id</td>
                                                        <td>
                                                            <span class="editable" data-title="Edit Address"><?php echo $data['user_id'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Passenger</td>
                                                        <td><?php echo $data['name'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td>
                                                            <span class="editable" data-title="Edit City"><?php echo $data['age'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>
                                                            <span class="editable" data-title="Edit Pincode"><?php echo $data['gender'];?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td><?php echo $data['mobile'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adhar</td>
                                                        <td><?php echo $data['adhar'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fare</td>
                                                        <td><?php echo $data['fare'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seat Number</td>
                                                        <td><?php echo $data['seat_num'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Train Name</td>
                                                        <td><?php echo $data['train_name'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Source</td>
                                                        <td><?php echo $data['source'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Destination</td>
                                                        <td><?php echo $data['destination'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Journey Date</td>
                                                        <td><?php echo $data['journey_date'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Booking Date</td>
                                                        <td><?php echo $data['booking_date'];?></td>
                                                    </tr>
                                                </table>

                                                <?php

                                                ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="card_nav_body_padding">
                                                    <p>
                                                        Howdy, I'm in About Me.
                                                    </p>
                                                    <p class="text-justify">
                                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                        consequat. Duis autem vel eum iriure dolor in hendrerit in
                                                        vulputate velit esse molestie consequat. Ut wisi enim ad
                                                        minim veniam, quis nostrud exerci tation.
                                                    </p>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                <div class="card_nav_body_padding follower_images">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xl-2">
                                                            <div class="img">
                                                                <a href="#">
                                                                    <img src="img/mailbox_imgs/2.jpg" class="rounded-circle" alt="friend">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 col-xl-9">
                                                            <div class="details">
                                                                <div class="name">
                                                                    <a href="#">Scarlett Johansson</a>
                                                                </div>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i> Last seen: 7 minutes ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-15">
                                                        <div class="col-sm-3 col-xl-2">
                                                            <div class="img">
                                                                <a href="#">
                                                                    <img src="img/mailbox_imgs/3.jpg" class="rounded-circle" alt="friend">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 col-xl-10">
                                                            <div class="details">
                                                                <div class="name">
                                                                    <a href="#">Mila Kunis</a>
                                                                </div>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i> Online
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-15">
                                                        <div class="col-xl-2 col-sm-3">
                                                            <div class="img">
                                                                <a href="#">
                                                                    <img src="img/mailbox_imgs/8.jpg" class="rounded-circle" alt="friend">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-sm-9">
                                                            <div class="details">
                                                                <div class="name">
                                                                    <a href="#">George Clooney</a>
                                                                </div>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i> Last seen: 1 hour ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-15">
                                                        <div class="col-xl-2 col-sm-3">
                                                            <div class="img">
                                                                <a href="#">
                                                                    <img src="img/mailbox_imgs/6.jpg" class="rounded-circle" alt="friend">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-sm-9">
                                                            <div class="details">
                                                                <div class="name">
                                                                    <a href="#">Robert Downey Jr.</a>
                                                                </div>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i> Online
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-15">
                                                        <div class="col-xl-2 col-sm-3">
                                                            <div class="img">
                                                                <a href="#">
                                                                    <img src="img/mailbox_imgs/5.jpg" class="rounded-circle" alt="friend">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-sm-9">
                                                            <div class="details">
                                                                <div class="name">
                                                                    <a href="#">Ryan Gossling</a>
                                                                </div>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i> Last seen: 45 minutes ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <div>
                                        <i class="fa fa-calendar"></i>
                                        Upcoming Events
                                    </div>
                                </div>
                                <div class="card-body m-t-35 padding-body view_user_cal">
                                    <div id="calendar_mini" class="bg-primary table-responsive"></div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item calendar-list">
                                            <div class="tag tag-pill tag-primary float-right">07:30</div>
                                            Meet a friend
                                        </a>
                                        <a href="#" class="list-group-item calendar-list">
                                            <div class="tag tag-pill tag-primary float-right">10:30</div>
                                            Seminar on market
                                        </a>
                                        <a href="#" class="list-group-item calendar-list">
                                            <div class="tag tag-pill tag-primary float-right">11:30</div>
                                            Meeting with CEO
                                        </a>
                                        <a href="#" class="list-group-item calendar-list">
                                            <div class="tag tag-pill tag-primary float-right">17:30</div>
                                            Sales proposal
                                        </a>
                                        <a href="#" class="list-group-item calendar-list">
                                            <div class="tag tag-pill tag-primary float-right">19:30</div>
                                            Milestone release
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <div>
                                        <i class="fa fa-pencil"></i>
                                        Recent Feeds
                                    </div>
                                </div>
                                <div class="card-body m-t-35 padding">
                                    <div class="feed">
                                        <ul>
                                            <li>
                                                    <span>
                                                        <img src="img/roundicons/flat/Office-27.png" alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                                <h5>
                                                    Important Mails
                                                </h5>
                                                <p>
                                                    Mail received from
                                                    <strong>John</strong> .
                                                </p>
                                                <i>1 hr back</i>
                                            </li>
                                            <li>
                                                    <span>
                                                        <img src="img/roundicons/flat/Technology-07.png"
                                                             alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                                <h5>
                                                    Documents
                                                </h5>
                                                <p>
                                                    <strong>Documents</strong> have sent to
                                                    <strong>MJ</strong> .
                                                </p>
                                                <i>1 hr ago</i>
                                            </li>
                                            <li>
                                                    <span>
                                                        <img src="img/mailbox_imgs/8.jpg"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                                <h5>
                                                    Mails
                                                </h5>
                                                <p>
                                                    Mail sent to
                                                    <strong>sandy</strong> .
                                                </p>
                                                <i>2 hr back</i>
                                            </li>
                                            <li>
                                                    <span>
                                                        <img src="img/mailbox_imgs/6.jpg"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                                <h5>
                                                    Mails
                                                </h5>
                                                <p>
                                                    Mail sent to
                                                    <strong>John</strong> .
                                                </p>
                                                <i>30 minutes back</i>
                                            </li>

                                            <li>
                                                    <span>
                                                        <img src="img/roundicons/flat/Office-06.png" alt="text_image"
                                                             class="rounded-circle img-fluid recent_feeds_img"/>
                                                    </span>
                                                <h5>
                                                    Notice
                                                </h5>
                                                <p>
                                                    <strong>Lorem Ipsum</strong> is simply dummy text of the printing and
                                                    typesetting industry.
                                                </p>
                                                <i>2 hr back</i>
                                            </li>
                                            <li>
                                                    <span>
                                                        <img src="img/mailbox_imgs/5.jpg"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                                <h5>
                                                    Mails
                                                </h5>
                                                <p>
                                                    Mail sent to
                                                    <strong>Peter</strong> .
                                                </p>
                                                <i>1 hr back</i>
                                            </li>
                                            <li class="no-border">
                                                    <span>
                                                        <img src="img/mailbox_imgs/2.jpg"
                                                             class="rounded-circle img-fluid pull-left recent_feeds_img"
                                                             alt="Image">
                                                    </span>
                                                <h5>
                                                    Important Notice
                                                </h5>
                                                <p>
                                                    <strong>Renny</strong> sent some documents .
                                                </p>
                                                <i>3 hr back</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-fw fa-clock-o"></i> Timeline
                        </div>
                        <div class="card-body m-t-35">
                            <!--timeline-->
                            <div>
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary">
                                            <i class="fa fa-tag"></i>
                                        </div>
                                        <div class="timeline-panel bg-primary">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event One</h5>
                                                <p>
                                                    <small>13 hours ago</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                                    .
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge danger">
                                            <i class="fa fa-fw fa-check-square-o"></i>
                                        </div>
                                        <div class="timeline-panel bg-danger">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event Two</h5>
                                                <p>
                                                    <small>June 20,2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p> gravida tempor justo, at  justo fringilla at. gravida tempor justo, at justo fringilla at.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge info">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="timeline-panel bg-info">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event Three</h5>
                                                <p>
                                                    <small>June 10 , 2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p>
                                                    Lorem ipsum dolor sit amet.  gravida tempor justo, at bibendum justo fringilla  justo fringilla at.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge warning">
                                            <i class="fa fa-fw fa-indent"></i>
                                        </div>
                                        <div class="timeline-panel bg-warning">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event Four</h5>
                                                <p>
                                                    <small>Apr 20,2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo,  justo fringilla at.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge success">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </div>
                                        <div class="timeline-panel bg-success">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event Five</h5>
                                                <p>
                                                    <small>Mar 15,2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p>
                                                    Lorem Ipsum is simply dummy, vidis litro abertis. Consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge mint">
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                        <div class="timeline-panel bg-mint">
                                            <div class="timeline-heading text-white">
                                                <h5 class="timeline-title">Timeline Event Six</h5>
                                                <p>
                                                    <small>Jan 1,2016</small>
                                                </p>
                                            </div>
                                            <div class="timeline-body text-white">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                                    fringilla at.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--timeline ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    <!--wrapper-->
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
<!--Global scripts-->
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<!--End of Global scripts-->
<!--Plugin scripts-->
<script src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="vendors/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>
<script src="vendors/moment/js/moment.min.js"></script>
<script src="vendors/fullcalendar/js/fullcalendar.min.js"></script>
<!--End of Plugin scripts-->
<!--Page level scripts-->
<script src="js/pages/mini_calendar.js"></script>
<!--End of Page level scripts-->
</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/view_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:01 GMT -->
</html>