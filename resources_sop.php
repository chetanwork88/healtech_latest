<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/hc_logo.png" type="image/x-icon">
    <title> SOP Of Maintenance | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/resources.css">
</head>

<body class="bg-brown">

    <!-- -------------------------navbar-------------------- -->
    <nav class="navbar navbar-expand-md navbar-dark border-bottom border-warning" id="navbar">

        <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="./images/hc_logo_name.png" alt="Logo"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-item-first">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About</a>
                </li>

                <li class="nav-item dropdown d-inline-flex">
                    <a class="nav-link" href="./features.php">Features
                        <a class="nav-link carot dropdown-toggle dropdown-toggle-split" href="" id="navbardrop"
                            data-toggle="dropdown">
                        </a>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./features_asset_mgmt.php">Asset Management System</a>
                        <a class="dropdown-item" href="./features_breakdown_analysis.php">Breakdown Analysis Reports</a>
                        <a class="dropdown-item" href="./features_maintenance.php">Maintenance</a>
                        <a class="dropdown-item" href="./features_action_tools.php">Corrective Action Tools</a>
                    </div>
                </li>

                <li class="nav-item dropdown d-inline-flex">
                    <a class="nav-link text-warning" href="./resources.php">Resources
                        <a class="nav-link text-warning carot dropdown-toggle dropdown-toggle-split" href=""
                            id="navbardrop" data-toggle="dropdown">
                        </a>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./resources_rca.php">Root Cause Analysis</a>
                        <a class="dropdown-item" href="./resources_wwa.php">Why-Why Analysis</a>
                        <a class="dropdown-item" href="./resources_sop.php">SOP of Maintenance</a>
                        <a class="dropdown-item" href="./resources_pm_chklist.php">Effective PM Checklist</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="./pricing.php">Pricing</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link text-warning" href="./blogs.php">Blogs</a>
                </li> -->

                <?php
                if(isset($_SESSION['user']))
                { 
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-user-circle text-primary"></i>
                        <?php
                        echo " aaaaaaaaaaaaa".$_SESSION['profile_name'];
                        ?>
                    </a>
                    <div class="dropdown-menu navbar-light">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <?php
                        if($_SESSION['admin'])
                        {
                        ?>
                        <a class="dropdown-item" href="queries_feedback.php">Feedback</a>
                        <a class="dropdown-item" href="queries_services.php">Services</a>
                        <a class="dropdown-item " href="queries_resources.php">Resources</a>
                        <?php      
                        }
                        else
                        {
                        ?>
                        <a class="dropdown-item" href="price_active_plan.php">My Plan</a>
                        <?php
                        }
                    ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item logout-hover" href="logout.php">Logout</a>
                    </div>
                </li>
                <?php
                }
                else
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    </nav>

    <!-- ----------------SOP OF MAINTENANCE------------->

    <div class="title text-center text-warning mt-5">SOP OF MAINTENANCE</div>

    <div class="resource description div-lg-full text-light text-justify py-3 px-5 mb-5 slideUp">
        <div class="image div-lgr-full pb-4">
            <img src="./images/maintain.jpg" alt="SOP OF MAINTENANCE">
        </div>
        SOP (Standard Operating Procedure) examine what organizations are doing to stay relevant and competitive in this
        fast-paced world, and which ones are doing it best. We then strategize using smart tools and global resources in
        order to understand the implications of every choice our clients can make. Get in touch to learn more about how
        this service can help you.<br><br>

        Engineering Preventive Maintenance Standard Procedure - <br><br>
        <ul>
            <li>The main purpose of the preventive maintenance SOP is to reduce the downtime of all equipment used in
                the hotel by minimising mechanical failures, breakdown, operation and also its running cost.</li>
            <li>In order to ensure that equipment is serviced according to the manufacturer's specifications a repair
                Log Data Sheet to be completed.</li>
            <li>Each equipment or machinery is to be serviced in accordance with the manufacturer's specifications and
                the operating conditions.</li>
            <li>All Preventive maintenance functions have to be entered on the Preventive Maintenance Weekly Schedule
                Sheets.</li>
            <li>Preventive Maintenance (PM) Weekly Schedule Sheets have to be signed by the Engineering Supervisor /
                Chief Engineer.</li>
        </ul>

        <div class="text-center pt-3">
            <button type="button" onclick="window.location.href = 'resources.php'"
                class="btn btn-outline-warning btn-lg">Go Back</button>
        </div>
    </div>

    <!-- -------------------------Footer--------------------- -->
    <?php
    readfile('footer.html');
    ?>

    <!-- -----------Comman javascript-------------- -->
    <?php
    readfile('comman_js.html');
    ?>

</body>

</html>