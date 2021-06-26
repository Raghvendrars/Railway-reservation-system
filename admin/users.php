<?php 
include("connection.php");
?> 


<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.admireadmin.com/admire_html/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:11:52 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of Global styles-->
    <!--Plugin styles-->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <link rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
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
        <!--new top-->

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

        <!--end of top-->
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
                        <div class="col-lg-6 col-sm-4">
                         <h4 class="nav_top_align"><i class="fa fa-user"></i> User Table </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item"><a href="index.php">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Users</a></li>
                                <li class="active breadcrumb-item">User table</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-white">User Table</div>                            
                            <div class="card-body m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="add_user.php" id="editable_table_new" class=" btn btn-default">
                                        Add User  <i class="fa fa-plus"></i></a>
                                     </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                         <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Id</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Username</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Phone</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Email</th>
                                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Password</th>
                                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Register Date</th>
                                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Update Date</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                                  $q = "SELECT * FROM users";
                                                  $data = mysqli_query($con,$q);
                                                  $i = 0;
                                                  while($result = mysqli_fetch_array($data)){
                                                  $i++;
                                                ?>
                                        <tr role="row" class="even">
                                        <td class="sorting_1"><?php echo $i;?></td>
                                        <td class="center"><?php echo $result['username'];?></td>
                                        <td><?php echo $result['phone'];?></td>
                                        <td class="center"><?php echo $result['email'];?></td>
                                        <td class="center"><?php echo $result['password'];?></td>
                                        <td class="center"><?php echo $result['register_date'];?></td>
                                        <td class="center"><?php echo $result['register_update'];?></td>
                                       <td>
                                       <a href="view_user.php" data-toggle="tooltip" data-placement="top" title="View User">
                                       <i class="fa fa-eye text-success"></i>
                                     </a>&nbsp; &nbsp;
                <!-- <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="edit_user.php?getid=<?php echo $result['id']; ?>"> -->
                                      <i class="fa fa-pencil text-warning"></i>
                                      </a>&nbsp; &nbsp;
                                      <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['id'];?>">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td> 
                           <?php
                            }
                           ?>
                         


               
               
          
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
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
        
        <!-- # right side -->
    </div>
    <!-- /#wrap -->
    <!-- global scripts-->
    <script src="js/components.js"></script>
<script src="js/custom.js"></script>
    <!--End of Global scripts-->
    <!--Plugin scripts-->
    <script src="vendors/select2/js/select2.js"></script>
    <script src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js"></script>
    <script src="vendors/datatables/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables/js/buttons.colVis.min.js"></script>
    <script src="vendors/datatables/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables/js/buttons.print.min.js"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script src="js/pages/users.js"></script>
    <!-- end page level scripts -->
</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:11:53 GMT -->
</html>
