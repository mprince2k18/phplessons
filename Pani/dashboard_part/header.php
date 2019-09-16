
<?php
require 'session_check.php';
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="dashboard_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="dashboard_assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="dashboard_assets/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<?php
			$after_explode = explode('/',$_SERVER['PHP_SELF']);
			$current_page = end($after_explode);
		 ?>
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="uploads/user_photo/<?php echo $_SESSION['photo']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name']; ?></div>
				<div class="profile-usertitle-status">
          <?php
          if($_SESSION['role']==1){
            echo "Admin";
          }
          elseif($_SESSION['role']==2){
            echo "Moderator";
          }
          else{
            echo "Fakir";
          }
          ?>
        </div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="<?php echo ($current_page == "dash.php")? 'active' : '' ?>"><a href="dash.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
      <?php if($_SESSION['role']==1) { ?>
      <li class="<?php echo ($current_page == "register.php")? 'active' : '' ?>"><a href="register.php"><i class="fa fa-user"></i>&nbsp; Add User</a></li>
    <?php } ?>
			<li class="<?php echo ($current_page == "message_view.php")? 'active' : '' ?>"><a href="message_view.php"><i class="fa fa-envelope"></i>&nbsp; All Messages</a></li>
			<li><a href="logo_view.php"><em class="fa fa-toggle-off">&nbsp;</em>LOGO</a></li>
			<li><a href="service.php"><em class="fa fa-clone">&nbsp;</em> Service</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-md-12">
