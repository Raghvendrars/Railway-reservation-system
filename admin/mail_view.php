<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/mail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title> View | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css" />
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
                <a class="navbar-brand mr-0" href="index-2.html">
                    <h4 class="text-white"><img src="img/logow.png" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="navbar-toggleable-sm m-lg-auto d-none d-lg-flex top_menu" id="nav-content">
                    <ul class="nav navbar-nav flex-row top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_inbox.html">
                                <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_compose.html">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="maps.html">
                                <i class="fa fa-map-marker"></i> <span class="quick_text">Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.html">
                                <i class="fa fa-picture-o"></i> <span class="quick_text">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="badge badge-warning">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="badge badge-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-header">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="img/admin.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admire Admin</div>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
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
                    <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 2

                                </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Components</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; General Components
                                </a>
                            </li>
                            <li>
                                <a href="cards.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp;Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Transitions
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Buttons
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Icons
                                </a>
                            </li>
                            <li>
                                <a href="tooltips.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Tooltips
                                </a>
                            </li>
                            <li>
                                <a href="animations.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Animations
                                </a>
                            </li>
                            <li>
                                <a href="sliders.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sliders
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Notifications
                                </a>
                            </li>
                            <li>
                                <a href="p_notify.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; P-Notify
                                </a>
                            </li>
                            <li>
                                <a href="izitoast.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Izi-Toast
                                </a>
                            </li>
                            <li>
                                <a href="cropper.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Cropper
                                </a>
                            </li>
                            <li>
                                <a href="file_upload.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; File Upload
                                </a>
                            </li>
                            <li>
                                <a href="jstree.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;Js Tree
                                </a>
                            </li>
                            <li>
                                <a href="modal.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Modals
                                </a>
                            </li>
                            <li>
                                <a href="sortable.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sortable
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sweet alerts
                                </a>
                            </li>
                            <li>
                                <a href="grids_layout.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Grid View
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Widgets</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="widgets1.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Widgets 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets2.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets3.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Widgets 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title menu_hide">&nbsp; Forms</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Date Time Picker
                                </a>
                            </li>
                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Ratings
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title menu_hide">&nbsp; Charts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user.html">
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
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide">&nbsp; Galleries</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Gallery
                                </a>
                            </li>
                            <li>
                                <a href="video_gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Video Gallery
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
                            <li>
                                <a href="mail_inbox.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Inbox
                                </a>
                            </li>
                            <li class="active">
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
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title menu_hide">&nbsp; Maps</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Vector Maps
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
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
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
                            <i class="fa fa-eye"></i>
                            View Mail
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
                            <li class="active breadcrumb-item">View Mail</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row web-mail mail_compose">
                        <div class="col-lg-3 mail_compose_list">
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="mail_compose.html">
                                            <i class="fa fa-edit"></i>
                                            Compose
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_inbox.html">
                                            <i class="fa fa-inbox"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-success">
                                        <a href="mail_view.html" class="mail_inbox_text_col">
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
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; John Cena
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/1.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; Peter Norton
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/2.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy margin_top10"></span>
                                            &nbsp; Marin Robbinson
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/3.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away margin_top10"></span>
                                            &nbsp; Kimy Zorda
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/4.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; Hally
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/5.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy margin_top10"></span>
                                            &nbsp; Mike J Mayor
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/6.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away margin_top10"></span>
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
                            <div class="card media_max_991">
                                <div class="card-header bg-white">
                                    <p class="m-t-20">Subject: Hello, hope you having a great day ahead.</p>
                                    <p class="m-t-10"><span>From: admin@xyz.com </span><span class="float-right">06:15AM 28 FEB 2016</span></p>
                                </div>
                                <div class="card-body m-t-35">
                                    <h5>Hello John Smith!</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                                    <br/>
                                    <hr>
                                    <h4 class="m-t-25"><i class="fa fa-paperclip"></i> &nbsp;Attachments <span>(2)</span></h4>
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-sm-4 col-6 m-t-20">
                                            <img class="img-thumbnail img-fluid view_admin_img" alt="Admin" src="img/mailbox_imgs/1.jpg">
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-4 col-6  m-t-20">
                                            <img class="img-thumbnail img-fluid view_admin_img" alt="Admin" src="img/mailbox_imgs/3.jpg">
                                        </div>
                                    </div>
                                    <br/>
                                    <hr>
                                    <div class="m-t-20">
                                        <form action="http://demo.admireadmin.com/admire_html/mail_sent.html" class="mail_view_wysi">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="forward_to" placeholder="To *" required="">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="wysihtml5 form-control m-t-20" placeholder="Reply or Forward"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" id="goto_sent_page">Send</button>
                                                <a class="btn btn-primary" href="mail_view.html">Back</a>
                                            </div>
                                        </form>
                                        <button class="btn btn-primary" id="view_reply1"><i class="fa fa-reply"></i> Reply</button>
                                        <button class="btn btn-primary" id="view_reply2"><i class="fa fa-reply"></i> Forward</button>
                                        <a href="mail_trash.html" class="btn btn-warning" id="view_reply3"><i class="fa fa-trash-o"></i> Delete</a>
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
<script src="vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js"></script>
<script src="js/pluginjs/bootstrap3_wysihtml5.js"></script>
<script src="js/pages/mail_box.js"></script>
<script>

</script>
</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/mail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:19 GMT -->
</html>