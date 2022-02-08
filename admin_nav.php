<?php
session_start();
if (!isset($_SESSION['loggedin'])  || !isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="./assets/css/Bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body id="page-top">
    <div id="wrapper " class="admin_main">
        <nav class="navbar admin_nav_side navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: rgb(69, 69, 69)">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">
                        <span>Driverless</span>
                    </div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar" style="margin-top: 27px">
                    <li class="nav-item">
                        <a class="nav-link d-xl-flex align-items-xl-center" href="index.php">
                            <i class="fa fa-home" style="font-size: 25.6px"></i>
                            <span >Back To Website</span>
                        </a>
                        <a class="nav-link d-xl-flex align-items-xl-center" href="Admin_home.php">
                            <i class="fa fa-user"></i>
                            <span >User Information</span>
                        </a>
                        <a class="nav-link d-xl-flex align-items-xl-center" href="change_banner.php">
                            <i class="fa fa-image"></i>
                            <span >Change Banner</span>
                        </a>
                        <a class="nav-link d-xl-flex align-items-xl-center" href="users_messages.php">
                            <i class="fa fa-envelope"></i>
                            <span >Users Messages</span>
                        </a>
                        <a class="nav-link d-xl-flex align-items-xl-center" href="Admin_newsLetter.php">
                            <i class="fa fa-newspaper-o"></i>
                            <span >News Letter</span>
                        </a>
                        <a class="nav-link d-xl-flex align-items-xl-center" href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <span >Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column admin_main" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid admin_top_nav">
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item mr-5">admin</li>
                        </ul>
                    </div>
                </nav>