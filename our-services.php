<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Speak Multipager Responsive Template</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/style_home.css" rel="stylesheet" />


</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top menu-back">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">
        <img src="assets/img/logo.jpg" class="navbar-brand-logo " alt="" />
        </a>
    </div>
    <div class="navbar-collapse collapse" >
        <ul class="nav navbar-nav navbar-right">
                   
        <li class="dropdown">
        <a href="index.php">HOME PAGE<i class="fas fa-home"></i>
        <span>Official Website</span></a>
        <ul class="dropdown-menu dropdown-menu-left"></ul>
        </li>
        <li class="dropdown">
            <a href="our-services.php">APPLICATION FORM<i class="fa fa-folder-open-o"></i>
                <span> Register Now!</span>
            </a>
        </li>

        <li class="dropdown">
            <a href="request-renew.php">REQUEST/RENEW<i class=" fa fa-clipboard"></i>
                <span>Renew Here!</span>
            </a>
                       
        </li>

                   
        <li class="dropdown">
            <a href="verification_home.php"> Tracking <i class="fa fa-clipboard"></i>
                <span>Edit Contact Information</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="error.php">FAQ <i class="fa fa-globe"></i>
                <span>Help?</span>
            </a>
        </li>

        <li class="dropdown">
            <a href="login.php"> EMPLOYEE LOGIN<i class="fa fa-globe"></i>
                <span>login account</span>
            </a>
        </li>
        </ul>
    </div>

    </div>
    </div>

    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <div class="col-md-12"  >
    <div style="float:left;position:absolute">
        <img align="left" height="90" src="assets/img/logo.jpg">
    </div>
        <center style="color:blue;">
        <h1 style="font-weight:50;line-height:50px;font-size:32px"><strong>APPLICATION FORM</strong> </h1>
        <div class="description">
        <p>Fill up the Police Clearance form.</p>
        </div>
        </center>
        </div>
    </div>
        
        <div class="col-md-12">
            <form method="post" id="appform">
                <input type="hidden" name="_token" value="xit4z0Q6YIv0i37LIzj3JCfvD84oF9R14DPQ2ptP">
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
                            
                           <div class="col-md-6" >
                                <div class="col-md-12 field">
                                    <label>Purpose <span style="color:red">*</span></label>
                                    <div style="border:1px solid #ccc;height: 34px;cursor: pointer">
                                        <input type="hidden" class="form-control"  id="c_applicant_purpose" name="c_applicant_purpose" />
                                        <table  style="width: 100%;height: 100%" id="purposeBox" >
                                            <tr>
                                                <td style="width: 90%;padding-left: 10px" id="valuePurposeView">Purpose</td>
                                                <td style="width: 10%;background: #ccc;" align="center"><span class="caret"></span></td>
                                            </tr>
                                        </table>
                                        <div id="purposeSearch" style="display:none;position: absolute;float: left;z-index: 1000;border: 1px solid #ccc;padding-top:10px;width: 94%;background:#fff;max-height: 300px;overflow-y: scroll;">
                                            <input type="text"  id="searchfieldPurpose" style="margin-left:40px;margin-bottom: 10px;width: 85%" class="form-control" placeholder="Search" > 
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
                            <div class="col-md-6 field" >
                                <div class="col-md-12" >
                                    <label>Govt Issued ID Presented: (Indicate ID Number)<span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_govtid" id="c_applicant_govtid" placeholder="Govt Issued ID eq. SSS ID, POSTAL ID, GSIS ID, DRIVER'S ID, etc.">
                                </div>
                            </div> 
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Last Name <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_lname" id="c_applicant_lname" placeholder="Last Name" value="">
                                </div>
                                <div class="col-md-6 field" >
                                    <label>First Name <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_fname" id="c_applicant_fname" placeholder="First Name" value="">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                    <label>Middle Name</label>
                                    <input class="form-control" name="c_applicant_mname" id="c_applicant_mname" placeholder="Middle Name" value="">
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Qualifier (Sr., Jr., II, III, IV , etc.)</label>
                                    <input class="form-control" name="c_applicant_qualifier" id="c_applicant_qualifier" placeholder="Qualifier">
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Gender <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_gender" id="c_applicant_gender">
                                                                                    <option value="">- Select -</option>
                                                                                    <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    
                                    <label>Nickname / Alias<span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_nickname" id="c_applicant_nickname" placeholder="Nickname / Alias">
                                </div>
                            </div>
                            
                            <div class="col-md-6 " >
                                <div class="col-md-6 field" >
                                    <label>Birth Date <span style="color:red">*</span></label>
                                    <table id="bdatedateID">
                                        <tr>

                        <td style="width:47%">
                            <select class="form-control"  id="bdateMonth" name="bdateMonth" style="padding:0px">
                                <option value="">Month</option>
                                    <option value=""> January</option>
                                    <option value=""> February</option>
                                    <option value=""> March</option>
                                    <option value=""> April</option>
                                    <option value=""> May</option>
                                    <option value=""> June</option>
                                    <option value=""> July</option>
                                    <option value=""> August</option>
                                    <option value=""> September</option>
                                    <option value=""> October</option>
                                    <option value=""> November</option>
                                    <option value=""> December</option>
                                
                                    </select>
                            </td>
                            <td style="width:29%">
                                <select class="form-control"  id="bdateDay" name="bdateDay" style="padding:0px">
                                    <option value="">Day</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    <option value="">23</option>
                                    <option value="">24</option>
                                    <option value="">25</option>
                                    <option value="">26</option>
                                    <option value="">27</option>
                                    <option value="">28</option>
                                    <option value="">29</option>
                                    <option value="">30</option>
                                    <option value="">31</option>





                </td>
                                            <td>
                                                <input id="bdateYear" class="form-control" placeholder="Year" name="bdateYear" style="padding:3px" value="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Age <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_age" id="c_applicant_age" placeholder="Age" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                        <label>Birth Place <span style="color:red">*</span></label>
                                        <input class="form-control" name="c_applicant_birthplace" id="c_applicant_birthplace" placeholder="Indicate Town, Province">
                                </div>
                                <div class="col-md-6 field">
                                    <label>Civil Status <span style="color:red">*</span></label>
                                    <select class="form-control" id="c_applicant_civilstatus" name="c_applicant_civilstatus">
                                        <option value="">- Select -</option>
                                                                                                                                    <option value="SINGLE">SINGLE</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-12 field" >
                                    <label>Complete Address <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Unit Number, Street, Barangay, Town/City, Province" name="c_applicant_completeaddress" id="c_applicant_completeaddress">
                                    
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                        <label>Provincial Address <span style="color:red">*</span></label>
                                        <input class="form-control" name="c_applicant_provaddress" id="c_applicant_provaddress" placeholder="Province Address">
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Religion <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_religion" id="c-applicant_religion"placeholder="Religion">
                                    </select>
                                </div>
                            </div>
                            

                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                    <label>Educational Attainment <span style="color:red">*</span></label>
                                    <select  class="form-control" name="c_applicant_eduattainment" id="c_applicant_eduattainment">
                                        <option value="">- Select -</option>
                                    <option value="NONE">NONE</option>
                                    <option value="PRE ELEMENTARY">PRELEMENTARY</option>
                                    <option value="ELEMENTARY GRADUATE">ELEMENTARY GRADUATE</option>
                                    <option value="PRE HIGH SCHOOL">PRE HIGH SCHOOL</option>
                                    <option value="HIGH SCHOOL GRADUATE">HIGH SCHOOL GRADUATE</option>
                                    <option value="PRE COLLEGE, NO DEGREE">PRE COLLEGE, NO DEGREE</option>
                                    <option value="ASSOCIATE DEGREE">ASSOCIATE DEGREE</option>
                                    <option value="BACHELORS DEGREE">BACHELORS DEGREE</option>
                                    <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                                    <option value="PROFESSIONAL DEGREE">PROFESSIONAL DEGREE</option>
                                    <option value="DOCTORATE">DOCTORATE</option>
                                         
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Occupation <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Occupation" name="c_applicant_occupation" id="c_applicant_occupation">
                                </div>
                            </div>
                            
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Citizenship <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_nationality" id="c-applicant_nationality"placeholder="Citizenship">
                                        
                                                                                                                                   
</select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Complexion <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_complexion" id="c_applicant_complexion">
                                        <option value="">- Select -</option>
                                <option value="FAIR">FAIR</option>
                                <option value="LIGHT">LIGHT</option>
                                <option value="DARK">DARK</option>
                                         
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Height (cm.)<span style="color:red">*</span> &nbsp <span style="cursor: pointer" id="linkconvertheight" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></label>
                                    <input class="form-control" name="c_applicant_height" id="c_applicant_height" placeholder="Height example 152" type="number">
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Weight(kg.) <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_weight" id="c_applicant_weight" placeholder="Weight example 52" type="number">
                                </div>
                            </div>
                        
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Hair Color <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_haircolor" id="c_applicant_haircolor">
                                        <option value="">- Select -</option>
                                                                                    <option value="BLACK">BLACK</option>
                                                                                    <option value="BALD">BALD</option>
                                                                                    <option value="BROWN">BROWN</option>
                                                                                    <option value="BLONDE">BLONDE</option>
                                                                                    <option value="BLUE">BLUE</option>
                                                                                    <option value="BRONZE">BRONZE</option>
                                                                                    <option value="DARK BROWN">DARK BROWN</option>
                                                                                    <option value="GREEN">GREEN</option>
                                                                                    <option value="GRAY">GRAY</option>
                                                                                    <option value="RED">RED</option>
                                                                                    <option value="WHITE">WHITE</option>
                                         
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Eye Color <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_eyecolor" id="c_applicant_eyecolor">
                                        <option value="">- Select -</option>
                                                                                    <option value="BLACK">BLACK</option>
                                                                                    <option value="BROWN">BROWN</option>
                                                                                    <option value="BLUE">BLUE</option>
                                                                                    <option value="GRAY">GRAY</option>
                                                                                    <option value="GREEN">GREEN</option>
                                         
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Build/Body Size <span style="color:red">*</span></label>
                                        <select class="form-control" name="c_applicant_build" id="c_applicant_build">
                                            <option value="">- Select -</option>
                                            <option value="Extra extra large">Extra extra large</option>
                                            <option value="Extra large">Extra large</option>
                                            <option value="Extra Small">Extra Small</option>
                                            <option value="Large">Large</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Small">Small</option>
                                        </select>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Distinguishing Marks<span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Distinguishing Marks" name="c_applicant_identityremarks" id="c_applicant_identityremarks">
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>No. of years in the community <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="No. of years in the community" name="c_applicant_noofyears" id="c_applicant_noofyears">
                                </div>
                                <div class="col-md-6 field">
                                    <label>Cellphone No. <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Cellphone No." name="c_applicant_cellphoneno" id="c_applicant_cellphoneno" value="">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                    <label>Telephone No. </label>
                                    <input class="form-control" placeholder="Telephone No." name="c_applicant_telephoneno" id="c_applicant_telephoneno">
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" placeholder="Email Address" name="c_applicant_email" id="c_applicant_email" value="">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12 headname">
                                <center><hr/><h4 class ="infoheader">
                                    FAMILY BACKGROUND
                                </h4></center>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field">
                                    <label>Name of Spouse <small>(If married)</small> </label>
                                    <input class="form-control" placeholder="Name of Spouse" name="c_applicant_spoucename" id="c_applicant_spoucename" >
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field" >
                                    <label>(Spouse) Place of Birth</span></label>
                                    <input class="form-control" placeholder="Indicate Town, Province" name="c_applicant_spoucebdateplace" id="c_applicant_spoucebdateplace">
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field">
                                    <label>Father's Name <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Father's Name" name="c_applicant_fathersname" id="c_applicant_fathersname" >
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field" >
                                    <label>(Father's) Place of Birth <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Indicate Town, Province" name="c_applicant_fathersaddress" id="c_applicant_fathersaddress">
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field">
                                    <label>Mother's Maiden Name <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Mother's Maiden Name" name="c_applicant_mothersname" id="c_applicant_mothersname">
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field" >
                                    <label>(Mother's) Place of Birth <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Indicate Town, Province" name="c_applicant_mothersaddress" id="c_applicant_mothersaddress">
                                </div>
                            </div>
                            
                            <div class="col-md-12 headname">
                                <center><hr/><h4 class ="infoheader">
                                    OTHER INFORMATION
                                </h4></center>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Cedula No. <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                    <input class="form-control" placeholder="Cedula No." name="c_applicant_cedulano" id="c_applicant_cedulano">
                                </div>

                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Date Issued <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                    <table id="ceddateID">
                                        <tr>
                                            <td style="width:47%">
                                                <select class="form-control" id="cedMonth" name="cedMonth" style="padding:0px">
                                                    <option value="">Month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </td>
                                            <td style="width:29%">
                                                <select class="form-control" id="cedDay" name="cedDay" style="padding:0px">
                                                    <option value="">Day</option>
                                                    <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option>                                                </select>
                                            </td>
                                            <td>
                                                <input class="form-control" placeholder="Year" id="cedYear" name="cedYear" style="padding:0px" >
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Passport No.</label>
                                </div>
                                <div class="col-md-8" >
                                    <input class="form-control" placeholder="Passport No." name="c_applicant_passportno" id="c_applicant_passportno">
                                </div>

                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Date Issued</label>
                                </div>
                                <div class="col-md-8" >
                                    <table id="passdateID">
                                        <tr>
                                            <td style="width:47%">
                                                <select class="form-control" id="passMonth" name="passMonth" style="padding:0px">
                                                    <option value="">Month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </td>
                                            <td style="width:29%">
                                                <select class="form-control" id="passDay" name="passDay" style="padding:0px">
                                                    <option value="">Day</option>
                                                    <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option>                                                </select>
                                            </td>
                                            <td>
                                                <input class="form-control" placeholder="Year" id="passYear" name="passYear" style="padding:0px">
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <center  style="padding-top:10px">
                    <button type="submit" class="btn btn-success btnsubmit">Submit</button>
                </center>
            </form>
            <!-- begin error modal-->
<div class="modal fade" id="error-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#D85C5C">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Error!
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#D85C5C">
                    Close
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end error modal -->

<!-- begin success modal-->
<div class="modal fade" id="success-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Success
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Are you sure all data is correct?
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btncontinue"  type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Continue
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->


<!-- begin success modal-->
<div class="modal fade" id="success-renew-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Applicant Found
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Click Continue to create transaction.
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btnrenewcontinue"  type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Continue
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->
<!-- begin success modal-->

<div class="modal fade" id="convert-height-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Height Converter
                </h4>
            </div>
            <div class="modal-body">
                <label class="text-danger" id="msgError"></label>
                <div class="col-md-12" >
                    <div class="col-md-6" >
                        <label>Feet <span style="color:red">*</span></label>
                        <input class="form-control" id="feet" >
                    </div>
                    <div class="col-md-6" >
                        <label>Inches <span style="color:red">*</span></label>
                        <input class="form-control" id="inches" >
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btnconvert"  type="button" class="btn btn-default"  style="color:#fff;background:#309630">
                    Convert
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->


<!-- begin success modal-->
<div class="modal fade" id="success-verify-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Applicant Found
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Police Clearance Reference Code Inputted is Confirmed Valid.
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Close
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->      </div>
    </div>
</div>
<script src="application_form_home.js"></script>

    <style type="text/css">
        .custmenu{
            color: #fff;font-weight: 600;font-size: 18px;
            margin-right: 20px;
        }
        .custmenu:hover{
            color: #1fb5ff;
        }
    </style>



   
</body>
</html>
