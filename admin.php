
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
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="logout.php">Log out </a></div>
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
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>ADMIN</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="onlineform.php">Notification</a></li>
			<!--<li class="icn_tags"><a href="#">Tags</a></li>-->
		</ul>
		<h3>APPLICANT</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="add_new_user.php">Print Applicant Form</a></li>
			<li class="icn_view_users"><a href="renew.php">Request List</a></li>
			<li class="icn_folder"><a href="database.php">Applicant List</a></li>
		
		</ul>
		<h3>FEATURES</h3>
		<ul class="toggle">
			
			<li class="icn_photo"><a href="cloud.php">Online Backup</a></li>
		
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_security"><a href="forgot-password.php">Change Password</a></li>
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="https://medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Dashboard</h4>
	
		<div class="clear"></div>
		
	
		<div class="spacer"></div>
	</section>

</body>
</html>