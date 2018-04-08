
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center">
                <img src="../assets/img/logo.jpg" alt="person" class="h-100 w-100">
                <h2 class="h5">NCPO-PCR</h2><span>Online Registration</span>
            </div>
            <div class="sidenav-header-logo">
                <a href="admin.php" class="brand-small text-center"> 
                    <strong>B</strong>
                    <strong class="text-primary">D</strong>
                </a>
            </div>
        </div>
        <div class="main-menu">
            <h5 class="sidenav-heading">Administrator</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
                <li>
                    <a href="admin.php"> <i class="icon-home"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> 
                        <i class="icon-form"></i>Database 
                    </a>
                    <ul id="formsDropdown" class="collapse list-unstyled ">
                        <li><a href="database.php">Account List</a></li>
                        <li><a href="cloud.php">Cloud Backup</a></li>
                        <li><a href="add_new_user.php">Print Application Form</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> 
                        <i class="fa fa-bar-chart"></i>Settings 
                    </a>
                    <ul id="chartsDropdown" class="collapse list-unstyled ">
                        <li><a href="changepass.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>