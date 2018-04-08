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
	<style>
		iframe {
			display: block;       /* iframes are inline by default */
			border: none;         /* Reset default border */
			height: 100vh;        /* Viewport-relative units */
			width: 100vw;
		}
	</style>
</head>
<body>
	<?php include '../assets/includes/adminnav.php'; ?>
	<div class="page">
		<?php include '../assets/includes/admin_inner.php'; ?>
		<!-- Page Content will be here  -->
		<div class="container card p-3 mt-3">
			<div>
				<button class="btn btn-primary pull-right mb-1" onclick="printForm();">Print Form</button>
			</div>
	    	<iframe id="iframe" name="iframe" src="printing.php?id=<?php echo @$_GET['id']; ?>" frameborder="0" width="100%" height="100%"></iframe>
		</div>
		<?php include '../assets/includes/admin_foot.php'; ?>
	</div>
	<script>
		function printForm(){
			window.frames["iframe"].focus();
			window.frames["iframe"].print();
		}
	</script>
</body>
</html>