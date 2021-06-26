<?php
require 'connection.php';
extract($_POST);

?> 


<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.admireadmin.com/admire_html/simple_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:11:28 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Train</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of Global styles-->
    <!-- page level styles -->
    <link rel="stylesheet" href="css/pages/tables.css" />
    <link rel="stylesheet" href="#" id="skin_change" />
    <!-- end of page level styles -->
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
             <div id="top">
        <!-- .navbar -->
        <?php include 'header/header.php';?>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper">
            <div id="left">
                <div class="menu_scroll">
                    
                    <!-- #menu -->
                    <?php include("sidebar/sidebar.php");?>
                    <!-- /#menu -->
                </div>
            </div>
            <!-- /#left -->
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align skin_txt">
                                        <i class="fa fa-th"></i>
                                        Simple Tables
                                    </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="active breadcrumb-item">Simple Tables</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>

                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="add_train.php" id="editable_table_new" class=" btn btn-default">
                                        Add Train  <i class="fa fa-plus"></i></a>
                                     </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-white">Train View</div>
                                        
                                    
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table">
                                                <thead>


                                                <tr>
                                                    <th>Id</th>
                                                    <th>Train Number</th>
                                                    <th>Train Name</th>
                                                    <th>Source</th>
                                                    <th>Destination</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
    
                                            <?php
                                                $q = "SELECT * FROM train_schedule";
                                                $data = mysqli_query($con,$q);
                                                $i = 0;
                                                while($result = mysqli_fetch_array($data)){
                                                $i++;
                                                // print_r($data);
                                                // exit();
                                                ?>

                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $result['train_num'];?></td>
                                                    <td><?php echo $result['train_name'];?></td>
                                                    <td><?php echo $result['source'];?></td>
                                                    <td><?php echo $result['destination'];?></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>

                                                     <td>
                                       <a href="view_user.php" data-toggle="tooltip" data-placement="top" title="View User">
                                       <i class="fa fa-eye text-success"></i>
                                     </a>&nbsp; &nbsp;
                                      <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="edit_train.php">
                                      <i class="fa fa-pencil text-warning"></i>
                                      </a>&nbsp; &nbsp;
                                      <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete_train.php?id=<?php echo $result['id'];?>">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td> 
                                                </tr>
                                               
                                                <?php
                                                }

                                                    ?>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Footer 1</th>
                                                    <th>Footer 2</th>
                                                    <th>Footer 3</th>
                                                    <th>Footer 4</th>
                                                    <th>Footer 5</th>
                                                    <th>Footer 6</th>
                                                </tr>
                                                </tfoot>
                                         
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        Striped Table
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Faye</td>
                                                    <td>Mayer</td>
                                                    <td>Faye34@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Kianna</td>
                                                    <td>Lockman</td>
                                                    <td>Kianna.Lockman@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Timmothy</td>
                                                    <td>Mertz</td>
                                                    <td>Timmothy72@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Alfred</td>
                                                    <td>Watsica</td>
                                                    <td>Alfred34@gmail.com</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        Bordered Table
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Salary</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Quincy</td>
                                                    <td>$750</td>
                                                    <td><span class="tag tag-primary">Good</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Boris</td>
                                                    <td>$234</td>
                                                    <td><span class="tag tag-danger">Average</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Lucas</td>
                                                    <td>$500</td>
                                                    <td><span class="tag tag-info">Best</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Benjamin</td>
                                                    <td>$282</td>
                                                    <td><span class="tag tag-mint">Good</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        Inverse Table
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table  table-inverse">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Salary</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Alessandra</td>
                                                    <td>Jakubowski</td>
                                                    <td>Alessandra_Jakubowski54@yahoo.com</td>
                                                    <td>$900</td>
                                                    <td>Good</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Lucienne</td>
                                                    <td>Buckridge</td>
                                                    <td>Lucienne59@gmail.com</td>
                                                    <td>$778</td>
                                                    <td>Average</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Christa</td>
                                                    <td>Gislason</td>
                                                    <td>Christa_Gislason@hotmail.com</td>
                                                    <td>$1000</td>
                                                    <td>Best</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Oliver</td>
                                                    <td>Hudson</td>
                                                    <td>Oliver_Hudson@yahoo.com</td>
                                                    <td>$912</td>
                                                    <td>Good</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Footer 1</th>
                                                    <th>Footer 2</th>
                                                    <th>Footer 3</th>
                                                    <th>Footer 4</th>
                                                    <th>Footer 5</th>
                                                    <th>Footer 6</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Colored Rows
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Class Name</th>
                                                    <th>Column</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="bg-primary text-white">
                                                    <td>1</td>
                                                    <td>primary</td>
                                                    <td>Column</td>
                                                </tr>
                                                <tr class="bg-success text-white">
                                                    <td>2</td>
                                                    <td>success</td>
                                                    <td>Column</td>
                                                </tr>
                                                <tr class="bg-warning text-white">
                                                    <td>3</td>
                                                    <td>warning</td>
                                                    <td>Column</td>
                                                </tr>
                                                <tr class="bg-mint text-white">
                                                    <td>4</td>
                                                    <td>mint</td>
                                                    <td>Column</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                            <div class="col-lg-6">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Responsive Tables
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-responsive  m-t-35">
                                            <thead class="thead-inverse">
                                            <tr>
                                                <th>Header 1</th>
                                                <th>Header 2</th>
                                                <th>Header 3</th>
                                                <th>Header 4</th>
                                                <th>Header 5</th>
                                                <th>Header 6</th>
                                                <th>Header 7</th>
                                                <th>Header 8</th>
                                                <th>Header 9</th>
                                                <th>Header 10</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                            <tr>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                            <tr>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Advanced Table
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <i class="fa fa-briefcase"></i> From
                                                    </th>
                                                    <th class="hidden-xs">
                                                        <i class="fa fa-question"></i> Descrition
                                                    </th>
                                                    <th>
                                                        <i class="fa fa-bookAiri Satou"></i> Total
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">Pixel Ltd</a>
                                                    </td>
                                                    <td class="hidden-xs">Server Purchase</td>
                                                    <td>
                                                        52560.10$
                                                        <span class="tag tag-primary">Paid</span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn default btn-xs green-stripe">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Smart House</a>
                                                    </td>
                                                    <td class="hidden-xs">Furniture Purchase</td>
                                                    <td>
                                                        5760.00$
                                                        <span class="tag tag-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn default btn-xs info-stripe">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">FoodMaster Ltd</a>
                                                    </td>
                                                    <td class="hidden-xs">Annual Expenses</td>
                                                    <td>
                                                        12400.00$
                                                        <span class="tag tag-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn default btn-xs green-stripe">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">WaterPure Ltd</a>
                                                    </td>
                                                    <td class="hidden-xs">Payment 2013</td>
                                                    <td>
                                                        610.50$
                                                        <span class="tag tag-danger">Overdue</span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn default btn-xs red-stripe">View</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                            <div class="col-lg-6">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Bootstrap Table
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-35">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <i class="fa fa-briefcase"></i> Company
                                                    </th>
                                                    <th class="hidden-xs">
                                                        <i class="fa fa-user"></i> Contact
                                                    </th>
                                                    <th>
                                                        <i class="fa fa-shopping-cart"></i> Total
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="highlight">
                                                        <span class="success"></span>
                                                        <a href="#">HP</a>
                                                    </td>
                                                    <td class="hidden-xs">Ramos</td>
                                                    <td>2560.60$</td>
                                                    <td>
                                                        <a href="#" class="btn btn-success btn-xs purple">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="info"></span>
                                                        <a href="#">Google</a>
                                                    </td>
                                                    <td class="hidden-xs">Adam</td>
                                                    <td>560.60$</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-xs black">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">
                                                        <span class="success"></span>
                                                        <a href="#">Apple</a>
                                                    </td>
                                                    <td class="hidden-xs">Daniel</td>
                                                    <td>3460.60$</td>
                                                    <td>
                                                        <a href="#" class="btn btn-success btn-xs purple">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="warning"></span>
                                                        <a href="#">Microsoft</a>
                                                    </td>
                                                    <td class="hidden-xs">Nick</td>
                                                    <td>2560.60$</td>
                                                    <td>
                                                        <a href="#" class="btn btn-warning btn-xs blue">
                                                            <i class="fa fa-share"></i> Share
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
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
</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/simple_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:11:29 GMT -->
</html>
