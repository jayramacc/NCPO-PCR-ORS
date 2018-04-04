
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

	<h4 class="alert_info">Fill out Application Form</h4>


   <div>
<body>

<script>
var tD = new Date();
var datestr = tD.getDate() + "/" + (tD.getMonth()+ 1) + "/" + tD.getFullYear();
function popDate(eN) {
document.forms[0].elements[eN].value = datestr;
}
</script>


<img src="D:\admin with login\images\pnp.png" 
 style="width:100px;height:110px;border:3;left:500px;top:150px;position: absolute;">

 <img src="D:\admin with login\images\NCPO.png" 
 style="width:150px;height:130px;border:3;right:170px;top:150px;position: absolute;">

 <b style="width:100px;height:110px;border:3;left:330px;top:210px;position: absolute;"> FILE NO:</b>

 <form style="width:100px;height:110px;border:3;left:390px;top:205px;position: absolute; ">
 		<input type="integer" id="file_num_admin">
 </form>



                                      <center> 
                                      <p>Republic of the Philippines <BR> National Police Commission <br>
                                      PHILIPPINE NATIONAL POLICE <br>
                                       </p>
                                      
                                     <h4> NAGA CITY POLICE OFFICE <br> Naga City</h4> <br>

                                <!-- The title of the page-->
                                     <h1 > <U>POLICE CLEARANCE </U> </h1>
                                      </center>
                                   
<div class="boxed" style = "border:1px solid black; height:150px; width:150px;position:absolute;top:320px;left:330px;">
  <center>
  Right Thumbmark
  </center>
</div>

                                   <!-- start of the context -->   
                                  <div>
                                      <center>

                                       <p  >This is to certify that
                                         <form>
                                          <input type="text" value="" id="certify"  style="text-align:center;"  type="text" required/>
                                             age 
                                        
                                            <form>
                                               <input min="18" max="100" Ftype="number" value="" id="age"  style="text-align:center;"/>  
                                            </form>
                                               born on <input type="text" id="born" style="text-align:center;">, presently residing at <br> 
                                               <input type="text" id="residing" style="text-align:center;" > <br>and whose picture, right thumb mark, and signature appear hereon has  undergone <br> POLICE&ensp; RECORD&ensp;CHECK &ensp;from this office and the result is/are indicated below:
                                        </form> 
                                      </p>
                                       </center>
                                  </div>

                                    <center>
                                      <p style="text-justify">
                                       FINDINGS: <input type="text" value="" id="FINDINGS"  style="text-align:center;" /><br>
                                       PURPOSE:  <input type="text" value="" id="PURPOSE"  style="text-align:center;" />
                                    </center>
                                    <br>
                                    <right >
                                      <input type="text" value="" id="signature" style="margin-left: 90px;"><br>
                                    </right>

                                    <right>
                                      <p style="text-indent:165px">Signature<br> </p>
                                    </right><br>

	
									<b style="position: absolute; top: 570px; left: 700px;"> RECORD CHECKED BY</b>
                                    <b style="position: absolute; top: 570px; right: 200px;"> NOTED BY</b>
                                    <b style="position: absolute; top: 620px; right: 400px;"> SPO2 JOSE LUIS A. CAPARROSO</b>
                                    <b style="position: absolute; top: 640px; right: 415px;"> INVESTIGATION PNCO   </b>
                                    <b style="position: absolute; top: 620px; right: 155px;"> JONATHAN O. PANGANIBAN</b>
                                    <b style="position: absolute; top: 640px; right: 130px;"> POLICE SENIOR SUPERINTENDENT</b>


                                    

                                    <br>


                                      <p style="text-indent:120px"> CTC NO.<input type="text" value="" id="ctc_no" style="margin-left: 25px;">  </p>


                                   
                                    

                                      <p style="text-indent:120px"> ISSUED AT.&ensp;
                                      

                                      	<input type="text" id="ctc_no" style="margin-left: 4px; " disabled="disabled"/>

                                      

                                        

                                       <br>
                                      </p>

                                    </right>
                                    <right>
                                      <p style="text-indent:120px"> ISSUED ON.<input type="text" value="" id="ctc_no" style="margin-left: 5px;"></p>
                                    </right>

                                    <right>
                                      <p style="text-indent:120px"> OR NO.<input type="text" value="" id="ctc_no" style="margin-left: 32px;"><Br>
                                  </div>
                                      

                                    <BR>
                                    <center style=text-indent:100px><B > NOTE: VALID FOR SIX(6) MONTHS FROM DATE OF ISSUE. FALSIFICATION IS PUNISHABLE UNDER ARTICLE 12 RPC</B></center> <br><br><br>
                                    
                                  <div>
                                    
                                  <font color="red">-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;</font> 

                                  <center>
                                     <H1  >
                                         <u>POLICE CLEARANCE APPLICATION</u>
                                     </H1>  
                                   </center>

                          <div>
                              <p style="text-indent:120px"> (PLEASE PRINT)
			                  		<div style="float: right;    margin-top: -29px; margin-right: 102px;"> DATE
			                  			<input type="text" value="" id="signature" style="margin-left:10px;">
			                 		 </div>
                              </p>
                                 
                              <p style="text-indent:120px" > FILE NO. 
                              			<input type="text" value="" id="signature" style="margin-left:10px;">
                                     			<div style="float: right;    margin-top: -29px; margin-right: 102px;"> OR NO.
                                     				<input type="text" value="" id="signature" style="margin-left:5px;">
                                     			</div><CENTER></CENTER> 
                              </p>
                         </div>
                         <div style="text-indent: 120px; margin-top: 30px;">NAME:
                         		<input type="text" value="" id="name" style="margin-left:15px;">
                         </div>
                                    <div style="text-indent: 120px">
                                    	<p style="margin-left: 120px;">(LAST NAME)</p>
                                    	<p style="margin-left: 330px; margin-top: -27px">(FIRST NAME)</p>
                                    	<p style="margin-left: 565px; margin-top: -27px;">(MIDLE NAME)</p>
                                    </div>
                                    <div style="text-indent: 120px; margin-top: 30px;">ADDESS:<input type="text" value="" id="name" style="margin-left:15px;"></div>
                                <div style="text-indent: 120px; margin-top: 15px;">    
                                    <form  action="">SEX: 
                                    	<input type="checkbox" name="sex" value="male">M
    									<input type="checkbox" name="sex" value="female">F
    								</form>
    								<form style="text-indent: 120px; margin-top: -19px ;margin-left: 330px;" action="">CIVIL STATUS: 
                                    	<input type="checkbox" name="status" value="single">SINGLE
    									<input type="checkbox" name="status" value="marreid">MARRIED
    									<input type="checkbox" name="status" value="widower">WIDOWER
    									<input type="checkbox" name="status" value="separated">SEPARATED
    								</form>
    							</div>	
    					<div style="text-indent: 120px; margin-top: 10px">
    						<label>DATE OF BIRTH:(MM/DD/YY):</label>
    						<input type="text" id="b_date" >/
    						<input type="text" id="b_date" >/
    						<input type="text" id="b_date" >
    						<label style="margin-left: 20px">PLACE OF BIRTH:</label>
    						<input type="text" id="b_place" style="margin-left: 5px" >
    						<label style="margin-left: 20px">RELIGION:</label>
    						<input type="text" id="b_place" style="margin-left: 5px" >
    					</div>
    					<div style="text-indent: 120px; margin-top: 10px;">
    						<label>NATIONALITY:</label>
    						<input type="text" id="signature" style="margin-left: 5px">
    						<label style="margin-left: 33px">HEIGHT:</label>
    						<input type="text" id="b_place" style="margin-left: 8px">
    						<label style="margin-left: 20px">WEIGHT:</label>
    						<input type="text" id="b_place" style="margin-left: 16px">
    					</div>
    					<div style="text-indent: 120px; margin-top: 10px;">
    						<label>COMM. TAXTCERT.NO.:</label>
    						<input type="text" id="b_place" style="margin-left: 5px">
    						<label style="margin-left: 32px">ISSUE AT:</label>
    						<input type="text" id="b_place" style="margin-left: 2px">
    						<label style="margin-left: 20px">ISSUE ON:(MM/DD/YY)</label>
    						<input type="text" id="b_date"  style="margin-left: 5px">/
    						<input type="text" id="b_date" >/
    						<input type="text" id="b_date" >
    					</div>
    					<div style="text-indent: 120px; margin-top: 10px;">
    						<label>PURPOSE IN SECURING POLICE CLEARANCE</label>
    						<input type="text" id="purpose" style="margin-left: 5px;">
    					</div>
    					<div style="text-indent: 120px;">
    						<input type="text" id="signature" style="margin-left:  572px;  margin-top:  55PX">
    						<label style="margin-left:  714px;  margin-top:  5PX">SIGNATURE OF Applicant</label>
    					</div>
    					<div style="text-indent: 120px" >
    						<input type="button" name="" value="Submit" style="margin-top: 50px;">
    					</div>
	</section>




</body>

</html>