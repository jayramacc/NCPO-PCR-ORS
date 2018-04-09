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
	<div class ="alert alert-info" role="alert">
	<h4 class="alert-heading">WELCOME! your already Sign In</h4>
	<hr>
<p>This system can only be used by Naga City Police Office Personels, whoever unathorized person use this system shall be punished by the law </p>
<p>The system features are:
<p>
<ul>
<li>Online Back-up
<li>Searching of Private key
<li>List of all Applicant
<li>Printing of a Applicant Police clearance form
</ul>
</p>
	</div>	
	</div>
		<?php include '../assets/includes/admin_foot.php'; ?>
	</div>
</body>
</html>