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
    <title>Request Renew Page</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/style_home.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'assets/includes/nav.php' ?>
    <form method="post" id="renewform" action="request-renew.php" class="container card mt-3 p-3">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold mb-0 text-primary">REQUEST/RENEW FORM</h1>
                <div class="description">Request/Renew by Enter Private Key without wasting time reintering information.</div>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <b>Warning: </b>All fields with asterisk( <b class="text-danger">*</b> ) are required.
        </div>
        <div class=" w-50 m-auto">
            <div class="input-group">
                <input class="form-control" name="pk" id="c_applicant_refcode" required placeholder="Enter Private Key" autocomplete="false">
            </div>
            <button type="submit" class="btn btn-primary w-100">
                <i class="fa fa-search"></i> Enter Private Key
            </button>
        </div>
    </div>
</body>
</html>
