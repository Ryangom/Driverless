<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Driverless</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Nav Start -->
    <nav class="navbars">
        <div class="content">
            <div class="logo">
                <a href="./index.php">DriverLess</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>

                <li><a class="<?php if ($page=='home') {echo " active_nav";}?>" href="./index.php#header">Home</a></li>
                <li><a class="<?php if ($page=='car') {echo " active_nav";}?>" href="./car.php">Cars</a></li>
                <li><a href="./index.php#About_US">About Us</a></li>
                <li><a class="<?php if ($page=='tech') {echo " active_nav";}?>" href="./technology.php">Technology</a>
                </li>

                <?php
                if (isset($_SESSION['username'])) {
                    
                    
                    if($_SESSION['Role']==1){
                        echo'<li><a href="contact_us.php">Contact</a></li>';
                        echo'<li><a href="Admin_home.php">admin</a></li>';
                        echo'<li><a href="logout.php">Logout</a></li>';
                    }else{
                        echo'<li><a href="contact_us.php">Contact</a></li>';
                        echo'<li><a href="user_dashbord.php">Dashboaard</a></li>';
                        echo'<li><a href="logout.php">Logout</a></li>';
                    }
                }else{
                    echo'<li><a href="login.php">Login</a></li>';
                }
                ?>

            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>