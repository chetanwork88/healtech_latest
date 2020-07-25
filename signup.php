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
    <title> Sign Up | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/signin.css">
</head>

<body class="sign-up-img">

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
                    <a class="nav-link text-warning" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    </nav>

    <!-- -------------------sign up-------------- -->


    <div class="sign-up sign-in div-signin-increase rounded shadow-lg my-5 slideLeft">
        <p class="title text-center text-white py-2 bg-primary">SIGN UP</p>
        <form action="" method="post" class="py-2 px-5">
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="email" minlength="5" maxlength="50" placeholder="* E-mail" name="email" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-lock fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="* Password" data-toggle="tooltip" minlength="8" maxlength="30"
                        title="Password should consists of atleast 8 and maximum 30 characters with combination of at least one uppercase letter,lowercase letter,number and one special character."
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,30}" name="password" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-lock fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="* Confirm Password" minlength="8" maxlength="30"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,30}" data-toggle="tooltip"
                        title="Enter the same password you entered above." name="cnfpassword" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-phone fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="text" minlength="10" maxlength="10" placeholder="* Contact Number"
                        pattern="([0-9]){10}" name="contact" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-briefcase fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="text" placeholder="* Organization name" minlength="2" maxlength="20"
                        pattern="([A-z]){2,20}" name="org_name" required>
                </div>
            </div>

            <!-- <div class="d-flex justify-content-between">
                    <div class="form-icon">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </div>
                    <div class="form-input">
                        <input type="text" placeholder="* Address" minlength="2" maxlength="100" name="address"
                            required>
                    </div>
                </div> -->
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-map-marked-alt fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="text" placeholder="* City" minlength="2" maxlength="20" pattern="([A-z]){2,20}"
                        name="city" required>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-between">
                    <div class="form-icon">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </div>
                    <div class="form-input">
                        <input type="text" placeholder="* State" minlength="2" maxlength="20" pattern="([A-z]){2,20}"
                            name="state" required>
                    </div>
                </div> -->

            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary">
                    <i class="fas fa-user-plus"></i> Sign up
                </button>
            </div>
            <hr>
            <div class="text-center mb-3">
                <a href="login.php">
                    <button type="button" class="btn btn-outline-success">
                        <i class="fas fa-user"></i> Log in
                    </button>
                </a>
            </div>

            <!-- <hr>

            <div class="d-flex justify-content-around mt-4 div-lg">
                <a target="_blank" href="#"><i class="fab fa-facebook-f fa-lg "></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter fa-lg "></i></a>
                <a target="_blank" href="#"><i class="fab fa-google fa-lg"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin-in fa-lg"></i></a>
            </div> -->
        </form>
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