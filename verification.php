
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
            <p>ADMIN (<a href="#"> Notification </a>)</p>
            <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
        </div>
        <div class="breadcrumbs_container">
            <article class="breadcrumbs"><a href="index.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
        </div>
    </section><!-- end of secondary bar -->
    
   
    <aside id="sidebar" class="column">
        <form class="quick_search">
            <input type="text" value="Reference # / Full Name" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
        </form>
        <hr/>
        <h3>FORM</h3>
        <ul class="toggle">
            <li class="icn_new_article"><a href="onlineform.php">Online Application Form</a></li>
          
            <li class="icn_categories"><a href="verification.php">Verification Form</a></li>
            <!--<li class="icn_tags"><a href="#">Tags</a></li>-->
        </ul>
        <h3>APPLICANT</h3>
        <ul class="toggle">
            <li class="icn_add_user"><a href="add_new_user.php">Add New Applicant</a></li>
            <li class="icn_view_users"><a href="renew.php">Request / Renew Application</a></li>
        
        </ul>
        <h3>FEATURES</h3>
        <ul class="toggle">
            <li class="icn_folder"><a href="database.php">Database</a></li>
            <li class="icn_photo"><a href="cloud.php">Online Backup</a></li>
        
        </ul>
        <h3>Admin</h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="register.php">Create New Account</a></li>
            <li class="icn_security"><a href="forgot-password.php">Change Password</a></li>
            <li class="icn_jump_back"><a href="login.php">Logout</a></li>
        </ul>
        
        <footer>
            <hr />
            <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
            <p>Theme by <a href="https://medialoot.com">MediaLoot</a></p>
        </footer>
    </aside><!-- end of sidebar -->
    <section id="main" class="column">
        
        <h4 class="alert_info">Verification Form</h4>
        
         <form method="post" id="renewform" >

            <div class="panel panel-default custpanel">
                    <div class="panel-body mainpanel">
                        <div class="col-md-12" >
                            <div class="col-md-12" >
                                <div class="col-md-12" >
                                    <span style="color:red">Note : All fields with asterisk( <b>*</b> ) are required.</span>
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <center><h4 class ="infoheader">
                                    APPLICANT INFORMATION
                                </h4></center>
                            </div>
                            <div class="col-md-12" >
                                <center>
                                    <span style="color:black;font-weight: 600;"">*** To search just type the last 6 digits of your Reference Code ***</span><br/><br/>
                                    <span style="color:green;font-weight: 600;display: none" id="searchloader">Searching...</span>
                                    <span style="color:red;font-weight: 600;display: none" id="searcherror"></span>
                                </center>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Reference Code <span style="color:red">*</span></label>
                                </div>

                                <div class="col-md-8" >
                                    <input type="hidden" name="_token" value="xit4z0Q6YIv0i37LIzj3JCfvD84oF9R14DPQ2ptP">
                                    <div class="input-group">
                                                                           <input class="form-control" name="c_applicant_refcode" id="c_applicant_refcode" value="" placeholder="Reference Code" autocomplete="false">
                                                                          <span class="input-group-addon" id="searchToVerify" style="cursor:pointer"><span  class="glyphicon glyphicon-search" ></span></span>
                                    </div>
                                    <div  style="position: absolute;;z-index:1000;width: 100%;padding-right: 70px">
                                        <select id="refcodeoptions" class="form-control"  size="3" style="display: none;">
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Last Name <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                                                            <input class="form-control" name="c_applicant_lname" id="c_applicant_lname" value="" placeholder="Last Name" >
                                                                    
                                </div>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>First Name <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                                                    <input class="form-control" name="c_applicant_fname" id="c_applicant_fname" value="" placeholder="First Name" >
                                                                    
                                </div>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Middle Name</label>
                                </div>
                                <div class="col-md-8" >
                                                                            <input class="form-control" name="c_applicant_mname" id="c_applicant_mname" value="" placeholder="Middle Name" >
                                                                    </div>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Date of Birth <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                    <table id="bdatedateID">
                                        <tr>

                                            <td style="width:47%">
                                                <select class="form-control"  id="bdateMonth" name="bdateMonth" style="padding:0px">
                                                    <option value="">Month</option>

                                                                                    </select>
                                            </td>
                                            <td style="width:29%">
                                                <select class="form-control"  id="bdateDay" name="bdateDay" style="padding:0px">
                                                    <option value="">Day</option>

                                                    </select>
                                            </td>
                                            <td>
                                                <input id="bdateYear" class="form-control" placeholder="Year" value="" name="bdateYear" style="padding:4px">
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                                    <div class="col-md-12 field" >
                                <div class="col-md-2 lbl">
                                    <label>Purpose<span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-10" style="padding-left: 10px">
                                    <div style="border:1px solid #ccc;height: 34px;cursor: pointer">
                                        <input type="hidden" class="form-control"  id="c_applicant_purpose" name="c_applicant_purpose" />
                                        <table  style="width: 100%;height: 100%" id="purposeBox" >
                                            <tr>
                                                <td style="width: 90%;padding-left: 10px" id="valuePurposeView">Purpose</td>
                                                <td style="width: 10%;background: #ccc;" align="center"><span class="caret"></span></td>
                                            </tr>
                                        </table>
                                        <div id="purposeSearch" style="display:none;position: absolute;float: left;z-index: 1000;border: 1px solid #ccc;padding-top:10px;width: 94%;background:#fff;max-height: 300px;overflow-y: scroll;">
                                            <input type="text"  id="searchfieldPurpose" style="margin-left:40px;margin-bottom: 10px;width: 85%" class="form-control" placeholder="Search" /> 
                                            <ul style="list-style: none;" id="purposelist">
                                                                                                    <li  onclick = "$.fn.assignValue('ADOPTION REQUIREMENT')" >ADOPTION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('AIRPORT REQUIREMENT')" >AIRPORT REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('APPRENTICESHIP  REQUIREMENT')" >APPRENTICESHIP  REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('ARMED FORCES OF THE PHILIPPINES REQUIREMENT')" >ARMED FORCES OF THE PHILIPPINES REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('BANK REQUIREMENT')" >BANK REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('BLASTER REQUIREMENT')" >BLASTER REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('BJMP REQUIREMENT')" >BJMP REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('BURIAL REQUIREMENT')" >BURIAL REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('BUSINESS REQUIREMENT')" >BUSINESS REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CHANGE OF BIRTH DATE')" >CHANGE OF BIRTH DATE</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CHANGE OF GENDER FROM FEMALE TO MALE')" >CHANGE OF GENDER FROM FEMALE TO MALE</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CHANGE OF GENDER FROM MALE TO FEMALE')" >CHANGE OF GENDER FROM MALE TO FEMALE</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CHANGE OF MIDDLE NAME')" >CHANGE OF MIDDLE NAME</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CHANGE OF NAME')" >CHANGE OF NAME</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CITOM REQUIREMENT')" >CITOM REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('CIVIL SERVICE COMMISSION REQUIREMENT')" >CIVIL SERVICE COMMISSION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('DMDP REQUIREMENT')" >DMDP REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('DOH REQUIREMENT')" >DOH REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('DRIVERS LICENSE REQUIREMENT')" >DRIVERS LICENSE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('DSWD REQUIREMENT')" >DSWD REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('EMPLOYMENT ABROAD REQUIREMENT')" >EMPLOYMENT ABROAD REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('FIANCEE VISA REQUIREMENT')" >FIANCEE VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('FIREARM LICENSE REQUIREMENT')" >FIREARM LICENSE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('FRANCHISE REQUIREMENT')" >FRANCHISE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('GLOBE REQUIREMENT')" >GLOBE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('GSIS REQUIREMENT')" >GSIS REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('HOSPITAL REQUIREMENT')" >HOSPITAL REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('JPIC HOUSING REQUIREMENT')" >JPIC HOUSING REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('IMMIGRANT VISA REQUIREMENT')" >IMMIGRANT VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LICENSE TO OPERATE SECURITY AGENCY REQUIREMENT')" >LICENSE TO OPERATE SECURITY AGENCY REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LICENSE TO OWN AND POSSESS FIREARM REQUIREMENT')" >LICENSE TO OWN AND POSSESS FIREARM REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LICENSE TO DEAL FIREARMS AND AMMUNITION REQUIREMENT')" >LICENSE TO DEAL FIREARMS AND AMMUNITION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LICENSE TO PURCHASE EXPLOSIVES REQUIREMENT')" >LICENSE TO PURCHASE EXPLOSIVES REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LOAN REQUIREMENT')" >LOAN REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LOCAL CIVIL REGISTRAR REQUIREMENT')" >LOCAL CIVIL REGISTRAR REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LOCAL EMPLOYMENT REQUIREMENT')" >LOCAL EMPLOYMENT REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LTFRB UBER REQUIREMENT')" >LTFRB UBER REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LTFRB GRAB CAR REQUIREMENT')" >LTFRB GRAB CAR REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('LTO DEPUTATION REQUIREMENT')" >LTO DEPUTATION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('MASON REQUIREMENT')" >MASON REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('MARRIAGE REQUIREMENT')" >MARRIAGE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('M. LHUILLIER REQUIREMENT')" >M. LHUILLIER REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('MISSIONARY REQUIREMENT')" >MISSIONARY REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('NATURALIZATION REQUIREMENT')" >NATURALIZATION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('NON-IMMIGRANT VISA')" >NON-IMMIGRANT VISA</li>
                                                                                                    <li  onclick = "$.fn.assignValue('ON THE JOB TRAINING REQUIREMENT')" >ON THE JOB TRAINING REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PAG-IBIG REQUIREMENT')" >PAG-IBIG REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PARTNERSHIP VISA')" >PARTNERSHIP VISA</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PASSPORT REQUIREMENT')" >PASSPORT REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PDEA REQUIREMENT')" >PDEA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PERMANENT RESIDENCY VISA REQUIREMENT')" >PERMANENT RESIDENCY VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PHILHEALTH REQUIREMENT')" >PHILHEALTH REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PHILIPPINE MILITARY ACADEMY REQUIREMENT')" >PHILIPPINE MILITARY ACADEMY REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PHILIPPINE RETIREMENT AUTHORITY REQUIREMENT')" >PHILIPPINE RETIREMENT AUTHORITY REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PHILIPPINE STATISTICS AUTHORITY REQUIREMENT')" >PHILIPPINE STATISTICS AUTHORITY REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PLDT REQUIREMENT')" >PLDT REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PNP REQUIREMENT')" >PNP REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PNPA REQUIREMENT')" >PNPA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('POSTAL I.D. REQUIREMENT')" >POSTAL I.D. REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PRC REQUIREMENT')" >PRC REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PROBATION REQUIREMENT')" >PROBATION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('R2 REQUIREMENT')" >R2 REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('RCBC REQUIREMENT')" >RCBC REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SCHOOL REQUIREMENT')" >SCHOOL REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SEAMANS VISA')" >SEAMANS VISA</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SECURITY GUARD LICENSE REQUIREMENT')" >SECURITY GUARD LICENSE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SECURITY OFFICER REQUIREMENT')" >SECURITY OFFICER REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SOCIAL SECURITY SYSTEM REQUIREMENT')" >SOCIAL SECURITY SYSTEM REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('SEAMANS BOOK REQUIREMENT')" >SEAMANS BOOK REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PANTAWID PAMILYANG PILIPINO PROGRAM REQUIREMENT')" >PANTAWID PAMILYANG PILIPINO PROGRAM REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('PERMIT TO CARRY FIREARMS OUTSIDE RESIDENCE')" >PERMIT TO CARRY FIREARMS OUTSIDE RESIDENCE</li>
                                                                                                    <li  onclick = "$.fn.assignValue('STUDENT VISA REQUIREMENT')" >STUDENT VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('TESDA REQUIREMENT')" >TESDA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('TOURIST VISA REQUIREMENT')" >TOURIST VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('TOUR GUIDE LICENSE REQUIREMENT')" >TOUR GUIDE LICENSE REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('WORKING ABROAD REQUIREMENT')" >WORKING ABROAD REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('WORKING VISA REQUIREMENT')" >WORKING VISA REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('WESTERN UNION REQUIREMENT')" >WESTERN UNION REQUIREMENT</li>
                                                                                                    <li  onclick = "$.fn.assignValue('ALL OTHER PURPOSE NOT HERE MENTIONED ')" >ALL OTHER PURPOSE NOT HERE MENTIONED </li>
                                                                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                

             
                <center  style="padding-top:10px">
                    <button class="btn btn-success btnrenew">Submit</button>
                </center>
            </form>
        
                
        
    
        
        <div class="clear"></div>
        
    
        <div class="spacer"></div>
    </section>


</body>

</html>