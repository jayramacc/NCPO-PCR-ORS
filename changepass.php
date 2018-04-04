
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">

	$(document).ready(function() { 
      	$(".tablesorter").tablesorter(); 

		//When page loads...
		$(".tab_content").hide(); // Hide all content
		$("ul.tabs li:first").addClass("active").show(); // Activate first tab
		$(".tab_content:first").show(); // Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); // Remove any "active" class
			$(this).addClass("active"); // Add "active" class to selected tab
			$(".tab_content").hide(); // Hide all tab content

			var activeTab = $(this).find("a").attr("href"); // Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); // Fade in the active ID content
			return false;
		});

		// Change the Column Height
		 $('.column').equalHeight();
	});

    </script>
</head>
<body>


	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin.php">PCR Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="login.php">Log out </a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>ADMIN (<a href="admin.php"> HOME </a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php include 'includes/admin_side.php'; ?>
	
	<section id="main" class="column">
		
    <h4 class="alert_info">Change Password</h4>
    
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Current Password</label>
                <input class="form-control" id="currentPassword" type="password" placeholder="Current Password" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">New Password</label>
                <input class="form-control" id="newPassword" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm New password</label>
                <input class="form-control" id="confnewPassword" type="password" placeholder="Confirm New password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Change password</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Account</a>
          <a class="d-block small" href="forgot-password.html"></a>
        </div>
      </div>
    </div>
	
		<div class="clear"></div>
		
	
		<div class="spacer"></div>
	</section>

</body>
</html>