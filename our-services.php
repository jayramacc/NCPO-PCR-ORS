<?php 

print_r($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Application Form</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/style_home.css" rel="stylesheet" />
</head>
<body>
    <?php include 'includes/nav.php' ?>

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
            <form method="post" action="out-services.php" id="appform">
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
        <select class="form-control" name="purpose" id="purpose" required>
    <option value="">- Select -</option>
    <option value="adoption requirement"> ADOPTION REQUIREMENT </option>
    <option value="airport requirement"> AIRPORT REQUIREMENT </option>
    <option value="apprenticeship requirement"> APPRENTICESHIP REQUIREMENT </option>
    <option value="armed forces of the philippines requirement"> ARMED FORCES OF THE PHILIPPINES REQUIREMENT</option>
    <option value="bank requirement"> BANK REQUIREMENT </option>
    <option value="blaster requirement"> BLASTER REQUIREMENT</option>
    <option value="bjmp requirement"> BJMP REQUIREMENT</option>
    <option value="burial requirement">BURIAL REQUIREMENT </option>
    <option value="business requirement"> BUSINESS REQUIREMENT</option>
    <option value="change of birthdate">CHANGE OF BIRTHDATE </option>
    <option value="change of gender from male to female">CHANGE OF GENDER FROM MALE TO FEMALE </option>
    <option value="citom requirement"> CITOM REQUIREMENT </option>
    <option value="change of middle name"> CHANGE OF MIDDLE NAME </option>
    <option value="change of gender from female to male"> CHANGE OF GENDER FROM FEMALE TO MALE </option>
    <option value="change of name"> CHANGE OF NAME</option>
    <option value="civil service commission requirement">CITON REQUIREMENT </option>
    <option value=""> CIVIL SERVICE COMMISSION REQUIREMENT</option>
    <option value="dmdp requirement"> DMDP REQUIREMENT </option>
    <option value="doh requirement"> DOH REQUIREMENT</option>
    <option value="drivers license requirement"> DRIVERS LICENCE REQUIREMENT </option>
    <option value="dswd requirement"> DSWD REQUIREMENT</option>
    <option value="employee abroad requirement"> EMPLOYEE ABROAD REQUIREMENT</option>
    <option value="fiancee visa requirement">FIANCEE VISA REQUIREMENT </option>
    <option value="firearm license requirement"> FIREARM LICENCE REQUIREMENT</option>
    <option value="franchise requirement"> FRANCHISE REQUIREMENT</option>
    <option value="globe requirement"> GLOBE REQUIREMENT </option>
    <option value="gsis requirement"> GSIS REQUIREMENT </option>
    <option value="hospital requirement"> HOSPITAL REQUIREMENT</option>
    <option value="jpic housing requirement"> JPIC HOUSING REQUIREMENT </option>
    <option value="immigrant visa requirement"> IMMIGRANT VISA REQUIREMENT</option>
    <option value="license to operate security agency requirement"> LICENCE TO OPERATE SECURITY AGENCY REQUIREMENT</option>
    <option value="license to deal firearms and community requirements"> LICENCE TO DEAL FIREARMS AND AMMUNITION REQUIREMENTS</option>
    <option value="license to own and possess firearm requirement"> LICENCE TO ARM AND POSSESS FIREARM REQUIREMENT</option>
    <option value="license to purchase explosives requirements"> LICENCE TO PURCHASE EXPLOSIVES REQUIREMENT</option>
    <option value="loan requirement"> LOAN REQUIREMENT </option>
    <option value="local civil registrar requirement"> LOCAL CIVIL REGISTRAR REQUIREMENT </option>
    <option value="local employment requirement"> LOCAL EMPLOYMENT REQUIREMENT </option>
    <option value="ltfrb uber requirement"> LTFRB UBER REQUIREMENT</option>
    <option value="lto deputation requirement"> LTO DEPUTATION REQUIREMENT</option>
    <option value="missionary requirement"> MISSIONARY REQUIREMENT</option>
    <option value="mason requirement"> MASON REQUIREMENT</option>
    <option value="ltrb grabcar requirement"> LTFRB GRABCAR REQUIREMENT</option>
    <option value="m.lhuiller requirement"> M.LHUILLER REQUIREMENT</option>
    <option value="naturalization requirement"> NATURALIZATION REQUIREMENT</option>
    <option value="none-immigrant visa"> NON-IMMIGRANT VISA</option>
    <option value="on the job training"> ON THE JOB TRAINING REQUIREMENT</option>
    <option value="pag-ibig requirement"> PAGIBIG REQUIREMENT</option>
    <option value="partnership visa"> PARTNESHIP VISA</option>
    <option value="passport requirement"> PASSPORT REQUIREMENT</option>
    <option value="pdea requirement"> PDEA REQUIREMENT</option>
    <option value="permanent residency visa requirement"> PERMANENT RESIDENCY VISA REQUIREMENT</option>
    <option value="philhealth requirement"> PHILHEALTH REQUIREMENT</option>
    <option value="philippine military academy requirement"> PHILIPPINE MILITARY ACADEMY REQUIREMENT </option>
    <option value="philippine retirement authory requirement"> PHILIPPINE RETIREMENT AUTHORITY REQUIREMENT</option>
    <option value="pldt requirement"> PLDT REQUIREMENT </option>
    <option value="pnp requirement"> PNP REQUIREMENT</option>
    <option value="pnpa requirement"> PNPA REQUIREMENT</option>
    <option value="philippine statistics authority requirement"> PHILIPPINE STATISTICS AUTHORITY REQUIREMENT</option>
    <option value="postal id requirement"> POSTAL ID REQUIREMENT</option>
    <option value="prc requirement"> PRC REQUIREMENT</option>
    <option value="probation requirement"> PROBATION REQUIREMENT</option>
    <option value="r2 requirement"> R2 REQUIREMENT</option>
    <option value="rcbc requirement"> RCBC REQUIREMENT</option>
    <option value="school requirement"> SCHOOL REQUIREMENT </option>
    <option value="seamans visa"> SEAMANS VISA </option>
    <option value="security guard license requirement"> SECURITY GUARD LICENCE REQUIREMENT</option>
    <option value="social security system requirement"> SOCIAL SECURITY SYSTEM REQUIREMENT</option>
    <option value="seamans book requirement"> SEAMAN'S BOOK REQUIREMENT</option>
    <option value="pantawid pamilyang pilipino program requirement"> PANTAWID PAMILYANG PILIPINO PROGRAM REQUIREMENT</option>
    <option value="permit to carry firearms outside residense"> PERMIT TO CARRY FIREARMS OUTSIDE RESIDENCE</option>
    <option value="student visa requirement"> STUDENT VISA REQUIREMENT</option>
    <option value="tesda requirement"> TESDA REQUIREMENT</option>
    <option value="tourist visa requirement"> TOURIST VISA REQUIREMENT</option>
    <option value="tour guide license requirement"> TOUR GUIDE LICENCE REQUIREMENT</option>
    <option value="working abroad requirement"> WORKING ABROAD REQUIREMENT</option>
    <option value="working visa requirement"> WORKING VISA REQUIREMENT</option>
    <option value="western union requirement"> WESTERN UNION REQUIREMENT</option>
    <option value="all other purpose not here mentioned"> ALL OTHER NOT HERE MENTIONED</option>
                                                        

        </select>
</div>
                                
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-12" >
                                    <label>Govt Issued ID Presented: (Indicate ID Number)<span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_govtid" id="c_applicant_govtid" placeholder="Govt Issued ID eq. SSS ID, POSTAL ID, GSIS ID, DRIVER'S ID, etc." required>
                                </div>
                            </div> 
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Last Name <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_lname" id="c_applicant_lname" placeholder="Last Name" value="" required>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>First Name <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_fname" id="c_applicant_fname" placeholder="First Name" value="" required>
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
                                    <select class="form-control" name="c_applicant_gender" id="c_applicant_gender" required>
                                                                                    <option value="" disabled>- Select Gender-</option>
                                                                                    <option value="male">Male</option>
                                                                                    <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    
                                    <label>Nickname / Alias<span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_nickname" id="c_applicant_nickname" placeholder="Nickname / Alias" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 " >
                                <div class="col-md-6 field" >
                                    <label>Birth Date <span style="color:red">*</span></label>
                                    <table id="bdatedateID">
                                        <tr>

                        <td style="width:47%">
                            <select class="form-control"  id="bdateMonth" name="bdateMonth" style="padding:0px" required>
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
                                        <input class="form-control" name="c_applicant_birthplace" id="c_applicant_birthplace" placeholder="Indicate Town, Province" required>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Civil Status <span style="color:red">*</span></label>
                                    <select class="form-control" id="c_applicant_civilstatus" name="c_applicant_civilstatus" required>
                                        <option value="" disabled>- Select status -</option>
                                        <option value="single">SINGLE</option>
                                        <option value="married">MARRIED</option>
                                        <option value="widowed">WIDOWED</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-12 field" >
                                    <label>Complete Address <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Unit Number, Street, Barangay, Town/City, Province" name="c_applicant_completeaddress" id="c_applicant_completeaddress" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                        <label>Provincial Address <span style="color:red">*</span></label>
                                        <input class="form-control" name="c_applicant_provaddress" id="c_applicant_provaddress" placeholder="Province Address" required>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Religion <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_religion" id="c-applicant_religion"placeholder="Religion" required>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                    <label>Educational Attainment <span style="color:red">*</span></label>
                                    <select  class="form-control" name="c_applicant_eduattainment" id="c_applicant_eduattainment" required>
                                        <option value="">- Select -</option>
                                    <option value="none">NONE</option>
                                    <option value="pre-elementary">PRELEMENTARY</option>
                                    <option value="elementary graduate">ELEMENTARY GRADUATE</option>
                                    <option value="pre-highschool">PRE HIGH SCHOOL</option>
                                    <option value="highschool graduate">HIGH SCHOOL GRADUATE</option>
                                    <option value="pre-college">PRE COLLEGE</option>
                                    <option value="no degree">NO DEGREE</option>
                                    <option value="associate degree">ASSOCIATE DEGREE</option>
                                    <option value="bachelors degree">BACHELORS DEGREE</option>
                                    <option value="masters degree">MASTERS DEGREE</option>
                                    <option value="professional degree">PROFESSIONAL DEGREE</option>
                                    <option value="doctorate">DOCTORATE</option>
                                         
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Occupation <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Occupation" name="c_applicant_occupation" id="c_applicant_occupation" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Citizenship <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_nationality" id="c-applicant_nationality"placeholder="Citizenship" required>
                                        
                                                                                                                                   
</select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Complexion <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_complexion" id="c_applicant_complexion" required>
                                        <option value="">- Select -</option>
                                <option value="fair">FAIR</option>
                                <option value="light">LIGHT</option>
                                <option value="dark">DARK</option>
                                         
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Height (cm.)<span style="color:red">*</span> &nbsp <span style="cursor: pointer" id="linkconvertheight" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></label>
                                    <input class="form-control" name="c_applicant_height" id="c_applicant_height" placeholder="Height example 152" type="number" required>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Weight(kg.) <span style="color:red">*</span></label>
                                    <input class="form-control" name="c_applicant_weight" id="c_applicant_weight" placeholder="Weight example 52" type="number" required>
                                </div>
                            </div>
                        
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Hair Color <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_haircolor" id="c_applicant_haircolor" required>
                                        <option value="">- Select -</option>
                                                                                    <option value="black">BLACK</option>
                                                                                    <option value="bald">BALD</option>
                                                                                    <option value="brown">BROWN</option>
                                                                                    <option value="blonde">BLONDE</option>
                                                                                    <option value="blue">BLUE</option>
                                                                                    <option value="bronze">BRONZE</option>
                                                                                    <option value="darkbrown">DARK BROWN</option>
                                                                                    <option value="green">GREEN</option>
                                                                                    <option value="gray">GRAY</option>
                                                                                    <option value="red">RED</option>
                                                                                    <option value="white">WHITE</option>
                                         
                                    </select>
                                </div>
                                <div class="col-md-6 field" >
                                    <label>Eye Color <span style="color:red">*</span></label>
                                    <select class="form-control" name="c_applicant_eyecolor" id="c_applicant_eyecolor" required>
                                        <option value="">- Select -</option>
                                                                                    <option value="black">BLACK</option>
                                                                                    <option value="brown">BROWN</option>
                                                                                    <option value="blue">BLUE</option>
                                                                                    <option value="gray">GRAY</option>
                                                                                    <option value="green">GREEN</option>
                                         
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>Build/Body Size <span style="color:red">*</span></label>
                                        <select class="form-control" name="c_applicant_build" id="c_applicant_build" required>
                                            <option value="">- Select -</option>
                                            <option value="XXL">Extra extra large</option>
                                            <option value="XL">Extra large</option>
                                            <option value="XS">Extra Small</option>
                                            <option value="L">Large</option>
                                            <option value="M">Medium</option>
                                            <option value="S">Small</option>
                                        </select>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Distinguishing Marks<span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Distinguishing Marks" name="c_applicant_identityremarks" id="c_applicant_identityremarks" required>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-6 field">
                                    <label>No. of years in the community <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="No. of years in the community" name="c_applicant_noofyears" id="c_applicant_noofyears" type="number" required>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Cellphone No. <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Cellphone No." name="c_applicant_cellphoneno" id="c_applicant_cellphoneno" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="col-md-6 field">
                                    <label>Telephone No. </label>
                                    <input class="form-control" placeholder="Telephone No." name="c_applicant_telephoneno" id="c_applicant_telephoneno">
                                </div>
                                <div class="col-md-6 field" >
                                <label>Email Address <span style="color:red">*</span></label>
                                    <input class="form-control" type="email" placeholder="Email Address" name="c_applicant_email" id="c_applicant_email" value="" required>
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
                                    <input class="form-control" placeholder="Father's Name" name="c_applicant_fathersname" id="c_applicant_fathersname"  required>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field" >
                                    <label>(Father's) Place of Birth <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Indicate Town, Province" name="c_applicant_fathersaddress" id="c_applicant_fathersaddress" required>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field">
                                    <label>Mother's Maiden Name <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Mother's Maiden Name" name="c_applicant_mothersname" id="c_applicant_mothersname" required>
                                </div>
                            </div>
                            <div class="col-md-6 " >
                                <div class="col-md-12 field" >
                                    <label>(Mother's) Place of Birth <span style="color:red">*</span></label>
                                    <input class="form-control" placeholder="Indicate Town, Province" name="c_applicant_mothersaddress" id="c_applicant_mothersaddress" required>
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
                                    <input class="form-control" placeholder="Cedula No." name="c_applicant_cedulano" id="c_applicant_cedulano" required>
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
