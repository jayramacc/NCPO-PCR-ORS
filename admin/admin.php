<?php
include_once "../class/AccountHandler.php";

// Check if the account is logged or not
if(!AccountHandler::isLogin()){
		header("location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome-animation.css" rel="stylesheet" />
	<link href="../assets/css/admin.css" rel="stylesheet" />
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<div class="sidenav-header d-flex align-items-center justify-content-center">
				<div class="sidenav-header-inner text-center">
					<img src="../assets/img/logo.jpg" alt="person" class="h-100 w-100">
					<h2 class="h5">NCPO-PCR</h2><span>Online Registration</span>
				</div>
				<div class="sidenav-header-logo">
					<a href="admin.php" class="brand-small text-center"> 
						<strong>B</strong>
						<strong class="text-primary">D</strong>
					</a>
				</div>
			</div>
			<div class="main-menu">
				<h5 class="sidenav-heading">Administrator</h5>
				<ul id="side-main-menu" class="side-menu list-unstyled">                  
					<li>
						<a href="admin.php"> <i class="icon-home"></i>Dashboard</a>
					</li>
					<li>
						<a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> 
							<i class="icon-form"></i>Database 
						</a>
						<ul id="formsDropdown" class="collapse list-unstyled ">
							<li><a href="database.php">Account List</a></li>
							<li><a href="cloud.php">Cloud Backup</a></li>
							<li><a href="add_new_user.php">Print Application Form</a></li>
						</ul>
					</li>
					<li>
						<a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> 
							<i class="fa fa-bar-chart"></i>Settings 
						</a>
						<ul id="chartsDropdown" class="collapse list-unstyled ">
							<li><a href="changepass.php">Change Password</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page">
		<!-- navbar-->
		<header class="header">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<div class="navbar-header">
							<a href="#" class="navbar-brand">
								<div class="brand-text d-none d-md-inline-block">Administrator <b class="text-primary">Dashboard</b></div>
							</a>
						</div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<!-- Notifications dropdown-->
							<li class="nav-item dropdown"> 
								<a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
									<i class="fa fa-bell"></i>
									<span class="badge badge-warning">12</span>
								</a>
								<ul aria-labelledby="notifications" class="dropdown-menu">
									<li>
										<a rel="nofollow" href="#" class="dropdown-item"> 
											<div class="notification d-flex justify-content-between">
												<div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a>
									</li>
									<li>
										<a rel="nofollow" href="onlineform.php" class="dropdown-item all-notifications text-center"> 
											<strong> <i class="fa fa-bell"></i>VIEW ALL NOTIFICATIONS</strong>
										</a>
									</li>
								</ul>
							</li>
							<!-- Log out-->
							<li class="nav-item">
								<a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Page Content will be here  -->


		<footer class="main-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<b>NOT FOR SALE &copy; 2018-2019</b>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>