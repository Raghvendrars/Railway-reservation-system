<?php

require("email_con.php");
extract($_POST);


?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/mail_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:04:14 GMT -->
<head>
    <meta charset="UTF-8">
    <title> Inbox</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="css/pages/mail_box.css"/>
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
                    <!-- <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li> -->
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
                            <li class="active">
                                <a href="add_user.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="dropdown_menu active">
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
                            <li class="active">
                                <a href="mail_inbox.php">
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
                    <div class="col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-inbox"></i>Inbox                          
                        </h4>
                    </div>
                    <div class="col-sm-8">
                        <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index-2.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Email</a>
                            </li>
                            <li class="active breadcrumb-item">Inbox</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row web-mail">
                        <div class="col-lg-3 mail_compose_list">
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="mail_compose.html">
                                            <i class="fa fa-edit"></i>
                                            Compose
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-success">
                                        <a href="mail_inbox.php" class="mail_inbox_text_col">
                                            <i class="fa fa-inbox"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_view.html">
                                            <i class="fa fa-eye"></i>
                                            View Mail
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_sent.html">
                                            <i class="fa fa-sign-out"></i>
                                            Sent
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_spam.html">
                                            <span class="badge badge-pill badge-primary float-right">14</span>
                                            <i class="fa fa-eye-slash"></i>
                                            Spam
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_draft.html">
                                            <span class="badge badge-pill badge-primary float-right">16</span>
                                            <i class="fa fa-recycle"></i>
                                            Draft
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_trash.html">
                                            <span class="badge badge-pill badge-primary float-right">16</span>
                                            <i class="fa fa-trash"></i>
                                            Trash
                                        </a>
                                    </li>
                                    <li class="list-group-item" id="more_items">
                                        <a>
                                            <i class="fa fa-angle-down float-right"></i>
                                            More
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-pill badge-primary float-right">3</span>
                                            <i class="fa fa-star"></i>
                                            Starred
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-pill badge-primary float-right">14</span>
                                            <i class="fa fa-user"></i>
                                            Personal
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-pill badge-primary float-right">26</span>
                                            <i class="fa fa-shield"></i>
                                            Client
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-pill badge-primary float-right">36</span>
                                            <i class="fa fa-briefcase "></i>
                                            Important
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mail_ul_active m-t-35">
                                <ul class="list-group">
                                    <li class="list-group-item bg-success">
                                        <a href="#" class="mail_inbox_text_col">
                                            <i class="fa fa-comments"></i>
                                            Contacts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-group contact_scroll">
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; John Cena
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/1.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Peter Norton
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/2.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Marin Robbinson
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/3.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Kimy Zorda
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/4.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Hally
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/5.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Mike J Mayor
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/6.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; David Miller
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/7.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Adela
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/8.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Sandy Chris
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/8.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Symons
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/2.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Randy
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/1.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card mail media_max_991">
                                <div class="card-header bg-white">
                                    <div class="row">
                                        <div class="col-sm-6 col-12 m-t-10 dropdown_list_hover">
                                            <div class="btn-group float-left table-bordereds">
                                                <label class="custom-control custom-checkbox  mb-0 mr-0">
                                                    <input type="checkbox" class="custom-control-input select-all">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="select-all1">
                                                        <span>All</span>
                                                    </li>
                                                    <li id="select-none">
                                                        <span>None</span>
                                                    </li>
                                                    <li id="mail_read">
                                                        <span>Read</span>
                                                    </li>
                                                    <li id="mail_unread">
                                                        <span>UnRead</span>
                                                    </li>
                                                    <li id="mail_starred">
                                                        <span>Starred</span>
                                                    </li>
                                                    <li id="mail_unstarred">
                                                        <span>Unstarred</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group float-left table-bordered text-primary" id="refresh_inbox">
                                                <i class="fa fa-refresh"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="input-group margin bottom">
                                                <input type="text" class="form-control inbox_search_height m-t-10" placeholder="Search">
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary inbox_search_height m-t-10">Search</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body m-t-25 p-d-0">
                                    <div class="tabs tabs-bordered tabs-icons">
<!--                                         <ul class="nav nav-tabs">
                                            <li class="nav-item" id="primary2">
                                                <a href="#primary" class="nav-link active" data-toggle="tab"
                                                   aria-expanded="true"><i class="fa fa-inbox"></i> Primary</a>
                                            </li>
                                            <li class="nav-item" id="social2">
                                                <a href="#social" class="nav-link" data-toggle="tab"
                                                   aria-expanded="false"><i class="fa fa-group"></i> Social</a>
                                            </li>
                                            <li class="nav-item" id="promotions2">
                                                <a href="#promotions" class="nav-link" data-toggle="tab"
                                                   aria-expanded="false"><i class="fa fa-star"></i> Promotions</a>
                                            </li>
                                        </ul>
 -->
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane table-responsive reset padding-all fade active show"
                                                 id="primary">
                                                <table class="table">


                                                    <thead>
                                                        <th colspan="2">Select</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        
                                                        <?php
                                                $q = "SELECT * FROM contact_form";
                                                $data = mysqli_query($con,$q);
                                                $i = 0;
                                                while($result = mysqli_fetch_array($data)){
                                                $i++;
                                                // print_r($data);
                                                // exit();
                                                ?>
                                                        <tr class="mail-unread">
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                <td><i class="fa fa-star"></i></td>

                                                
                                                    <!-- <td><?php echo $i;?></td> -->
                                                    <td  class="sent_to_mailview"><?php echo $result['name'];?></td>
                                                    <td  class="sent_to_mailview"><?php echo $result['email'];?></td>
                                                    <td  class="sent_to_mailview"><?php echo $result['subject'];?></td>
                                                    <td  class="sent_to_mailview"><?php echo $result['message'];?></td>
                                                    <td  ><a href="mail_view.php" data-toggle="tooltip" data-placement="top" title="View User" href="mail_view.php?id=<?php echo $result['id'];?>">
                                       <i class="fa fa-eye text-success"></i>
                                     </a>&nbsp; &nbsp;</td>
                                                </tr>
                                                    
                                                    <?php
                                                }

                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane table-responsive reset padding-all fade"
                                                 id="social">
                                                <table class="table">
                                                    <tbody>
                                                    <tr class="mail-unread">
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">Facebook</td>
                                                        <td class="sent_to_mailview">18 new firend requests</td>
                                                        <td class="sent_to_mailview"></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">Twitter</td>
                                                        <td class="sent_to_mailview">Lorem ipsum solet mit dolor.</td>
                                                        <td class="sent_to_mailview"></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">Google+</td>
                                                        <td class="sent_to_mailview">Impedit vero possimus dolores.</td>
                                                        <td class="sent_to_mailview"><i class="fa fa-paperclip"></i></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane table-responsive reset padding-all fade"
                                                 id="promotions">
                                                <table class="table">
                                                    <tbody>
                                                    <tr class="mail-unread">
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">Ebay</td>
                                                        <td class="sent_to_mailview">Qonsequer novo dolores.</td>
                                                        <td class="sent_to_mailview"></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">NewEgg</td>
                                                        <td class="sent_to_mailview">Lorem ipsum solet mit dolor.</td>
                                                        <td class="sent_to_mailview"></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            <div class="checker m-l-20">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input name="checkbox" type="checkbox"
                                                                           class="custom-control-input ">
                                                                    <span class="custom-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><i class="fa fa-star"></i></td>
                                                        <td class="sent_to_mailview">BestBuy</td>
                                                        <td class="sent_to_mailview">Impedit vero possimus dolores.</td>
                                                        <td class="sent_to_mailview"><i class="fa fa-paperclip"></i></td>
                                                        <td class="sent_to_mailview">11/04/2014 14:35 AM</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
<!-- global scripts-->
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<!-- end of global scripts-->
<script src="js/pages/mail_box.js"></script>
</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/mail_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:04:17 GMT -->
</html>