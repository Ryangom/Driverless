<?php
include 'inc/header.php';
require 'inc/db.php';
include 'inc/fun.php';
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
<section class="Log_In">
    <div class="container_log" id="container">

        <div class="user signupBx">
            <div id="right" class="imgBx">
                <img src="./assets/img/Reg.jpg" width="50%">
            </div>

            <!-- SignUp Form -->
            <div id="b" class="formBx">
                <form action="reg.php" method="post" enctype="multipart/form-data">

                    <h2>Create an new account</h2>

<?php


if (isset($_REQUEST['btn_signup'])) {


  $name = validation($_REQUEST['reg_user_fullname']);
  $email = validation($_REQUEST['reg_useremail']);
  $username = validation($_REQUEST['reg_user_name']);
  $password = validation($_REQUEST['reg_user_password']);
  $dob = $_REQUEST['reg_dob'];
  $postal_address = validation($_REQUEST['reg_postal_address']);
  $post_code = validation($_REQUEST['reg_postal_code']);
  $name = mysqli_real_escape_string($conn,$name);
  $email = mysqli_real_escape_string($conn,$email);
  $password = mysqli_real_escape_string($conn,$password);
  $postal_address = mysqli_real_escape_string($conn,$postal_address);
  $post_code = mysqli_real_escape_string($conn,$post_code);
    if ($name =='' || $email=='' || $username=='' || $password=='' || $dob== '' || $postal_address=='' || $post_code=='') {

        echo"<div class='alert alert-danger'>Field cannot be empty.</div>";
    }
    else {
      $query = "SELECT * FROM  users_info  WHERE Username='$username' LIMIT 1";
      $result = mysqli_query($conn, $query);
      $row = mysqli_num_rows($result);
        if ($row == 1) {
          echo"<div class='alert alert-danger'>Username is already taken.</div>";
        } 
        
        else {
            $password = md5($password);

            $filename = $_FILES["profile_pic"]["name"];
            $tempname = $_FILES["profile_pic"]["tmp_name"];	
            $folder = "./assets/img/users_profile/".time().$filename;
            
            $query = "INSERT INTO `users_info` (FullName, Email, Username, Password, DOB, PostalAddress, PostalCode,profile_pic) VALUES ( '$name' ,'$email', '$username', '$password', '$dob', '$postal_address','$post_code','$folder')";
            $result = mysqli_query($conn, $query);
            move_uploaded_file($tempname, $folder);
            if ($result) {
              echo"<div class='alert alert-success'>Registration Succesful. Please <a href='login.php'>Login</a> now.</div>";
            }
            else {
              echo"<div class='alert alert-danger'>Register Failed please try again</div>";
            }
        }
    }
}
?>

                    <label>Enter your full name:</label>
                    <input type="text" name="reg_user_fullname">

                    <label>Enter a Email:</label>
                    <input type="email" name="reg_useremail">

                    <label>Enter a Username:</label>
                    <input type="text" name="reg_user_name">

                    <label>Enter a strong Password:</label>
                    <input type="password" value="" name="reg_user_password" placeholder="">

                    <label>Enter your Date of Birth:</label>
                    <input type="date" name="reg_dob">

                    <label>Upload your Profile Picture:</label>
                    <input type="file" required name="profile_pic">

                    <label>Postal Address:</label>
                    <input type="text" name="reg_postal_address">

                    <label>Postal Code:</label>
                    <input type="text" name="reg_postal_code">

                    <div class="g-recaptcha" data-sitekey="6LcHVqgaAAAAAGJMe1Vjyi4AU1HJ5lPjHxSzf-ou"></div>

                    <input type="submit" value="Sign Up" name="btn_signup">
                    <p class="signin"> Already have an account?
                        <a href="./login.php">Sign In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>




<?php
    include 'inc/footer.php';
?>