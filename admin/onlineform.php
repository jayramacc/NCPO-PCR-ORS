<?php

include '../class/MySqlLeaf.php';
include_once "../class/AccountHandler.php";

// Check if the account is logged or not
if(!AccountHandler::isLogin()){
		header("location: ../login.php");
    exit;
}

// SQL Query: Get the data in the private key
$sql = "SELECT notif.id, notif.type, app.fname, app.lname, app.mname, app.purpose, app.photo FROM 
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
	<title>Administrator Panel</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome-animation.css" rel="stylesheet" />
	<link href="../assets/css/admin.css" rel="stylesheet" />
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php include '../assets/includes/adminnav.php'; ?>
	<div class="page">
		<?php include '../assets/includes/admin_inner.php'; ?>
		<!-- Page Content will be here  -->
			<div class="container card p-3 mt-4">
				<h1 class="text-center">Notifications</h1>
				<?php foreach ($applicants as $app): ?>
					<div class="alert alert-info mb-2" onclick="document.location.href='database.php';" style="cursor: pointer;">
						<div style="margin-left: 10px; display: inline-block; vertical-align: top;">
							<b><?php echo $app["lname"]. ", " .$app["fname"]. " " .$app["mname"]; ?></b> 
							<?php echo $app["type"] == "apply" ? "has successfully filled up an application form for the first time." : ""; ?>
							<?php echo $app["type"] == "renew" ? "has successfully submitted a request." : ""; ?>
							<?php echo $app["type"] == "verify" ? "has successfully verified his/her `private key` thru email confirmation." : ""; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php include '../assets/includes/admin_foot.php'; ?>
	</div>
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
		</div>
	</section>
</body>
</html>