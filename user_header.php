<?php
session_start();
if (!isset($_SESSION['loggedin'])  || !isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
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
</head>

<body>
<!-- Nav Start -->
    <nav class="navbars">
        <div class="content">
            <div class="logo">
                <a href="#">DriverLess</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="index.php#header">Home</a></li>
                <li><a href="car.php">Cars</a></li>
                <li><a href="index.php#About_US">About Us</a></li>
                <li><a href="technology.php">Technology</a></li>
                <li><a href="contact_us.php">Contact</a></li>

                <?php if ($page=="Dash") {
                    $active="active_nav";}
                ?>
                <?php
                if (isset($_SESSION['username'])) {
                    if($_SESSION['Role']==0){
                        echo'<li><a href="user_dashbord.php">Dashboard</a></li>';
                        echo'<li><a href="logout.php">Logout</a></li>';
                    }
                }
                ?>
                
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
