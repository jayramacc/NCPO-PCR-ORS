<?php 
include 'class/MySqlLeaf.php';
include 'class/FlashCard.php';
// Get data - our-services.php?pk=[PRIVATE_KEY_OF_THE_USER]
@ $privateKey = $_GET["pk"];


if (isset($privateKey)){    

    // SQL Query: Get the data in the private key
    $sql = "SELECT * FROM `applicants` WHERE `private_key`='$privateKey' AND `activated`='true'LIMIT 1";
    
    // Prepare Query
    $query = mysqli_query(MySqlLeaf::getCon(), $sql);

    // Count Rows
    $numRow = mysqli_num_rows($query);

    // Put the MYSQL Result in the user Info
    if ($numRow > 0){
        $userInfo = mysqli_fetch_array($query);
        $renew_request = true;
    }
    
}else{
    $userInfo = array();
    $renew_request = false;
}

// Set each _POST data into a variable
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

// Constraints: Check if the required _POST data is acquired.
if (isset($purpose) && isset($lname) && isset($fname) && isset($gender) && isset($nickname) &&
    isset($birthdate) && isset($age) && isset($bPlace) && isset($cStatus) && isset($cAddress) &&
    isset($pAddress) && isset($religion) && isset($edAttainment) && isset($occupation) &&
    isset($citizenship) && isset($complexion) && isset($height) && isset($weight) && 
    isset($hairColor) && isset($eyeColor) && isset($bodySize) && isset($identityMarks) &&
    isset($communityYears) && isset($cellNo) && isset($email) && isset($faName) && isset($faBAdd) &&
    isset($moName) && isset($moBAdd) && isset($cedulaNo) && isset($cedMonth)){

    // Upload Image Algorithm..
    if (isset($_FILES['image'])){
        // Get image name
        $image = $_FILES['image']['name'];
        $newName = time().$image;
        

        // image file directory
        $target = "assets/img_uploads/".basename($newName);
        
        // Move File
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        
        $photoUrl = $newName;
    }else{
        $photoUrl = "";
    }

    // Generate Private Key
    $privateKey = md5(time());

    if ($renew_request){
        $sql = "UPDATE `applicants` SET
         `lname`='$lname',`fname`='$fname',`mname`='$mname',`suffix`='$suffix',`gender`='$gender',`nickname`='$gender',`bdate`='$birthdate',
         `age`='$age',`birth_place`='$bPlace',`civil_status`='$cStatus',`complete_address`='$cAddress',`provincial_address`='$pAddress',
         `religion`='$religion',`educational_attainment`='$edAttainment',`occuputation`='$occupation',`complexion`='$complexion',
         `height`='$height',`weight`='$weight',`hair_color`='$hairColor',`eye_color`='$eyeColor',`body_size`='$bodySize',
         `distinguishing_marks`='$identityMarks',`community_years`='$communityYears',`cellphone_no`='$cellNo',`tel_no`='$telNo',
         `email_address`='$email',`spouse_name`='$spouseName',`father_name`='$faName',`mother_name`='$moName',`spouse_birth_place`='$bplace',
         `cedula_date_issued`='$cedMonth',`cedula_no`='$cedulaNo',`purpose`='$purpose', `photo`='$photoUrl' WHERE 1";
    
        // Prepare Query
        $query = mysqli_query(MySqlLeaf::getCon(), $sql);

        // Execute Before Comparing.
        if ($query === true){
            $sql = "INSERT INTO `notification`(`private_key`, `type`) VALUES ('$privateKey', 'renew');";
            mysqli_query(MySqlLeaf::getCon(), $sql);
            
            FlashCard::setFlashCard("successApply");
            header("location: index.php");
            // TODO: Add success message
        }else{
            // Show Message Error
            FlashCard::setFlashCard("errorApply");
            header("location: index.php");
        }
    }else{
        // SQL Query
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
        '$telNo', '$email', '$spouseName','$faName','$moName','$bplace', '$cedMonth', '$cedulaNo', '$purpose','$privateKey','$photoUrl');";
        
        // Prepare Query
        $query = mysqli_query(MySqlLeaf::getCon(), $sql);

        // Execute Before Comparing.
        if ($query === true){
            $sql = "INSERT INTO `notification`(`private_key`) VALUES ('$privateKey');";
            mysqli_query(MySqlLeaf::getCon(), $sql);
            // Redirect
            FlashCard::setFlashCard("mailedApply");
            header("location: class/MailHandler.php?client_name=$fname%20$lname&client_email=$email&pk=$privateKey");
        }else{
            // Show Message Error
            FlashCard::setFlashCard("errorApply");
            header("location: index.php");
            
        }
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/style_home.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
</head>
<body>
    <?php include 'assets/includes/nav.php' ?>
    <div class="container card mt-4 p-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold text-primary mb-0">APPLICATION FORM</h1>
                <div class="description">Fill up the Police Clearance form.</div>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <b>Warning: </b>All fields with asterisk( <b class="text-danger">*</b> ) are required.
        </div>
        <form enctype="multipart/form-data" method="post" action="our-services.php" id="appform">
            <h4 class="infoheader text-center font-weight-bold">APPLICANT INFORMATION</h4>
            <div class="row">
                <div class="col-md-2">
                    <img align="center" id="imgPreview" src="assets/img_uploads/<?php echo @$userInfo['photo']; ?>" alt="Your Image preview" height="150" width="150" style="" onerror="this.src='assets/img/profile_image_dummy.svg';"/>
                </div>
                <div class="col-md-10">
                    <label class="mb-0 mt-2">Upload an Image</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                + Browse Image <input type="file" id="imgInp" accept="image/*" name="image" value="<?php echo @$userInfo['photo']; ?>">
                            </span>
                        </span>
                        <input type="text" class="form-control" value="Click + to upload a photo" readonly>
                    </div>
                    <label class="mb-0 mt-2">Purpose <span style="color:red">*</span></label>
                    <select class="form-control" name="purpose" id="purpose" required>
                        <option disabled selected value="">- Select Application Purpose -</option>
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
                        <option value="citon requirement">CITON REQUIREMENT </option>
                        <option value="civil service commission requirement"> CIVIL SERVICE COMMISSION REQUIREMENT</option>
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
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label class="mb-0 mt-2">Last Name <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['lname']; ?>" class="form-control" name="c_applicant_lname" id="c_applicant_lname" placeholder="Last Name" value="" required>
                </div>
                <div class="col-md-3" >
                    <label class="mb-0 mt-2">First Name <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['fname']; ?>" class="form-control" name="c_applicant_fname" id="c_applicant_fname" placeholder="First Name" value="" required>
                </div>
                <div class="col-md-3 field">
                    <label>Middle Name</label>
                    <input value="<?php echo @$userInfo['mname']; ?>" class="form-control" name="c_applicant_mname" id="c_applicant_mname" placeholder="Middle Name" value="">
                </div>
                <div class="col-md-3 field" >
                    <label class="mb-0 mt-2">Qualifier (Sr., Jr., II, III, IV , etc.)</label>
                    <input value="<?php echo @$userInfo['suffix']; ?>" class="form-control" name="c_applicant_qualifier" id="c_applicant_qualifier" placeholder="Qualifier">
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="mb-0 mt-2">Gender <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_gender" id="c_applicant_gender" required>
                        <option value="" disabled selected>- Select Gender-</option>
                        <option <?php echo @$userInfo['gender'] == 'male' ? 'selected': ''; ?> value="male">Male</option>
                        <option <?php echo @$userInfo['gender'] == 'female' ? 'selected': ''; ?> value="female">Female</option>
                    </select>
                </div>
                <div class="col-3" >
                    <label class="mb-0 mt-2">Nickname / Alias<span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['nickname']; ?>" class="form-control" name="c_applicant_nickname" id="c_applicant_nickname" placeholder="Nickname / Alias" required>
                </div>

                <div class="col-2" >
                    <label class="mb-0 mt-2">Birth Date <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['bdate']; ?>" class="form-control" type="date" name="birthdate" id="bdatedateID" value="date"placeholder = "Birth Date" required >
                </div>
                <div class="col-2">
                    <label class="mb-0 mt-2">Age <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['age']; ?>" class="form-control" name="c_applicant_age" id="c_applicant_age" placeholder="Age" type="number" required>
                </div>
                <div class="col-3">
                    
                    <label>Civil Status <span style="color:red">*</span></label>
                    <select class="form-control" id="c_applicant_civilstatus" name="c_applicant_civilstatus" required>
                        <option value="" disabled selected>- Select status -</option>
                        <option <?php echo @$userInfo['civil_status'] == 'single' ? 'selected' : ''; ?> value="single">SINGLE</option>
                        <option <?php echo @$userInfo['civil_status'] == 'married' ? 'selected' : ''; ?> value="married">MARRIED</option>
                        <option <?php echo @$userInfo['civil_status'] == 'widowed' ? 'selected' : ''; ?> value="widowed">WIDOWED</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="mb-0 mt-2">Birth Place <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['birth_place']; ?>" class="form-control" name="c_applicant_birthplace" id="c_applicant_birthplace" placeholder="Indicate Town, Province" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12" >
                    <label class="mb-0 mt-2">Complete Address <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['complete_address']; ?>" class="form-control" placeholder="Unit Number, Street, Barangay, Town/City, Province" name="c_applicant_completeaddress" id="c_applicant_completeaddress" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="mb-0 mt-2">Provincial Address <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['provincial_address']; ?>" class="form-control" name="c_applicant_provaddress" id="c_applicant_provaddress" placeholder="Province Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-2" >
                    <label class="mb-0 mt-2">Religion <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['religion']; ?>" class="form-control" name="c_applicant_religion" id="c-applicant_religion"placeholder="Religion" required>
                </div>
                <div class="col-3">
                    <label class="mb-0 mt-2">Educational Attainment <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_eduattainment" id="c_applicant_eduattainment" required>
                        <option value="" selected disabled>- Select Educational Attainment -</option>
                        <option <?php echo @$userInfo['birth_place'] == 'none' ? 'selected': ''; ?> value="none">NONE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'pre-elementary' ? 'selected': ''; ?> value="pre-elementary">PRELEMENTARY</option>
                        <option <?php echo @$userInfo['birth_place'] == 'elementary graduate' ? 'selected': ''; ?> value="elementary graduate">ELEMENTARY GRADUATE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'pre-highschool' ? 'selected': ''; ?> value="pre-highschool">PRE HIGH SCHOOL</option>
                        <option <?php echo @$userInfo['birth_place'] == 'highschool graduate' ? 'selected': ''; ?> value="highschool graduate">HIGH SCHOOL GRADUATE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'pre-college' ? 'selected': ''; ?> value="pre-college">PRE COLLEGE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'no degree' ? 'selected': ''; ?> value="no degree">NO DEGREE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'associate degree' ? 'selected': ''; ?> value="associate degree">ASSOCIATE DEGREE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'bachelors degree' ? 'selected': ''; ?> value="bachelors degree">BACHELORS DEGREE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'masters degree' ? 'selected': ''; ?> value="masters degree">MASTERS DEGREE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'professional degree' ? 'selected': ''; ?> value="professional degree">PROFESSIONAL DEGREE</option>
                        <option <?php echo @$userInfo['birth_place'] == 'doctorate' ? 'selected': ''; ?> value="doctorate">DOCTORATE</option>
                    </select>
                </div>
                <div class="col-3" >
                    <label class="mb-0 mt-2">Occupation <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['occuputation']; ?>" class="form-control" placeholder="Occupation" name="c_applicant_occupation" id="c_applicant_occupation" required>
                </div>
                <div class="col-2">
                    <label class="mb-0 mt-2">Citizenship <span style="color:red">*</span></label>
                    <input value="Filipino" class="form-control" name="c_applicant_nationality" id="c-applicant_nationality"placeholder="Citizenship" required>
                </div>
                <div class="col-2" >
                    <label class="mb-0 mt-2">Complexion <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_complexion" id="c_applicant_complexion" required>
                        <option value="" disabled selected>- Select Complexion -</option>
                        <option <?php echo @$userInfo['complexion'] == 'fair' ? 'selected': ''; ?> value="fair">FAIR</option>
                        <option <?php echo @$userInfo['complexion'] == 'light' ? 'selected': ''; ?> value="light">LIGHT</option>
                        <option <?php echo @$userInfo['complexion'] == 'dark' ? 'selected': ''; ?> value="dark">DARK</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="mb-0 mt-2">Height (cm.)<span style="color:red">*</span> &nbsp; <span style="cursor: pointer" id="linkconvertheight" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></label>
                    <input value="<?php echo @$userInfo['height']; ?>" class="form-control" name="c_applicant_height" id="c_applicant_height" placeholder="Height example 152" type="number" required>
                </div>
                <div class="col-3" >
                    <label class="mb-0 mt-2">Weight(kg.) <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['weight ']; ?>" class="form-control" name="c_applicant_weight" id="c_applicant_weight" placeholder="Weight example 52" type="number" required>
                </div>
                <div class="col-3">
                    <label class="mb-0 mt-2">Hair Color <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_haircolor" id="c_applicant_haircolor" required>
                        <option value="" disabled>- Select Haircolor -</option>
                        <option <?php echo @$userInfo['hair_color'] == 'black'? 'selected': ''; ?> value="black">BLACK</option>
                        <option <?php echo @$userInfo['hair_color'] == 'bald'? 'selected': ''; ?> value="bald">BALD</option>
                        <option <?php echo @$userInfo['hair_color'] == 'brown'? 'selected': ''; ?> value="brown">BROWN</option>
                        <option <?php echo @$userInfo['hair_color'] == 'blonde'? 'selected': ''; ?> value="blonde">BLONDE</option>
                        <option <?php echo @$userInfo['hair_color'] == 'blue'? 'selected': ''; ?> value="blue">BLUE</option>
                        <option <?php echo @$userInfo['hair_color'] == 'bronze'? 'selected': ''; ?> value="bronze">BRONZE</option>
                        <option <?php echo @$userInfo['hair_color'] == 'darkbrown'? 'selected': ''; ?> value="darkbrown">DARK BROWN</option>
                        <option <?php echo @$userInfo['hair_color'] == 'green'? 'selected': ''; ?> value="green">GREEN</option>
                        <option <?php echo @$userInfo['hair_color'] == 'gray'? 'selected': ''; ?> value="gray">GRAY</option>
                        <option <?php echo @$userInfo['hair_color'] == 'red'? 'selected': ''; ?> value="red">RED</option>
                        <option <?php echo @$userInfo['hair_color'] == 'white'? 'selected': ''; ?> value="white">WHITE</option>
                    </select>
                </div>
                <div class="col-3" >
                    <label class="mb-0 mt-2">Eye Color <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_eyecolor" id="c_applicant_eyecolor" required>
                        <option value="" disabled selected>- Select Eye Color -</option>
                        <option <?php echo @$userInfo['eye_color'] == 'black' ? 'selected' : ''; ?> value="black">BLACK</option>
                        <option <?php echo @$userInfo['eye_color'] == 'brown' ? 'selected' : ''; ?> value="brown">BROWN</option>
                        <option <?php echo @$userInfo['eye_color'] == 'blue' ? 'selected' : ''; ?> value="blue">BLUE</option>
                        <option <?php echo @$userInfo['eye_color'] == 'gray' ? 'selected' : ''; ?> value="gray">GRAY</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3 " >
                    <label class="mb-0 mt-2">Build/Body Size <span style="color:red">*</span></label>
                    <select class="form-control" name="c_applicant_build" id="c_applicant_build" required>
                        <option value="" disabled selected>- Select Body Size -</option>
                        <option <?php echo @$userInfo['body_size'] == 'XXl' ? 'selected': ''; ?> value="XXL">Extra extra large</option>
                        <option <?php echo @$userInfo['body_size'] == 'XL' ? 'selected': ''; ?> value="XL">Extra large</option>
                        <option <?php echo @$userInfo['body_size'] == 'XS' ? 'selected': ''; ?> value="XS">Extra Small</option>
                        <option <?php echo @$userInfo['body_size'] == 'L' ? 'selected': ''; ?> value="L">Large</option>
                        <option <?php echo @$userInfo['body_size'] == 'M' ? 'selected': ''; ?> value="M">Medium</option>
                        <option <?php echo @$userInfo['body_size'] == 'S' ? 'selected': ''; ?> value="S">Small</option>
                    </select>
                </div>
                <div class="col-3">
                    <label class="mb-0 mt-2">Distinguishing Marks<span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['distinguishing_marks']; ?>" class="form-control" placeholder="Distinguishing Marks" name="c_applicant_identityremarks" id="c_applicant_identityremarks" required>
                </div>
                <div class="col-3" >
                    <label class="mb-0 mt-2">No. of years in the community <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['community_years']; ?>" class="form-control" placeholder="No. of years in the community" name="c_applicant_noofyears" id="c_applicant_noofyears" type="number" required>
                </div>
                <div class="col-3">
                    <label class="mb-0 mt-2">Cellphone No. <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['cellphone_no']; ?>" class="form-control" placeholder="Cellphone No." name="c_applicant_cellphoneno" id="c_applicant_cellphoneno" value="" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="mb-0 mt-2">Telephone No. </label>
                    <input value="<?php echo @$userInfo['tel_no']; ?>" class="form-control" placeholder="Telephone No." name="c_applicant_telephoneno" id="c_applicant_telephoneno">
                </div>
                <div class="col-5" >
                    <label class="mb-0 mt-2">Email Address <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['email_address']; ?>" class="form-control" type="email" placeholder="Email Address" name="c_applicant_email" id="c_applicant_email" value="" required>
                </div>
            </div>
            <h4 class="infoheader font-weight-bold text-center pad-row">FAMILY BACKGROUND</h4>
            <div class="row">
                <div class="col-6 " >
                    <label class="mb-0 mt-2">Name of Spouse <small>(If married)</small> </label>
                    <input value="<?php echo @$userInfo['spouse_name']; ?>" class="form-control" placeholder="Name of Spouse" name="c_applicant_spoucename" id="c_applicant_spoucename" >
                </div>
                <div class="col-6 " >
                    <label class="mb-0 mt-2">(Spouse) Place of Birth</span></label>
                    <input value="<?php echo @$userInfo['spouse_birth_place']; ?>" class="form-control" placeholder="Indicate Town, Province" name="c_applicant_spoucebdateplace" id="c_applicant_spoucebdateplace">
                </div>
            </div>
            <div class="row">
                <div class="col-6 " >
                    <label class="mb-0 mt-2">Father's Name <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['father_name']; ?>" class="form-control" placeholder="Father's Name" name="c_applicant_fathersname" id="c_applicant_fathersname"  required>
                </div>
                <div class="col-6 " >
                    <label class="mb-0 mt-2">(Father's) Place of Birth <span style="color:red">*</span></label>
                    <input value="<?php  ?>" class="form-control" placeholder="Indicate Town, Province" name="c_applicant_fathersaddress" id="c_applicant_fathersaddress" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 " >
                    <label class="mb-0 mt-2">Mother's Maiden Name <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['mother_name']; ?>" class="form-control" placeholder="Mother's Maiden Name" name="c_applicant_mothersname" id="c_applicant_mothersname" required>
                </div>
                <div class="col-6 " >
                    <label class="mb-0 mt-2">(Mother's) Place of Birth <span style="color:red">*</span></label>
                    <input value="<?php ?>" class="form-control" placeholder="Indicate Town, Province" name="c_applicant_mothersaddress" id="c_applicant_mothersaddress" required>
                </div>
            </div>
            <h4 class="infoheader font-weight-bold text-center pad-row">OTHER INFORMATION</h4>
            <div class="row">
                <div class="col-6" >
                    <label class="mb-0 mt-2">Cedula No. <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['cedula_no']; ?>" class="form-control" placeholder="Cedula No." name="c_applicant_cedulano" id="c_applicant_cedulano" required>
                </div>
                <div class="col-6" >
                    <label class="mb-0 mt-2">Date Issued <span style="color:red">*</span></label>
                    <input value="<?php echo @$userInfo['cedula_date_issued']; ?>" type="date" class="form-control" placeholder="ceddateID" name="cedMonth" id="cedMonth" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6" >
                    <label class="mb-0 mt-2">Passport No.</label>
                    <input class="form-control" placeholder="Passport No." name="c_applicant_passportno" id="c_applicant_passportno">
                </div>
                <div class="col-6" >
                    <label class="mb-0 mt-2">Date Issued</label>
                    <input type="date" class="form-control" placeholder="passdateID" name="assMonth" id="passMonth">
                </div>
            </div>
            <div class="alert alert-info mt-2" role="alert">
                <b>Information:</b> By submitting the form, you gurantee the provided informations to be true. 
                Any Falsification is punishable by law.
            </div>
            <div class="row">
                <div class="col-12  text-center">
                    <button type="submit" class="btn btn-success btnsubmit" align="center">Submit Application</button>
                </div>
            </div>
        </form>        
    </div>
</body>
<script type="text/javascript">
    $(document).ready( function() {
        // Event Listener
    	$(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});

		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
                
		        reader.onload = function (e) {
		            $('#imgPreview').attr('src', e.target.result);
		        }        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){ 
            readURL(this);
        }); 	
	});
</script>
</html>
