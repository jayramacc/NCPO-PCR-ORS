
<!doctype html>
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
        
        <h4 class="alert_info">Request/Renew</h4>
        
        <form class="quick_search">
            <input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
        </form>
        
         
    <section id="main" class="column">
        
     
        
        <article class="module width_4_quarter">
        <header><h3 class="tabs_involved">Applicants Information</h3>
        <ul class="tabs">
            <li><a href="#tab1">Applicant</a></li>
           
        </ul>
        </header>

        <div class="tab_container">
            <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th></th> 
                    <th>Applicants Name</th> 
                    <th>Address</th> 
                    <th>Created On</th> 
                    <th>Actions</th> 
                </tr> 
            </thead> 
            <tbody> 
                
                
            </tbody> 
            </table>
            </div><!-- end of #tab1 -->
            
            
            
        </div><!-- end of .tab_container -->
        
        </article><!-- end of content manager article -->
        
    
        
        <div class="clear"></div>
        
    
        <div class="spacer"></div>
    </section>
       
        
    
        
        <div class="clear"></div>
        
    
        <div class="spacer"></div>
    </section>


</body>

</html>