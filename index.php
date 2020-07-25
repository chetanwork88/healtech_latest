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
    <title> Home | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
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
                    <a class="nav-link text-warning" href="./index.php">Home</a>
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
                    <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    </nav>

    <!-- home image -->
    <div class="home-img expandOpen bg-brown">
        <img src="./images/home_img.jpg" alt="Home Image">
    </div>

    <!-- home heading -->
    <div class="home-heading bg-warning p-5">
        <div class="slideAnimFadeIn">
            <div class="heading text-center">
                INTRODUCING HEALTECH CONSULTANTS
            </div>

            <div class="description text-justify div-lg-full">
                We’re Healtech Consultants, and we can’t wait to start working together. Your vision is important to us.
                We’re eager to map out the needs of your business, and provide the necessary tools to achieve a
                successful
                future. Since 2020, clients have turned to us a professional Engineering Consulting Agency that’s ready
                to
                deliver tailored solutions on time.
            </div>
        </div>
    </div>

    <!-- home intro -->
    <div class="home-intro who-are-we bg-black wrap-reverse">
        <div class=" image div-md-full">
            <img src="./images/who_are_we.jpg" alt="Who Are We">
        </div>
        <div class="text div-md-full text-center my-auto px-5 slideAnimLeft">
            <div class="title text-warning">WHO ARE WE</div>
            <div class="description text-justify ">
                We Healtech Consultants founded in 2020 are here to help you and making you self-sufficient to make
                your plant efficient, to make your machine productive and to make you feel relax in daily
                maintenance.<br>
                Our services help will help your plant run on full efficiency with elimination from repeatative
                breakdowns and poor plannings resulting to poor maintenance strategies. Our approach of constantly
                improving operation and maintaining plant machine and utilities by optimizing various corrective
                action tools that helped each of you to save thousands of hours.<br>
                Connect with Us and Save your time.
            </div>
            <button type="button" onclick="window.location.href = 'about.php#who-are-we'"
                class="btn btn-outline-warning">Know More</button>
        </div>
    </div>

    <div class="home-intro what-we-provide wrap bg-brown">
        <div class="text div-md-full text-center my-auto px-5 slideAnimRight">
            <div class="title text-warning">WHAT WE PROVIDE</div>
            <div class="description text-justify text-light ">
                We provide the analysis of data on which you can make an effective decision for making your better
                maintenance activities. We analyses your machine, studied on your problems & provide you effective
                Preventive Maintenance schedule, PM Checklist for each of your machines.<br>
                We also give you the root cause behind your breakdowns, for that we use various corrective action
                tools like Why-Why Analysis, Ishikawa Diagrams and many more.<br>
                In addition to this there is value added service we provide is that Asset management system. In this
                we will do On-site Asset Codification for your better control on Equipment, machines and Breakdowns.
            </div>
            <button type="button" onclick="window.location.href = 'about.php#what-we-provide'"
                class="btn btn-outline-warning">Know More</button>
        </div>
        <div class="image div-md-full">
            <img src="./images/what_we_provide.jpg" alt="What We Provide">
        </div>
    </div>

    <!-- Reach at us -->
    <div class="reach-at-us wrap slideAnimUp">
        <div class="contact-us my-auto div-md-full text-center">
            <div class="title text-warning">REACH AT US</div>
            <div class="description text-light">
                Pune, Maharashtra, India<br>
                info@healtechconsultants.com<br>
                88620 54384<br>
                <br>
                <div class="d-flex justify-content-center social-icons text-light">
                    <a target="_blank" href="#"><i class="fab text-primary fa-facebook-f fa-lg "></i></a>
                    <a target="_blank" href="#"><i class="fab text-info fa-twitter fa-lg "></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/healtech-consultants-1632311b2"><i
                            class="fab text-primary fa-linkedin-in fa-lg"></i></a>
                </div>
            </div>
        </div>

        <div class="feedback-form div-md-full bg-brown">
            <div class="title text-warning text-center">WRITE US</div>
            <form class="text-light" action="index_db.php" method="post">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="* Name" name="name" minlength="2"
                        maxlength="50" pattern="([A-z]){2,50}" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="* Email" name="email" minlength="5"
                        maxlength="50" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="* Contact Number" name="contact" minlength="10"
                        maxlength="10" pattern="([0-9]){10}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="* Subject" name="subject" minlength="2"
                        maxlength="100" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" rows="3" placeholder="* Type your message here ..."
                        name="feedback" minlength="2" maxlength="1000" required></textarea>
                </div>
                <button type="submit" class="btn btn-light form-control border-radius-0">Submit
                    Feedback</button>
            </form>
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