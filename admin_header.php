<?php include "perfect_function.php"; 
include "_make_sure_logged_in.php";?>


<!DOCTYPE html><html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>iTrace - Document Tracking System</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="ThemeDesign" name="author">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="adminfiles/assets/images/favicon.ico">
	<link rel="stylesheet" href="<?= base_url() ?>adminfiles/assets/plugins/morris/morris.css">
	<link href="<?= base_url() ?>adminfiles/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- tables -->
	<link href="<?= base_url() ?>adminfiles/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>adminfiles/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

	
</head>


<body>
	<!-- Navigation Bar-->
	<header id="topnav">
		<div class="topbar-main">
			<div class="container-fluid">
				<!-- Logo container-->
				<div class="logo"><!-- Image Logo -->
				 <a href="home.php" class="logo">
				 	<img src="adminfiles/assets/images/tracker.png" alt="" height="50" width="250" class="logo-large">
				 </a>
				</div>
				
					<!-- End Logo container-->
					<div class="menu-extras topbar-custom">
						<ul class="list-inline float-right mb-0"><!-- Search -->
							<li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
								</li>
								<!-- Messages-->
								<?= _get_firstname_from_id($_SESSION['user_id']) ?>
							<li class="list-inline-item dropdown notification-list">
								<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
									<img src="adminfiles/assets/images/index.png" alt="user" class="rounded-circle">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
									<a class="dropdown-item" href="#">
										<i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile
									</a> 
									<a class="dropdown-item" href="#">
										<a class="dropdown-item" href="<?= base_url() ?>logout.php"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
									</div>
							</li>
							<li class="menu-item list-inline-item"><!-- Mobile menu toggle--> 
								<a class="navbar-toggle nav-link">
									<div class="lines">
										<span></span> 
										<span></span> 
										<span></span>
									</div>
								</a><!-- End mobile menu toggle-->
							</li>
						</ul>
					</div><!-- end menu-extras -->
					<div class="clearfix">
						
					</div>
				</div><!-- end container -->
			</div><!-- end topbar-main --><!-- MENU Start -->
			<div class="navbar-custom">
				<div class="container-fluid">
					<div id="navigation"><!-- Navigation Menu-->

						<ul class="navigation-menu">
							<?php

							if(_get_type_from_id($_SESSION['user_id']) == 1) {

								echo "
									<li class='has-submenu'>
										<a href='". base_url() . "user_manage.php'>
										<i class='dripicons-home'></i>Manage User</a>
									</li>";
								echo "
									<li class='has-submenu'>
										<a href='". base_url() . "docu_manage.php'>
										<i class='dripicons-inbox'></i>Manage Document</a>
									</li>";
								echo "
									<li class='has-submenu'>
										<a href='". base_url() . "docu_status.php'>
										<i class='dripicons-search'></i>Document Status</a>
									</li>";

							} else if(_get_type_from_id($_SESSION['user_id']) == 2) {

								echo "
									<li class='has-submenu'>
										<a href='". base_url() . "home.php'>
										<i class='dripicons-home'></i>Home</a>
									</li>";
								echo "
									<li class='has-submenu'>
										<a href='". base_url() . "user_add_docu.php'>
										<i class='dripicons-inbox'></i>Add Document</a>
									</li>";
							}


						?>
							
							</ul>
							<!-- End navigation menu -->
						</div>
						<!-- end #navigation -->
					</div><!-- end container -->
				</div>
				<!-- end navbar-custom -->
			</header><!-- End Navigation Bar-->
		<div class="wrapper">