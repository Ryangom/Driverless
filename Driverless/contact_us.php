<?php
include 'inc/header.php';
include 'inc/db.php';
?>

<section class="contact_main">
    <div class="container modern-form">
        <div class="text-center ">
            <h1 class="contact_head">Contact Us</h1>
        </div>
        <hr class="modern-form__hr" />
        <div class="modern-form__form-container">
            <form action="" method="POST">
                <?php
if(isset($_POST['submit'])){
    $_SESSION["message"]=$_POST['messages'];
    header("Location: faq.php");
}
?>
                <div class="form-row">
                    <div class="col col-contact">
                        <div class="form-group modern-form__form-group--padding-r">
                            <input disabled class="form-control input input-tr conatct_field" type="text"
                                placeholder="First Name" value="<?php echo $_SESSION['fullname']?>" />
                            <div class=" line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-contact">
                        <div class="form-group modern-form__form-group--padding-l">
                            <input disabled class="form-control input input-tr conatct_field" type="text"
                                placeholder="Email" value="<?php echo $_SESSION['email']?>" />
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group modern-form__form-group--padding-t">
                            <textarea class="form-control input conatct_field modern-form__form-control--textarea"
                                placeholder="Message" name="messages" required></textarea>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col text-center">
                        <button class="btn btn-primary submit-now" name="submit" type="submit">
                            Submit Now
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
        
    </div>
    <div>
    <svg class="arrows contact_arrow">
            <path class="a1" d="M0 0 L30 32 L60 0"></path>
            <path class="a2" d="M0 20 L30 52 L60 20"></path>
            <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
    </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
<section>

    <div class="Contact_map">
        <h1>More Information</h1>

        <div class="row contact__">
            <div class="col-8">
                <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Neville%20St,%20Newcastle%20upon%20Tyne%20NE1%205DL,%20United%20Kingdom+(Driverless)&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        width="100%" height="600" frameborder="0"></iframe>
                </div>
            </div>
            <div class="col-4">
                <div class="main_contact">
                    <div class="contact_infor">
                        <i class="fas fa-home mr-3"></i>
                        <h3>Address</h3>
                        <p>Newcastle upon 5DL, UK</p>
                    </div>
                    <div class="contact_infor">
                        <i class="fas fa-envelope mr-3"></i>
                        <h3>Email</h3>
                        <p>info.driverless@gmail.com</p>
                    </div>
                    <div class="contact_infor">
                        <i class="fas fa-phone mr-3"></i>
                        <h3>Phone</h3>
                        <p>+01 000 481 898</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
    include 'inc/footer.php';
?>