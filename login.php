<?php
include 'inc/header.php';
require 'inc/db.php';
include 'inc/fun.php';

?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
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
if (isset($_REQUEST['submit'])) {

    //validating if input fileds are empty.
    $username = validation($_POST['username']);
    $password = validation($_POST['password']);

    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);

    if (empty($username)) {
        echo"<div class='alert alert-danger'>Fieldes cannot be empty</div>"; //If empty the show error
    }
    elseif (empty($password)) {
        echo"<div class='alert alert-danger'>Fieldes cannot be empty</div>";
    }
          
    else {
        $password = md5($password); // making password md5

        $query = "SELECT * FROM `users_info` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn)); 

        //counting how many times user trying to log in 
        if(!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }
        // if button is pressed, increment counter
        if(isset($_POST['submit'])) {
            $_SESSION['counter']++;
        } 
        
        if ($_SESSION['counter'] ==3) {
            setcookie('logfail','false',time()+600);
            $_SESSION['counter'] = 0;
            }
        else{

            
            if (mysqli_num_rows($result) == 1) { 
                $row = mysqli_fetch_array($result);
                $_SESSION['id']       = $row['ID'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['fullname'] = $row['FullName'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['loggedin'] = true;
                $_SESSION['Role'] = $row['role'];
                
                    if($_SESSION['Role']==1){
                        header("Location: Admin_home.php");
                        unset( $_SESSION['counter']);
                    }
                    if($_SESSION['Role']==0){
                        header("Location: user_dashbord.php");
                        unset( $_SESSION['counter']);
                    }
            } 
                    else {
                        echo"<div class='alert alert-danger'>Username or Password is incorrect</div>";
                        
                    }
        }
    }
}
?>
                    <h2>Sign In</h2>
                    <label for="">Enter your Username:</label>
                    <input type="text" name="username">
                    <label for="">Enter your Password:</label>
                    <input type="password" name="password">
                    <div class="g-recaptcha" data-sitekey="6LcHVqgaAAAAAGJMe1Vjyi4AU1HJ5lPjHxSzf-ou"></div>
<?php
        if (isset($_COOKIE['logfail'])) {
            
            echo"<div class='alert alert-danger'>account lock for 10min</div>";
        }
        else{
            echo '<input type="submit" value="Login" name="submit">';
        }
?>
            
                    <p class="signup"> don't have an account?
                        <a href="./reg.php">Sign up</a>
                    </p>
                    <div class="pop">
                        <a href="./change_password.php" class="popupLink">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    include 'inc/footer.php';
?>