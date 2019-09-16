<?php
require 'session.php';
require 'db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        /* .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #f5f8fa;
            z-index: 9998;
            text-align: center
        } */
        
        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%
        }
        
    </style>
</head>

<body>
    <!-- <div id="loader" class="loader">
        <div class="plane-container">
            <div class="l-s-2 blink">LOADING</div>
        </div>
    </div> -->
    <div id="app" class="paper-loading">
        <div class="btn-fixed-top-left"><a href="documentations.html" class="btn-fab  btn-primary shadow1"><i class="icon icon-clipboard-list"></i></a></div><a href="#" data-toggle="offcanvas" class="paper-nav-toggle fixed left"><i></i></a>
        <aside class="main-sidebar shadow1 fixed offcanvas scroll ">


        <?php
			$after_explode = explode('/',$_SERVER['PHP_SELF']);
			$current_page = end($after_explode);
		 ?>


            <section class="sidebar">
                <div class="user-panel light">
                    <div class="p-t-b-20">
                        <div class="float-left image"> <img class="user_avatar" src="uploads/user/<?php echo $_SESSION['photo']; ?>" alt="User Image"></div>
                        <div class="float-left info">

                            <h5><?php echo $_SESSION['name']; ?></h5><a href="#">
                            <i class="icon-circle text-primary blink"></i> Online</a>

                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scroll">
                    <li class="treeview"><a href="dash_board.php"><i class="icon-sailing-boat-water purple-text"></i> <span>Dashboard</span><i class="icon icon-angle-left pull-right"></i></a>
                        <!-- <ul class="treeview-menu">
                            <li><a href="dashboard.html"><i class="icon icon-circle-o"></i> User Dashboard</a></li>
                            <li><a href="dashboard2.html"><i class="icon icon-folder5"></i>Admin Dashboard</a></li>
                        </ul> -->
                    </li>
                    <li class="treeview"><a href="user_view.php"><i class="icon icon-folders blue-text"></i> <span>User</span> <span class="badge badge-primary pull-right">4</span></a>
                        <!-- <ul class="treeview-menu">
                            <li><a href="#structure"><i class="icon icon-circle-o"></i> Directory Structure</a></li>
                            <li><a href="#partials"><i class="icon icon-folder5"></i>Partials</a></li>
                        </ul> -->
                    </li>
                    <li class="treeview active"><a href="message_view.php"><i class="icon icon-package text-blue"></i> <span>Messages</span><i class="icon icon-angle-left pull-right"></i></a>
                        <!-- <ul class="treeview-menu menu-open" style="display: block;">
                            <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                            <li class="active"><a href="#"><i class="icon icon-circle-o"></i> Level One<i class="icon icon-angle-left pull-right"></i></a>
                                <ul class="treeview-menu menu-open" style="display: block;">
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Level Two</a></li>
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Level Two<i class="icon icon-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="icon icon-circle-o"></i> Level Three</a></li>
                                            <li><a href="#"><i class="icon icon-circle-o"></i> Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                        </ul> -->
                    </li>
                    <li><a href="add_user.php"><i class="icon icon-clipboard-list red-text"></i> <span>Add User</span></a></li>

                    
                        <li>
                            <a href="logo_view.php"><i class="icon icon-clipboard-list amber-text">
                            </i> <span>Logo</span></a>
                        </li>
                    <li class="treeview"><a href="portfolio_view.php"><i class="icon icon-hand-grab-o"></i> <span>Portfolio</span> <span class="badge badge-primary pull-right">4</span></a>
                       <!--  <ul class="treeview-menu">
                            <li><a href="#scroll"><i class="icon icon-circle-o text-red"></i> </a></li>
                            <li><a href="#sticky"><i class="icon icon-circle-o text-yellow"></i> Sticky Element</a></li>
                            <li><a href="#plugins-list"><i class="icon icon-folder5 text-blue"></i>Plugins List</a></li>
                        </ul> -->
                    </li>
                    <li><a href="element-buttons.html"><i class="icon-touch_app text-green"></i> <span>Buttons</span></a></li>
                    <li><a href="element-tabels.html"><i class="icon-table brown-text"></i> <span>Tabels</span></a></li>
                    <li class="treeview"><a href="#"><i class="icon icon-pie-chart"></i> <span>Charts</span><i class="icon icon-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#charts"><i class="icon icon-circle-o"></i> How to add</a></li>
                            <li><a href="http://www.chartjs.org/docs/latest/" target="_blank"><i class="icon icon-circle-o"></i> Complete Chart Docs</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php"><i class="icon icon-envelope-o"></i> <span>Logout</span> 
                    <!-- <small class="badge pull-right bg-red">3</small> -->
                    
                    </a></li>
                </ul>
            </section>
        </aside>
        <div class="page light offcanvas-page">