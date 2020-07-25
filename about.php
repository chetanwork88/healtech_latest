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
    <title> About Us | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/about.css">
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
                    <a class="nav-link text-warning" href="./about.php">About</a>
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
                    <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- -----who are we ---- -->
    <div class="about-us py-5">
        <div class="who-are-we div-xl-full bg-brown py-5 wrap text-center slideRight">
            <div class="who-are-we-heading div-xs-full my-auto">
                <div class="heading text-warning">WHO ARE WE</div>
            </div>
            <div class="div-lg-full">
                <div class="description text-light px-5 text-justify">
                    Hey, …!<br>
                    Are you an Engineer? Are you an Industrialist? Are You running plant? Are you doing Maintenance?
                    Hope your industry is making a good profit...! But have you ever noticed your plant maintenance
                    activities?<br>
                    You must be taking care of your machines, but still breakdowns are coming repeatedly.
                    You must be following good SOP, but still productions break repeatedly.<br>
                    Ask yourself, why this is happening?<br>
                    Why your plant can’t run on full efficiency?<br>
                    Why your team fails to achieve the targets?<br>
                    Why Breakdowns coming day by day?<br>
                    We tell you the reason. It must be Poor planning? It must be poor maintenance strategies? It must be
                    Poor communication.So, We Healtech Consultants are here to help you and making you self-sufficient
                    to make your plant
                    efficient, to make your machine productive and to make you feel relax in daily maintenance.<br>
                    Our approach of constantly improving operation and maintaining plant machine and utilities by
                    optimizing various corrective action tools that helped each of you to save thousands of hours.<br>
                    Connect with Us and Save your time.<br>
                    Take our help and Save your cost.<br>
                    Thank you…!
                </div>
                <button type="button" onclick="window.location.href = 'about.php#contact-us'"
                    class="btn btn-outline-warning">Get In Touch</button>
            </div>
        </div>

        <div class="what-we-provide div-xl-full bg-black wrap-reverse py-5 text-center mt-5 slideAnimLeft">
            <div class="what-we-provide-heading div-xs-full my-auto">
                <div class="heading text-warning">WHAT WE PROVIDE</div>
            </div>
            <div class="div-lg-full">
                <div class="description text-light px-5 text-justify">
                    Hello…!<br>
                    We are Healtech Consultants from day one, we realized we have the potential to make a real
                    difference.<br>
                    Let’s catch our services we provide.<br>
                    Just think.<br>
                    What are breakdowns?<br>
                    When it is coming?<br>
                    How it is coming?<br>
                    How many times it is coming?<br>
                    Do you have a that calculated data which your machine is facing?<br>
                    No?<br>
                    So, we provide you the Same.We provide the analysis of data on which you can make an effective
                    decision for making your better
                    maintenance activities.Still if you could not make some decision about what to do or how to do.We
                    will help you.<br>
                    We will also provide you Preventive Maintenance schedule, PM Checklist for each of your machines.
                    We have experts, who analyses your machine, studied on your problems and make effective PM checklist
                    for you.<br>
                    We also give you the root cause behind your breakdowns, for identifying that root cause we use
                    various corrective action tools.We will also be trained you to use these tools like Why-Why
                    Analysis, Ishikawa Diagrams and many more.<br>
                    In addition to this there is value added service we provide is that Asset management system. In this
                    we will do On-site Asset Codification for your better control on Equipment, machines and Breakdowns.
                    For detailed information about the same visit our websites thoroughly.<br>
                    Stay Connected with us and be systematic with your working.
                </div>
                <button type="button" onclick="window.location.href = 'about.php#contact-us'"
                    class="btn btn-outline-warning">Get In Touch</button>
            </div>
        </div>

    </div>

    <!-- -------- contact us ---------- -->
    <div class="contact-us bg-warning text-light p-5 text-center" id="contact-us">
        <div class="slideAnimFadeIn">
            <div class="heading">CONTACT US</div>
            <div class="sub-title font-weight-bold text-dark">
                Pune, Maharashtra, India<br>
                info@healtechconsultants.com<br>
                88620 54384
                <div class="description d-flex justify-content-center social-icons text-light">
                    <a target="_blank" href="#"><i class="fab text-primary fa-facebook-f fa-2x "></i></a>
                    <a target="_blank" href="#"><i class="fab text-info fa-twitter fa-2x "></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/healtech-consultants-1632311b2"><i
                            class="fab text-primary fa-linkedin-in fa-2x"></i></a>
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