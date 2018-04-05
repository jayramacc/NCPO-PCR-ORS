<?php

@ $pwd = $_POST["pwd"];
@ $pwd1 = $_POST["new_pwd"];
@ $pwd2 = $_POST["conf_new_pwd"];

if (isset($pwd) && isset($pwd2) && isset($pwd1)){
	$adminPW = json_decode( file_get_contents('pass.json'), true)["pass"];

	if (md5($pwd) == $adminPW) {
		if ($pwd1 == $pwd2){
			$data["pass"] = md5($pwd1);
			$newJsonString = json_encode($data);
			file_put_contents('pass.json', $newJsonString);

			header("location: changepass.php");
			exit;
		}else{
			echo "Password not matched.";
			exit;
		}
	}else{
		echo "Wrong Password";
		exit;
	}
}
?>

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
		
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	
	<?php include 'includes/admin_side.php'; ?>
	

	<section id="main" class="column container">
		
		<h2>FILLOUT FORM</h2>
		<form class="form-horizontal" action="/changepass.php" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Current Password:</label>
				<div class="col-sm-4">          
					<input type="password" class="form-control" id="pwd" placeholder="Current Password" name="pwd" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">New Password:</label>
				<div class="col-sm-4">          
					<input type="password" class="form-control" id="new_pwd" placeholder="New Password" name="new_pwd" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Repeat New Password:</label>
				<div class="col-sm-4">          
					<input type="password" class="form-control" id="conf_newpwd" placeholder="Repeat New Password" name="conf_new_pwd" required>
				</div>
			</div>
			
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
    

	
		<div class="clear"></div>
		
	
		<div class="spacer"></div>
	</section>

</body>
</html>