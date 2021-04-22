<?php
include 'inc/header.php';
require 'inc/db.php';
include 'inc/fun.php';
?>
<section class="Log_In">
    <div class="container_log" id="container">
        <div class="user signBx">
            <div class="imgBx">
                <img src="./assets/img/LogInLeft.jpg" width="50%">
            </div>
            <!-- LogIn Form -->
            <div class="formBx abbb">



                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <?php
if (isset($_REQUEST['reset'])) {
    $username = validation($_REQUEST['username']);
    $newPassword = validation($_REQUEST['newPassword']);
    $reNewPassword = validation($_REQUEST['reNewPassword']);


    if ($username==""||$newPassword==""||$reNewPassword=="") {
        echo"<div class='alert alert-danger'>Fields are empty.</div>";
    }
    else{

        $query = "SELECT * FROM  users_info  WHERE Username='$username' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);

        if($row==1){
            if($newPassword==$reNewPassword){
                $reNewPassword=md5($reNewPassword);
                $query ="UPDATE `users_info` SET Password ='$reNewPassword' WHERE Username='$username' LIMIT 1";
                mysqli_query($conn, $query);
                echo"<div class='alert alert-success'>Password Reset Sucssesfully.</div>";
                
                header("Location:login.php" );
                
            }
            else{
                echo"<div class='alert alert-danger'>Password not match.</div>";
            }
        }
        else{
            echo"<div class='alert alert-danger'>User not found.</div>";
        }
        
        

    }
}
?>
                    <h2>Forgot Password</h2>

                    <label for="">Enter your Username:</label>
                    <input type="text" value="<?php if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }?>" name="username">

                    <label for="">Enter a New Password:</label>
                    <input type="text" name="newPassword">

                    <label for="">Re-Enter the new Password:</label>
                    <input type="password" name="reNewPassword">

                    <input type="submit" value="Reset Password" name="reset">

                    <p class="signup">
                        <a href="./login.php">Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

                </body>
                </html>