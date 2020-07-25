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
    <title> Blogs | Healtech Consultants</title>

    <!-- ----comman css files-- -->
    <?php
    readfile('comman_css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/blogs.css">
</head>

<body class="blogs">

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
                    <a class="nav-link" href="./pricing.php">Pricing</a>
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

    <!-- --------fetching blogs from database -->
    <?php      
        require "db_connect.php";
        if($db_connected == true)
        {
            $input = array();
            function truncateLongText ($string, $limit) {
                // return with no change if string is shorter than $limit
                $break=".";
                $pad=" ...";
                
                
                if(strlen($string) <= $limit)
                {
                    return $string;
                }

                // is $break present between $limit and the end of the string? 
                if ( false !== ($breakpoint = strpos($string, $break, $limit)) ) {
                    if($breakpoint < strlen($string) - 1) {
                        $string = substr($string, 0, $breakpoint) . $pad;
                    }
                }

                return $string;
            }
            
            $sql = "SELECT b.blog_id,b.blog_title,b.blog_body,b.sys_creation_date as creation_date,
                    g.first_name,g.last_name
                    FROM blog b ,users g  WHERE b.created_by = g.username order by blog_id desc";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) 
            {
        ?>
    <div class="blog-list">
        <?php   
                while($row = $result->fetch_assoc()) 
                {
        ?>
        <!-- ----display blogs in cards manner -->

        <div class="col-lg-5 bg-white blog-card my-5 p-3 text-center rounded shadow-lg slideUp">
            <p class="heading-xs font-weight-bold ">
                <?php echo nl2br($row["blog_title"]); ?></p>
            <br>
            <p class="text-justify">
                <?php
                                $output = null;
                                $output = truncateLongText($row["blog_body"],400);
                                echo nl2br($output);
                            ?>
            </p>

            <a href="blog_list.php?blog_id=<?php echo $row["blog_id"] ?>&blog_name =<?php echo $row["blog_title"] ?> ">
                <button type="button" class="btn btn-outline-primary " name="cont-read-submit-btn">
                    Continue Reading ...</button>
            </a>

            <footer class="blockquote-footer mt-2">
                <?php
                                echo $row["first_name"]." ".$row["last_name"]."  ( ".$row["creation_date"]." )";
                            ?>
            </footer>
        </div>
        <?php
                }
                ?>
    </div>
    <?php
            }
        }    
    ?>


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