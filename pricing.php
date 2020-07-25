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
    <title> Our Pricing | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/pricing.css">
</head>

<body>

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
                    <a class="nav-link text-warning" href="./pricing.php">Pricing</a>
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


    <!-- -------------------plans-------------- -->

    <div class="pricing py-5">
        <!-- <div class="title font-weight-normal text-center mt-0">Choose Your Pricing Plan</div> -->

        <div class="plan-list wrap div-xxl-full text-center d-flex justify-content-around">

            <div class="plan border border-dark div-xxs-price-full shadow-lg slideRight">
                <h4 class="plan-header font-weight-normal bg-warning p-3">ASSET MANAGEMENT</h4>
                <div class="plan-value">
                    <span class="title font-weight-normal">2000 </span><i class="fas fa-rupee-sign fa-lg"></i>
                </div>
                <!-- <p class="font-weight-light">Every month</p> -->
                <p class="description ">Assets tracking and codification</p>
                <!-- <p class="font-weight-light">7 day free trial</p> -->
                <div class="plan-button px-3">
                    <button type="button" onclick="window.location.href = ''"
                        class="btn btn-warning form-control border-radius-0 ">Select</button></div>
                <hr>
                <p>Upto 100 Assets covered</p>
                <p>Asset Codification</p>
                <p>Plant Electrical Coding </p>
            </div>

            <div class="plan border border-dark div-xxs-price-full shadow-lg  slideUp">
                <h4 class="plan-header font-weight-normal bg-warning p-3">BREAKDOWN ANALYSIS</h4>
                <div class="plan-value">
                    <span class="title font-weight-normal">2000 </span><i class="fas fa-rupee-sign fa-lg"></i>
                </div>
                <!-- <p class="font-weight-light">Every month</p> -->
                <p class="description ">Maintenance and operation decisions</p>
                <!-- <p class="font-weight-light">7 day free trial</p> -->
                <div class="plan-button px-3">
                    <button type="button" onclick="window.location.href = ''"
                        class="btn btn-warning form-control border-radius-0 ">Select</button></div>
                <hr>
                <p>Detailed reports on Machine breakdown</p>
                <p>Graphical Monitoring Charts</p>
            </div>

            <div class="plan border border-dark div-xxs-price-full shadow-lg slideDown">
                <h4 class="plan-header font-weight-normal bg-warning p-3">MACHINE MAINTENANCE</h4>
                <div class="plan-value">
                    <span class="title font-weight-normal">500 </span><i class="fas fa-rupee-sign fa-lg"></i>
                </div>
                <!-- <p class="font-weight-light">Every month</p> -->
                <p class="description ">PM checklist preparation</p>
                <!-- <p class="font-weight-light">7 day free trial</p> -->
                <div class="plan-button px-3">
                    <button type="button" onclick="window.location.href = ''"
                        class="btn btn-warning form-control border-radius-0 ">Select</button></div>
                <hr>
                <p>Single Machine Covered</p>
                <p>Preventive Checklist</p>
                <p>Predictive Checklist </p>
            </div>

            <div class="plan border border-dark div-xxs-price-full shadow-lg slideLeft">
                <h4 class="plan-header font-weight-normal bg-warning p-3">CORRECT ACTION TOOLS</h4>
                <div class="plan-value">
                    <span class="title font-weight-normal">1000 </span><i class="fas fa-rupee-sign fa-lg"></i>
                </div>
                <!-- <p class="font-weight-light">Every month</p> -->
                <p class="description ">Asset failure prevention tools</p>
                <!-- <p class="font-weight-light">7 day free trial</p> -->
                <div class="plan-button px-3">
                    <button type="button" onclick="window.location.href = ''"
                        class="btn btn-warning form-control border-radius-0 ">Select</button></div>
                <hr>
                <p>Per Breakdown</p>
                <p>Root Cause Analysis</p>
                <p>Why-Why Analysis</p>
                <p>Ishikawa Diagram</p>
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