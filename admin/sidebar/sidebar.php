
<div class="media user-media">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper">
                        <a class="user-link" href="#">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/admin.jpg">
                            <?php
                            if(isset($id))
                            {
                                ?>
                                
                            <p class="text-white user-info">Welcome <?php echo  $profile->username;?></p>
                            <?php    }
                            else
                            { ?>
                            <p class="text-white user-info">Welcome</p>
                                <?php   } ?>
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





<ul id="menu">
                    <!-- <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li> -->
                    <li class="active">
                        <a href="index.php">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard

                                </span>
                        </a>
                    </li>
                   
                    
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Train Tables</span>
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
                                    <i class="fa fa-angle-right"></i> &nbsp; Booked Ticket
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Tables
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
                                <a href="users.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; User Table
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
                        
                        </ul>
                    </li>

                    
                     <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp; Pages</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            
                          
                                <a href="invoice.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Invoice
                                </a>
                            </li>
                
                        </ul>
                    </li> 
                    
                    
                </ul>