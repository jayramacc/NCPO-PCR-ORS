<?php
include_once "../class/AccountHandler.php";

// Check if the account is logged or not
if(!AccountHandler::isLogin()){
		header("location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Administrator Panel</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/css/font-awesome-animation.css" rel="stylesheet" />
	<link href="../assets/css/admin.css" rel="stylesheet" />
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php include '../assets/includes/adminnav.php'; ?>
	<div class="page">
		<?php include '../assets/includes/admin_inner.php'; ?>
		<!-- Page Content will be here  -->
        <div class="container card p-3 mt-3">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>This page will pull every information in the cloud server into your local computer, this is to secure every data even a server fallout happens.</p>
                <hr>
                <p class="mb-0">Whenever you need to, click "Backup Data" button below.</p>
            </div>
            <div>
    			<a class="btn btn-primary pull-right" href="../class/Backup.php" >Backup Data</a>
            </div>
        </div>
		<?php include '../assets/includes/admin_foot.php'; ?>
	</div>
</body>
</html>