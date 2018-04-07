<?php
include_once "../class/AccountHandler.php";
include '../class/MySqlLeaf.php';

// Check if the account is logged or not
if(!AccountHandler::isLogin()){
		header("location: ../login.php");
    exit;
}


@ $searchURL = $_GET["search"];
if (isset($searchURL) && !empty($searchURL)){
	$sql = "SELECT `id`, `lname`, `fname`, `mname`, `private_key`, `photo` FROM `applicants` 
			WHERE 	lname LIKE '%$searchURL%' OR 
					fname LIKE '%$searchURL%' OR 
					lname LIKE '%$searchURL%' OR 
					mname LIKE '%$searchURL%' OR 
					private_key LIKE '%$searchURL%'
			ORDER BY `id` DESC";
}else{
	// SQL Query: Get the data in the private key
	$sql = "SELECT `id`, `lname`, `fname`, `mname`, `private_key`, `photo` FROM `applicants` ORDER BY `id` DESC";
}

// Prepare Query
$query = mysqli_query(MySqlLeaf::getCon(), $sql);

// Count Rows
$numRow = mysqli_num_rows($query);

$applicants = array();

// Put the MYSQL Result in the user Info
if ($numRow > 0){
	while ($r = mysqli_fetch_array($query)) {
		array_push($applicants, $r);
	}
}

@ $deleteID = $_POST["deleteID"];
if (isset($deleteID)){
	$sql = "DELETE FROM `applicants` WHERE `id`='$deleteID'";
	$query = mysqli_query(MySqlLeaf::getCon(), $sql);

	if ($query === true){
		header("location: database.php");
	}else{
		echo "An error occurs. Press back, reload the page and try again.";
		exit;
	}
}
@ $search = $_POST["search"];
if (isset($search)){
	header("location: database.php?search=$search");
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
			<h1 class="text-center">List of Applicants</h1>
			<form action="database.php" method="post"  class="mb-2">
				<input type="text" name="search" placeholder="Search by Name or Privatekey" class="form-control w-25 pull-right">
			</form>
			<table class="table table-bordered w-100">
				<thead>
					<tr>
						<th>#</th>
						<th></th>
						<th>Full name</th>
						<th>Private key</th>
						<th></th>
					</tr>	
				</thead>
				
				<?php foreach ($applicants as $app): ?>
					<tr>
						<td><?php echo $app["id"] ?></td>
						<td class="p-0" style="vertical-align: middle; text-align: center">
							<img onerror="this.src='../assets/img/profile_image_dummy.svg';" src="../assets/img_uploads/<?php echo $app['photo']; ?>" alt="Profile" height="50" width="50" style="display: inline-block">
						</td>
						<td><?php echo $app["lname"]. ", " .$app["fname"]. " " .$app["mname"]; ?></td>
						<td><?php echo $app["private_key"]; ?></td>
						<td>
							<button data-id="<?php echo $app["id"]; ?>" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-trash-o"> </i> Delete
							</button>
							<a href="add_new_user.php?id=<?php echo $app["id"]; ?>" class="btn btn-primary text-white">
								<i class="fa fa-print"> </i> Print Form
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
		<?php include '../assets/includes/admin_foot.php'; ?>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">	
				<!-- Modal content-->
				<form action="database.php" method="post" class="modal-content">
					<div class="modal-header bg-danger">
						<h4 class="modal-title text-white">Confirmation</h4>
						<button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" value="" id="deleteID" name="deleteID">
						Are you sure to delete this record?
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Delete</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".deleteBtn").on("click", function(){
				$("#deleteID").val($(this).data("id"));
			});
		});
	</script>
</body>
</html>