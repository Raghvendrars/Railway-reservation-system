<?php
require 'connection.php';
extract($_POST);
session_start();

if(!isset($_SESSION['id']))
{
    header('location:login.php');
}

if(isset($_SESSION['id']))
{

$id=$_SESSION['id'];
$result=$con->query("SELECT * from admin where id='$id'");
$profile=$result->fetch_object();

}
?>

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
                                <?php
                            if(isset($id))
                            {
                                ?>
                                <strong><?php echo  $profile->username;?></strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                               </button>
                                <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admin</div>
                                
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fa fa-user"></i> Log Out
                                </a>
                                
                                
                            </div>
                                <?php    }
                            else
                            { ?>
                                <strong><a href="logout.php" style="color: white;">Login/Signup</a></strong>

                        
                                <span class="fa fa-sort-down white_bg"></span>
                             </button>
                             <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admin</div>
                                
                                <a class="dropdown-item" href="login.php">
                                    <i class="fa fa-user"></i> Login
                                </a>
                            </div>
                            <?php   } ?>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- /.container-fluid -->
        </nav>