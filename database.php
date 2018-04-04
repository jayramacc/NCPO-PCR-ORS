
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

	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

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

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">PCR Admin</a></h1>
			<h2 class="section_title">Database</h2><div class="btn_view_site"><a href="login.html">Log out </a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>ADMIN (<a href="#"> Notification </a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Database</a></article>
		</div>
	</section><!-- end of secondary bar -->
	

	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>FORM</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="onlineform.html">Online Application Form</a></li>
			
			<li class="icn_categories"><a href="verification.html">Verification Form</a></li>
			<!--<li class="icn_tags"><a href="#">Tags</a></li>-->
		</ul>
		<h3>APPLICANT</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="add_new_user.html">Add New Applicant</a></li>
			<li class="icn_view_users"><a href="renew.html">Request / Renew Application</a></li>
		
		</ul>
		<h3>FEATURES</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="database.html">Database</a></li>
			<li class="icn_photo"><a href="cloud.html">Online Backup</a></li>
		
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="register.html">Create New Account</a></li>
			<li class="icn_security"><a href="forgot-password.html">Change Password</a></li>
			<li class="icn_jump_back"><a href="login.html">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="https://medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Applicants Information.</h4>
		
		<form class="quick_search">
			<input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Content Manager</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Entry Name</th> 
    				<th>Address</th> 
    				<th>Created On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Rolando Ramos, Jr</td> 
    				<td>#3 San Bernardo St. Cagbunga Gainza Camarines Sur</td> 
    				<td>5th April 2011</td> 
    				<td>
    					<a href="javascript:void(0)">
    					<img src="images/icn_edit.png" title="Edit">
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

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
  
</div>
						</a>

    					<input type="image" src="images/icn_trash.png" title="Trash">
    					<input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Denmark Ng</td> 
    				<td>Concepcion</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"><input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Shayra Claire Tias</td> 
    				<td>Cararayan</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"><input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>John Harvey Panganiban</td> 
    				<td>Conception</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"><input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Emman Flores</td> 
    				<td>Cararayan</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"><input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Kate Icon</td> 
    				<td>Pili</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"><input type="image" src="images/icn_print.png" title="Print"></td> 
				</tr>
				
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Mark Corrigan</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Ipsum Lorem Dolor Sit Amet</td> 
    				<td>Jeremy Usbourne</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Sit Amet Dolor Ipsum</td> 
    				<td>Super Hans</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Alan Johnson</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Dobby</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
	
		
		<div class="clear"></div>
		
	
		<div class="spacer"></div>
	</section>


</body>

</html>