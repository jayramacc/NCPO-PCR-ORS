<?php 
include_once'../class/MySqlLeaf.php';

// SQL Query: Get the data in the private key
$sql = "SELECT notif.id, notif.type, app.fname, app.lname, app.mname, app.purpose, app.photo FROM 
`applicants` as app LEFT JOIN `notification` AS notif ON notif.private_key=app.private_key ORDER BY `id` DESC LIMIT 5";

// Prepare Query
$query = mysqli_query(MySqlLeaf::getCon(), $sql);

// Count Rows
$numRow = mysqli_num_rows($query);

$nofication = array();

// Put the MYSQL Result in the user Info
if ($numRow > 0){
    while ($r = mysqli_fetch_array($query)) {
        array_push($nofication, $r);
    }
}
?>

<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block">Control <b class="text-primary">Panel</b></div>
                    </a>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Notifications dropdown-->
                    <li class="nav-item dropdown"> 
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-warning"><?php echo $numRow; ?></span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <?php foreach ($nofication as $app): ?>
                                <li>
                                    <a rel="nofollow" href="#" class="dropdown-item"> 
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content" onclick="document.location.href='database.php';" >
                                                <b><?php echo $app["lname"]. ", " .$app["fname"]. " " .$app["mname"]; ?></b> 
                                                <?php echo $app["type"] == "apply" ? "has successfully filled up an application form for the first time." : ""; ?>
                                                <?php echo $app["type"] == "renew" ? "has successfully submitted a request." : ""; ?>
                                                <?php echo $app["type"] == "verify" ? "has successfully verified his/her `private key` thru email confirmation." : ""; ?>
                                            </div>
                                        </div>
                                    </a>
                                </li>
				            <?php endforeach; ?>
                            <li>
                                <a rel="nofollow" href="onlineform.php" class="dropdown-item all-notifications text-center"> 
                                    <strong> <i class="fa fa-bell"></i>VIEW ALL NOTIFICATIONS</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Log out-->
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>