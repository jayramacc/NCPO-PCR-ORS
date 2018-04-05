<?php 
include 'class/MySqlLeaf.php';

@ $purpose = $_POST["purpose"];
@ $lname = $_POST["c_applicant_lname"];
@ $fname = $_POST["c_applicant_fname"];
@ $mname = $_POST["c_applicant_mname"];
@ $suffix = $_POST["c_applicant_qualifier"];
@ $gender = $_POST["c_applicant_gender"];
@ $nickname = $_POST["c_applicant_nickname"];
@ $birthdate = $_POST["birthdate"];
@ $age = $_POST["c_applicant_age"];
@ $bPlace = $_POST["c_applicant_birthplace"];
@ $cStatus = $_POST["c_applicant_civilstatus"];
@ $cAddress = $_POST["c_applicant_completeaddress"];
@ $pAddress = $_POST["c_applicant_provaddress"];
@ $religion = $_POST["c_applicant_religion"];
@ $edAttainment = $_POST["c_applicant_eduattainment"];
@ $occupation = $_POST["c_applicant_occupation"];
@ $citizenship = $_POST["c_applicant_nationality"];
@ $complexion = $_POST["c_applicant_complexion"];
@ $height = $_POST["c_applicant_height"];
@ $weight = $_POST["c_applicant_weight"];
@ $hairColor = $_POST["c_applicant_haircolor"];
@ $eyeColor = $_POST["c_applicant_eyecolor"];
@ $bodySize = $_POST["c_applicant_build"];
@ $identityMarks = $_POST["c_applicant_identityremarks"];
@ $communityYears = $_POST["c_applicant_noofyears"];
@ $cellNo = $_POST["c_applicant_cellphoneno"];
@ $telNo = $_POST["c_applicant_telephoneno"];
@ $email = $_POST["c_applicant_email"];
@ $spouseName = $_POST["c_applicant_spoucename"];
@ $bplace = $_POST["c_applicant_spoucebdateplace"];
@ $faName = $_POST["c_applicant_fathersname"];
@ $faBAdd = $_POST["c_applicant_fathersaddress"];
@ $moName = $_POST["c_applicant_mothersname"];
@ $moBAdd = $_POST["c_applicant_mothersaddress"];
@ $cedulaNo = $_POST["c_applicant_cedulano"];
@ $cedMonth = $_POST["cedMonth"];
@ $passportNo = $_POST["c_applicant_passportno"];
@ $passMonth = $_POST["assMonth"];

if (isset($purpose) && isset($lname) && isset($fname) && isset($gender) && isset($nickname) &&
    isset($birthdate) && isset($age) && isset($bPlace) && isset($cStatus) && isset($cAddress) &&
    isset($pAddress) && isset($religion) && isset($edAttainment) && isset($occupation) &&
    isset($citizenship) && isset($complexion) && isset($height) && isset($weight) && 
    isset($hairColor) && isset($eyeColor) && isset($bodySize) && isset($identityMarks) &&
    isset($communityYears) && isset($cellNo) && isset($email) && isset($faName) && isset($faBAdd) &&
    isset($moName) && isset($moBAdd) && isset($cedulaNo) && isset($cedMonth)){

    $privateKey = md5(time());

    $sql = "INSERT INTO `applicants`
    (`lname`, `fname`, `mname`, `suffix`, `gender`, `nickname`, `bdate`, `age`, `birth_place`, `civil_status`,
    `complete_address`, `provincial_address`, `religion`, `educational_attainment`, `occuputation`, `complexion`,
    `height`, `weight`, `hair_color`, `eye_color`, `body_size`, `distinguishing_marks`, `community_years`, `cellphone_no`,
    `tel_no`, `email_address`, `spouse_name`, `father_name`, `mother_name`, `spouse_birth_place`, `cedula_date_issued`,
        `cedula_no`, `purpose`, `private_key`, `photo`) 
    VALUES 
    ('$lname', '$fname', '$mname', '$suffix', '$gender', '$nickname', '$birthdate', '$age', '$bPlace', '$cStatus', 
    '$cAddress', '$pAddress','$religion','$edAttainment', '$occupation', '$complexion', 
    '$height', '$weight ', '$hairColor', '$eyeColor', '$bodySize', '$identityMarks', '$communityYears','$cellNo',
    '$telNo', '$email', '$spouseName','$faName','$moName','$bplace', '$cedMonth', '$cedulaNo', '$purpose','$privateKey','kim');";
     
     $query = mysqli_query(MySqlLeaf::getCon(), $sql);

     if ($query === true){
         $sql = "INSERT INTO `notification`(`private_key`) VALUES ('$privateKey');";
         mysqli_query(MySqlLeaf::getCon(), $sql);

         header("location: class/MailHandler.php?client_name=$fname%20$lname&client_email=$email&pk=$privateKey");
     }else{
         echo "Duplication Error";
     }
    exit;
}   

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
                <form method="post" action="our-services.php" id="appform">
                    <div class="panel panel-default custpanel">
                        <div class="panel-body mainpanel">
                            <div class="col-md-12" >
                                <div class="col-md-12" >
                                    <div class="col-md-12" >
                                        <span style="color:red">Note : All fields with asterisk( <b>*</b> ) are required.</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <center><h4 class ="infoheader">APPLICANT INFORMATION</h4></center>
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
                                        <input class="form-control" type="date" name="birthdate" id="bdatedateID" value="date"placeholder = "Birth Date" required >

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
                                    </div>
                                    <div class="col-md-6 field" >
                                        <label>Complexion <span style="color:red">*</span></label>
                                        <select class="form-control" name="c_applicant_complexion" id="c_applicant_complexion" required>
                                            <option value="" disabled>- Select Complexion -</option>
                                            <option value="fair">FAIR</option>
                                            <option value="light">LIGHT</option>
                                            <option value="dark">DARK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " >
                                    <div class="col-md-6 field">
                                        <label>Height (cm.)<span style="color:red">*</span> &nbsp; <span style="cursor: pointer" id="linkconvertheight" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></label>
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
                                            <option value="" disabled>- Select Haircolor -</option>
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
                                            <option value="" disabled>- Select Eye Color -</option>
                                            <option value="black">BLACK</option>
                                            <option value="brown">BROWN</option>
                                            <option value="blue">BLUE</option>
                                            <option value="gray">GRAY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 " >
                                    <div class="col-md-6 field">
                                        <label>Build/Body Size <span style="color:red">*</span></label>
                                        <select class="form-control" name="c_applicant_build" id="c_applicant_build" required>
                                            <option value="" disabled>- Select Body Size -</option>
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
                                    <center><hr/><h4 class ="infoheader">FAMILY BACKGROUND</h4></center>
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
                                    <center>
                                        <hr/>
                                        <h4 class ="infoheader">OTHER INFORMATION</h4>
                                    </center>
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
                                        <input type="date" class="form-control" placeholder="ceddateID" name="cedMonth" id="cedMonth" required>
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
                                        <input type="date" class="form-control" placeholder="passdateID" name="assMonth" id="passMonth">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center  style="padding-top:10px">
                        <button type="submit" class="btn btn-success btnsubmit">Submit</button>
                    </center>
                </form>
            </div>          
        </div>          
    </div>
</body>
</html>
