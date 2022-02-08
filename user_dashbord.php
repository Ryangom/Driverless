<?php
$page="dash";
require 'inc/db.php';
include 'inc/fun.php';
include 'user_header.php';
?>
<?php

    $username = $_SESSION['username'];
    $query  = "SELECT * FROM `users_info` WHERE username='$username' LIMIT 1";
    $user   = mysqli_query($conn, $query);
    $row    = mysqli_fetch_array($user);
    
?>
<body id="page-top">
    <div class="user_desh_head">
        <h1 class="text-center">Welcome to Dashboard ,
            <?php echo $_SESSION['username'];?>
        </h1>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <div class="container user_deshboard">
        <div id="wrapper">
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <div class="container-fluid">
                        <h3 class="text-dark mb-4">Profile</h3>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                    <?php
                                        $sql = "select * from users_info where username='$username'";
                                        $result = mysqli_query($conn,$sql);
                                        $row = mysqli_fetch_array($result);
                                        $image = $row['profile_pic'];
                                    ?>
                                        <img class="rounded-circle avater mb-3 mt-4" src='<?php 
                                        if ($image) {
                                            echo $image;
                                        }
                                        else{
                                            echo'./assets\img\users_profile\user_avater.jpg';
                                        }
                                        ?>'>
                                        <p>
                                            <?php echo $row['FullName'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 font-weight-bold">User Informations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table_sec">
                                            <div class="table-responsive">
                                                <form action="" method="POST">
                                                    <?php
    
    if (isset($_POST['update'])) {
        $id = $_SESSION['id'];
        $name = mysqli_real_escape_string($conn, validation($_POST['Update_fullname']));
        $email  = mysqli_real_escape_string($conn, validation($_POST['Update_email']));
        $dob= mysqli_real_escape_string($conn, validation($_POST['Update_dob']));
        $postalAddress = mysqli_real_escape_string($conn, validation($_POST['Update_postaladd']));
        $postalCode = mysqli_real_escape_string($conn, validation($_POST['Update_postalcode']));
        $query ="UPDATE `users_info` SET FullName='$name',DOB='$dob',Email='$email',PostalAddress='$postalAddress', PostalCode='$postalCode' WHERE id='$id' LIMIT 1";
        $user = mysqli_query($conn, $query);

        if($user) {
           echo'<div class="alert alert-success">User information successfully Updated</div>';
        //    array_push($sucsses,"User Updated");
           header('Refresh: 1',"Location:user_dashbord.php");
        } else {
            echo'<div class="alert alert-danger">User Updated</div>';
        }
    }
?>
                                                    <div class="form-group user_form">
                                                        <label for="exampleInputEmail1">Full Name</label>
                                                        <input type="text" name="Update_fullname" class="form-control"
                                                            value="<?php echo $row['FullName'];?>">
                                                    </div>
                                                    <div class="form-group user_form">
                                                        <label for="exampleInputPassword1">Email Address</label>
                                                        <input type="email" name="Update_email" class="form-control"
                                                            value="<?php echo $row['Email'];?>">
                                                    </div>
                                                    <div class="form-group user_form">
                                                        <label for="exampleInputPassword1">Date of Birth</label>
                                                        <input type="text" name="Update_dob" class="form-control"
                                                            value="<?php echo $row['DOB'];?>">
                                                    </div>
                                                    <div class="form-group user_form">
                                                        <label for="exampleInputPassword1">Postal Address</label>
                                                        <input type="text" name="Update_postaladd" class="form-control"
                                                            value="<?php echo $row['PostalAddress'];?>">
                                                    </div>
                                                    <div class="form-group user_form">
                                                        <label for="exampleInputPassword1">Postal Code</label>
                                                        <input type="text" name="Update_postalcode" class="form-control"
                                                            value="<?php echo $row['PostalCode'] ?>">
                                                    </div>
                                                    <!-- <div class="text-right" style="width: 100%;"> -->
                                                    <button class="btn btn-primary user_desh_btn" name="update"
                                                        type="submit">Update</button>
                                                    <a href="./change_password.php"
                                                        class="btn btn-primary user_desh_btn" name="ok">Change
                                                        Password</a>
                                                    <!-- </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
include 'inc/footer.php';
?>