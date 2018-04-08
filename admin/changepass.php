<?php
include_once "../class/AccountHandler.php";

// Check if the account is logged or not
if(!AccountHandler::isLogin()){
		header("location: ../login.php");
    exit;
}

@ $pwd = $_POST["pwd"];
@ $pwd1 = $_POST["new_pwd"];
@ $pwd2 = $_POST["conf_new_pwd"];

if (isset($pwd) && isset($pwd2) && isset($pwd1)){
	$adminPW = json_decode( file_get_contents('pass.json'), true)["pass"];

	if (md5($pwd) == $adminPW) {
		if ($pwd1 == $pwd2){
			$data["pass"] = md5($pwd1);
			$newJsonString = json_encode($data);
			file_put_contents('pass.json', $newJsonString);

			header("location: changepass.php");
			exit;
		}else{
			echo "Password not matched.";
			exit;
		}
	}else{
		echo "Wrong Password";
		exit;
	}
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
		<form class="form-horizontal card w-50 p-3 mr-auto ml-auto mb-0 mt-4" action="changepass.php" method="post">
			<h1 class="text-center text-primary">Change Password</h1>
			<div class="form-group">
				<label class="control-label mb-0" for="pwd">Current Password:</label>
				<div>          
					<input type="password" class="form-control" id="pwd" placeholder="Current Password" name="pwd" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label mb-0" for="pwd">New Password:</label>
				<div>          
					<input type="password" class="form-control" id="new_pwd" placeholder="New Password" name="new_pwd" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label mb-0" for="pwd">Repeat New Password:</label>
				<div>          
					<input type="password" class="form-control" id="conf_newpwd" placeholder="Repeat New Password" name="conf_new_pwd" required>
				</div>
			</div>
			<div class="form-group">        
				<div class="pull-right">
					<button type="submit" class="btn btn-success">Change Password</button>
				</div>
			</div>
		</form>
		<?php include '../assets/includes/admin_foot.php'; ?>
	</div>
</body>
</html>