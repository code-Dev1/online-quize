<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Self-test | Dashboard</title>
        <link href="Assets/images/logo.png" rel="icon" />
        <link href="Assets/css/dashboardStyles.css" rel="stylesheet" />
        <link href="Assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="Assets/css/bootstrap.css" rel="stylesheet" />
        <link href="Assets/css/style.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Self-Test</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>
            <!-- Navbar Search-->
            <span class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></span>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-4">
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="score.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-soccer-ball-o"></i></div>
                                Score
                            </a>
                            
                            <a class="nav-link collapsed" href="setting.php" >
                                <div class="sb-nav-link-icon"><i class="fa fa-exchange"></i></div>
                                Settings
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Shahzada
                    </div>
                </nav>
            </div>
            <!-- main contect start -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- write content between this div -->
                         
                    </div>
                </main>
            </div>
            <!-- main content end -->
        </div>
        <script src="Assets/js/jquery.min.js" ></script>
        <script src="Assets/js/bootstrap.min.js" ></script>
        <script src="Assets/js/script.js" ></script>
    </body>
</html>
