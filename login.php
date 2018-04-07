<?php

include_once "class/AccountHandler.php";

// Check if the account is logged or not
if(AccountHandler::isLogin()){
    switch (AccountHandler::getAccountType()){
        case 'account':
	        header("location: admin.php");
            break;
    }
    exit;
}

// Data Submitted by the Form
@ $un = $_POST["username"];
@ $pw = $_POST["password"];
if (isset($un) && isset($pw)){
    // Get the password from the pass.json file
    $adminPW = json_decode( file_get_contents('pass.json'), true)["pass"];

    // Check Credential and Authenticate
    if ($un == "ncpo_admin" && md5($pw) == $adminPW){
        $username = "ncpo_admin";
        $emp_type = "account";
        $id = 0;

        $_SESSION["username"] = $username;
        $_SESSION["type"] = $emp_type;
        $_SESSION["id"] = $id;

        setcookie( "username", $username, time() + (10 * 365 * 24 * 60 * 60) );
        setcookie( "type", $emp_type, time() + (10 * 365 * 24 * 60 * 60) );
        setcookie( "id", $id, time() + (10 * 365 * 24 * 60 * 60) );

        header("location: admin.php");
        exit;
        // TODO: Add sessions and cookies
    } else {
        echo "Account does not exist.";
    }
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/style_home.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'assets/includes/nav.php' ?>
    
<div class="clearfix"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12"  >
                <div style="float:left; position:absolute">
                    <img align="left" height="90" src="assets/img/logo.jpg">
                </div>
                <center style="color:blue;">
                <h1 style="font-weight:50;line-height:50px;font-size:32px"><strong>EMPLOYEE LOGIN</strong> </h1>
                <div class="description">
                    <p>Please provide the details below.</p>
                </div>
             </center>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default custpanel">
                <form action="login.php" method="POST" class="panel-body mainpanel">
                    <div class="col-md-12" >
                        <div class="card card-login mx-auto mt-5">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">ID</label>
                                    <input class="form-control" id="username" name="username" type="text" placeholder="Enter ID" required>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>



