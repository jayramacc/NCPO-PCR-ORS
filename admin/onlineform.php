<?php

include '../class/MySqlLeaf.php';

// SQL Query: Get the data in the private key
$sql = "SELECT notif.id, notif.type, app.fname, app.lname, app.purpose, app.photo FROM 
	`applicants` as app LEFT JOIN `notification` AS notif ON notif.private_key=app.private_key ORDER BY `id` DESC";

// Prepare Query
$query = mysqli_query(MySqlLeaf::getCon(), $sql);

// Count Rows
$numRow = mysqli_num_rows($query);

$applicants = array();

// Put the MYSQL Result in the user Info
if ($numRow > 0){
	while ($r = mysqli_fetch_array($query)) {
		array_push($applicants, $r);
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
	<style type="text/css">
		.notif {
			border: 1px solid #7782ce; 
			padding: 10px; 
			cursor: pointer;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin.php">PCR Admin</a></h1>
			<h2 class="section_title">Notification</h2><div class="btn_view_site"><a href="logout.php">Log out </a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>ADMIN (<a href="admin.php"> HOME </a>)</p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
				<a href="admin.php">Website Admin</a> 
				<div class="breadcrumb_divider"></div>
			 	<a class="current">Notification</a>
			</article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php include '../assets/includes/admin_side.php'; ?>

	<section id="main" class="column">
		<h4 class="alert_info">Notification</h4>	
		<div class="clear"></div>
		<div class="spacer"></div>

		<div style="margin-left:40px; width: calc(100% - 67px)">
			
			<?php foreach ($applicants as $app): ?>
				<div class="notif" onclick="document.location.href='database.php';">
					<img onerror="this.src='../assets/img/profile_image_dummy.svg';" src="../assets/img_uploads/<?php echo $app['photo']; ?>" alt="Profile" height="80" width="80" style="display: inline-block">
					<div style="margin-left: 10px; display: inline-block; vertical-align: top;">
						<b><?php echo $app["fname"]. " " .$app["lname"]; ?></b> 
						<?php echo $app["type"] == "apply" ? "has successfully filled up an application form for the first time." : ""; ?>
						<?php echo $app["type"] == "renew" ? "has successfully submitted a request." : ""; ?>
						<?php echo $app["type"] == "verify" ? "has successfully verified his/her `private key` thru email confirmation." : ""; ?>
						<div style="margin-top: 15px;">
							<button disabled>Mark as Read</button> <button disabled>Delete</button>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</section>


</body>
</html>