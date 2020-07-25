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
    <title> Resources | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/resources.css">
</head>

<body class="bg-black">

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
                        <a class="dropdown-item" href="queries_resources.php">Resources</a>
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

    <!-- ------resources list----- -->
    <div class="title text-center text-warning">OUR RESOURCES</div>

    <!-- --------resources---------- -->
    <div class="resources-row div-xxl-full d-flex wrap mt-3">

        <!-- ----ROOT CAUSE ANALYSIS------ -->
        <div class="resource div-smr-full mb-5 bg-brown slideUp">
            <div class="image">
                <img src="./images/maintain.jpg" alt="ROOT CAUSE ANALYSIS">
            </div>

            <div class="info p-5">
                <p class="sub-title text-center text-warning">ROOT CAUSE ANALYSIS</p>
                <p class="description text-justify">
                    Root cause Analysis involves -
                    <ul>
                        <li>Problem Solving Preparation Checklist</li>
                        <li>RCA Problem Report</li>
                    </ul>
                </p>
                <div class="text-center">
                    <button type="button" onclick="window.location.href = 'resources_rca.php'"
                        class="btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>

        <!-- ----------WHY-WHY ANALYSIS------------- -->
        <div class="resource div-smr-full mb-5 bg-brown slideUp">
            <div class="image">
                <img src="./images/analysis.jpg" alt="WHY-WHY ANALYSIS">
            </div>

            <div class="info p-5">
                <p class="sub-title text-center text-warning">WHY-WHY ANALYSIS</p>
                <p class="description text-justify">
                    The Why-Why Analysis (5 Why method ) is used to dig deeper until the true root cause of an
                    occurrence is identified. The root cause can be pursued by asking why continuously, or the process
                    can be split when an occurrence could have multiple causes.
                </p>
                <div class="text-center">
                    <button type="button" onclick="window.location.href = 'resources_wwa.php'"
                        class="btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>

    </div>

    <!-- --------resources---------- -->
    <div class="resources-row div-xxl-full d-flex wrap mt-3">

        <!-- ----SOP OF MAINTENANCE------ -->
        <div class="resource div-smr-full mb-5 bg-brown slideAnimUp">
            <div class="image">
                <img src="./images/maintain_fix.jpg" alt="SOP OF MAINTENANCE">
            </div>

            <div class="info p-5">
                <p class="sub-title text-center text-warning">SOP OF MAINTENANCE</p>
                <p class="description text-justify">
                    We examine what organizations are doing to stay relevant and competitive in this fast-paced world,
                    and which ones are doing it best. We then strategize using smart tools and global resources in order
                    to understand the implications of every choice our clients can make. Get in touch to learn more
                    about how this service can help you.
                </p>
                <div class="text-center">
                    <button type="button" onclick="window.location.href = 'resources_sop.php'"
                        class="btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>

        <!-- ----------EFFECTIVE PM CHECKLIST------------- -->
        <div class="resource div-smr-full mb-5 bg-brown slideAnimUp">
            <div class="image">
                <img src="./images/what_we_provide.jpg" alt="EFFECTIVE PM CHECKLIST">
            </div>

            <div class="info p-5">
                <p class="sub-title text-center text-warning">EFFECTIVE PM CHECKLIST</p>
                <p class="description text-justify">
                    PM Checklists can be a great tool to standardize routine tasks that have to be run on a recurring
                    basis. In the same fashion, a preventive maintenance checklist can be used to streamline a variety
                    of preventive maintenance tasks.
                </p>
                <div class="text-center">
                    <button type="button" onclick="window.location.href = 'resources_pm_chklist.php'"
                        class="btn btn-warning">Learn More</button>
                </div>
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