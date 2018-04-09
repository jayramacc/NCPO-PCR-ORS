<?php

include_once "class/AccountHandler.php";
include_once "class/FlashCard.php";

// Check if the account is logged or not
if(AccountHandler::isLogin()){
    switch (AccountHandler::getAccountType()){
        case 'account':
	        header("location: admin/admin.php");
            break;
    }
    exit;
}

// Data Submitted by the Form
@ $un = $_POST["username"];
@ $pw = $_POST["password"];
if (isset($un) && isset($pw)){
    // Get the password from the pass.json file
    $adminPW = json_decode( file_get_contents('admin/pass.json'), true)["pass"];

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

        header("location: admin/admin.php");
        exit;
    } else {
        FlashCard::setFlashCard("errorAccount");
        header("location: login.php");
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
    <div class="container card mt-3 p-4 w-50">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold mb-0 text-primary">Employee Login</h1>
                <div class="description">Login as an Employee by entering the required credentials</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 panel panel-default custpanel">
                <form action="login.php" method="POST" class="panel-body mainpanel">
                    <div class="form-group">
                        <label for="username" class="mb-0 font-weight-bold">Enter ID</label>
                        <input class="form-control" id="username" name="username" type="text" placeholder="Enter ID" required>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="mb-0 font-weight-bold">Password</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                </form>
            </div>
        </div>
        <?php 
            $hasFlashCard = FlashCard::hasFlashCard();
            $flashCard = ($hasFlashCard) ? FlashCard::getFlashCard() : "";
            if ($hasFlashCard){
                switch($flashCard){
                    case 'errorAccount':
                        echo '<div class="alert alert-danger mb-0 mt-2" role="alert">';
                        echo "  <b>Opps: </b> Account Does not exist";
                        echo '</div>';
                        break;
                }
            }
        ?>
    </div>
</body>
</html>



