
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	<meta charset="utf-8">
  
  <script src="js/jquery/jquery.js"></script>
 
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){ 
		$(".tablesorter").tablesorter(); 
   	 
		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});

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
	
	<?php include 'includes/admin_side.php'; ?>

	<section id="main" class="column">
		
		<h4 class="alert_info">Applicants Information.</h4>
		
		<form class="quick_search">
			<input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		
		<article class="module width_3_quarter">
			<header>
				<ul class="tabs">
					<li><a href="#tab1">Posts</a></li>
				</ul>
			</header>
			<div class="tab_container">
				<div id="tab1" class="tab_content">
					<table class="tablesorter" cellspacing="0"> 
					<thead><tr> 
						<th>Applicant's Name</th> 
						<th>Private key</th> 
						<th>Created On</th> 
						<th>Actions</th> 
					</tr> </thead> 
					<tbody> 
						<tr> 
							<td>Rolando Ramos, Jr</td> 
							<td>#3 San Bernardo St. Cagbunga Gainza Camarines Sur</td> 
							<td>5th April 2011</td> 
							<td>
								<a href="javascript:void(0)">
									<img src="images/icn_trash.png" title="Trash" data-toggle="modal" data-target="#myModal">
								</a>
								<a href="javascript:void(0)">
									<img src="images/icn_print.png" title="Print">
								</a>
							</td> 
						</tr> 
					</tbody> 
					</table>
				</div><!-- end of #tab1 -->
			</div><!-- end of .tab_container -->
			
		</article><!-- end of content manager article -->
		<div class="clear"></div>
		<div class="spacer"></div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">	
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
				<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>