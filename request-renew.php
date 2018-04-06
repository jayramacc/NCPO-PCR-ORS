<?php
include 'class/MySqlLeaf.php';
// Get data - our-services.php?pk=[PRIVATE_KEY_OF_THE_USER]
@ $privateKey = $_POST["pk"];

if (isset($privateKey)){    
    // SQL Query: Get the data in the private key
    $sql = "SELECT * FROM `applicants` WHERE `private_key`='$privateKey' AND `activated`='true'LIMIT 1";
    
    // Prepare Query
    $query = mysqli_query(MySqlLeaf::getCon(), $sql);

    // Count Rows
    $numRow = mysqli_num_rows($query);
    // Put the MYSQL Result in the user Info
    if ($numRow > 0){
        header("location: our-services.php?pk=$privateKey");
    }else{
        echo "Sorry, private Key is either not yet activated or does not exist.";
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
    <title>Speak Multipager Responsive Template</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/style_home.css" rel="stylesheet" />
    <script src="js/jquery/jquery.min.js"></script>
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
                <h1 style="font-weight:50;line-height:50px;font-size:32px"><strong>REQUEST/RENEW FORM</strong> </h1>
                <div class="description">
                    <p>Please enter your private key</p>
                </div>
             </center>
            </div>
        </div>
        <div class="col-md-12">
            <form method="post" id="renewform" action="request-renew.php">

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
                                    PRIVATE KEY
                                </h4></center>
                            </div>
                            <div class="col-md-12" >
                                <center>
                                    <span style="color:black;font-weight: 600;">*** To search just type private key ***</span><br/><br/>
                                    <span style="color:green;font-weight: 600;display: none" id="searchloader">Searching...</span>
                                    <span style="color:red;font-weight: 600;display: none" id="searcherror"></span>
                                </center>
                            </div>
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label>Private Key <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                    <div class="input-group">
                                        <input class="form-control" name="pk" id="c_applicant_refcode" required placeholder="Enter Private Key" autocomplete="false">
                                        <span onclick="$(this).closest('form').submit();" class="input-group-addon" id="searchToVerify" style="cursor:pointer"><span  class="glyphicon glyphicon-search" ></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
