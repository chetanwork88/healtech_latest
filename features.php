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
    <title> Features | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/features.css">
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
                    <a class="nav-link  text-warning" href="./features.php">Features
                        <a class="nav-link text-warning carot dropdown-toggle dropdown-toggle-split" href=""
                            id="navbardrop" data-toggle="dropdown">
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
                    <a class="nav-link" href="./resources.php">Resources
                        <a class="nav-link carot dropdown-toggle dropdown-toggle-split" href="" id="navbardrop"
                            data-toggle="dropdown">
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

    <!-- ------features list----- -->
    <div class="title text-center text-warning">OUR FEATURES</div>

    <!-- Asset management system----- -->
    <div class="feature div-xxl-full d-flex wrap mb-5 mt-3">
        <div class="info div-smr-full bg-black p-5 slideRight">
            <p class="sub-title text-center text-warning">ASSET MANAGEMENT SYSTEM</p>
            <p class="description text-justify">
                Asset Management Solution is designed to positively impact the performance of not just your
                storeroom,but also your manufacturing equipment, your production output – and ultimately your bottom
                line.
            </p>
            <div class="text-center">
                <button type="button" onclick="window.location.href = 'features_asset_mgmt.php'"
                    class="btn btn-warning">Learn More</button>
            </div>
        </div>

        <div class="image div-smr-full">
            <img src="./images/plant_big.jpg" alt="Asset Management">
        </div>
    </div>

    <!-- --------Breakdown analysis----- -->
    <div class="feature div-xxl-full d-flex wrap-reverse mb-5">
        <div class="image div-smr-full">
            <img src="./images/contact_us_bg.jpg" alt="Breakdown Analysis">
        </div>

        <div class="info div-smr-full bg-black p-5 slideAnimLeft">
            <p class="sub-title text-center text-warning">BREAKDOWN ANALYSIS</p>
            <p class="description text-justify">
                We provide exact Breakdown analysis on basis of history data provided from plant.
            </p>
            <div class="text-center">
                <button type="button" onclick="window.location.href = 'features_breakdown_analysis.php'"
                    class="btn btn-warning">Learn More</button>
            </div>
        </div>
    </div>

    <!-- --------Maintenance------- -->
    <div class="feature div-xxl-full d-flex wrap mb-5 mt-3">
        <div class="info div-smr-full bg-black p-5 slideAnimRight">
            <p class="sub-title text-center text-warning">MAINTENANCE</p>
            <p class="description text-justify">
                Machine maintenance is the work that keeps mechanical assets running with minimal downtime. Machine
                maintenance can include regularly scheduled service, routine checks, and both scheduled and emergency
                repairs. It also includes replacement or realignment of parts that are worn, damaged, or misaligned.
            </p>
            <div class="text-center">
                <button type="button" onclick="window.location.href = 'features_maintenance.php'"
                    class="btn btn-warning">Learn More</button>
            </div>
        </div>

        <div class="image div-smr-full">
            <img src="./images/plant.jpg" alt="Asset Maintenance">
        </div>
    </div>

    <!-- --------Corrective action tools----- -->
    <div class="feature div-xxl-full d-flex wrap-reverse mb-5">
        <div class="image div-smr-full">
            <img src="./images/maintain_fix.jpg" alt="Corrective Action Tools">
        </div>

        <div class="info div-smr-full bg-black p-5 slideAnimLeft">
            <p class="sub-title text-center text-warning">CORRECTIVE ACTION TOOLS</p>
            <p class="description text-justify">
                Corrective action tools provide the resources to optimize asset failure. <br>
                Analysis Methods -
                <ul>
                    <li>Root Cause Analysis</li>
                    <li>Why-Why Analysis</li>
                    <li>Ishikawa Diagrams</li>
                </ul>
            </p>
            <div class="text-center">
                <button type="button" onclick="window.location.href = 'features_action_tools.php'"
                    class="btn btn-warning">Learn More</button>
            </div>
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