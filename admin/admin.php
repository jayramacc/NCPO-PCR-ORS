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
			<h2 class="section_title">RESULT</h2><div class="btn_view_site"><a href="logout.php">Log out </a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>ADMIN (<a href="admin.php"> HOME </a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">SEARCH</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php include 'includes/admin_side.php'; ?>
	
	<section id="main" class="column">
		
		<h4 class="alert_info">RESULT</h4>
		<h2>SEARCH result</h2>

<table ><style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
  <tr>
    <th>PRIVATE KEY</th>
    <th>NAME</th>
    <th>EDIT</th>
  </tr>
  <tr>
    <td>1234KJG8</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>KJADG8593</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>SDFKGY48</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>SKDJFHG894</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>ALDFKHG8Rs</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>DLFTY84JI</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>
		<div class="clear"></div>
		
	
		<div class="spacer"></div>
	</section>

</body>
</html>