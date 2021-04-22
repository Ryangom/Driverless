<?php
$page='home';
include 'inc/header.php';
include 'inc/db.php';
?>
<!-- Nav End -->
<!-- Header -->
<section id="header">
    <div class="header_containt">

        <img src="./assets/img/banner/banner.jpg" class="main_banner" alt="" srcset="">
        <div class="main_banner_con">
            <h1>
                <strong>We’re building the World’s Most Experienced Driver</strong>
            </h1>
            <p>
                We’re making it safe and easy to get around - without the need for
                anyone in the driver’s seat.
            </p>
            <form class="header_Search">
                <input class="form-control" type="text" placeholder="Search Your Cars" name="Search" />
                <i class="fa fa-search"></i>
            </form>
        </div>
        <a href="#Car">
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </a>
        
    </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
<!-- Car section -->
<section id="Car" data-aos="fade-right" data-aos-delay="90" data-aos-duration="1500">

    <div style="margin: 2% 0%">
        <h1 class="text-center Car_head">
            <br />The DriverLess <br><span>Our Cars</span><br /><br />
        </h1>
    </div>
    <div style="height: 100%; margin: 0% 2%">
        <div class="row flex-wrap">
            <div class="col-12 col-lg-12 col-xl-6 car_left hover">
                <a href="./car.php">
                    <div style="width: 100%; height: auto">
                        <img width="100%" src="assets/img/VW_NGW6_SpringSales_2021_Homepage_ACS.jpg" />
                        <h1 style="font-size: 3rem">
                            <br /><strong>2021 Atlas Cross Sport</strong><br /><span>The Bold Electric
                                SUV</span><br /><br />
                        </h1>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-xl-12 hover car_right">
                        <a href="./car.php">
                            <div class="d-flex" style="margin-bottom: 20px">
                                <div style="width: 50%; height: 50%">
                                    <img src="assets/img/car_img_1.jpg" width="100%" />
                                </div>
                                <h1 class="Left_col_car_head">
                                    <strong>
                                        Driverless ID.4</strong><br />
                                    The future is here<br />
                                </h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-12 hover car_right">
                        <a href="./car.php">
                            <div class="d-flex" style="margin-bottom: 20px">
                                <div style="width: 50%; height: 50%">
                                    <img src="assets/img/car_img_2.jpg" width="100%" />
                                </div>
                                <h1 class="Left_col_car_head">
                                    <strong>Apollo 2020</strong><br />
                                    The family sedan<br />
                                </h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-12 hover car_right">
                        <a href="./car.php">
                            <div class="d-flex" style="margin-bottom: 20px">
                                <div style="width: 50%; height: 50%">
                                    <img src="assets/img/car_img_3.jpg" width="100%" />
                                </div>
                                <h1 class="Left_col_car_head">
                                    <strong>2021 Atlas</strong><br />
                                    The electric sedan<br />
                                </h1>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <a href="./car.php" class="Car_Btn ">Learn More</a>
</section>
<!-- Car section End -->

<!-- countdown Start -->
<section class="count_down">
    <div class="count_content">
        <h1>THE EVENT</h1>
        <h2>COMING SOON</h2>
        <div class="countdown">00 : 00 : 00 : 00</div>
        <a class="contact_btn" href="#">Read More</a>
    </div>
</section>
<!-- countdown end -->

<!-- Our Tech -->
<section id="Our_tech" data-aos="fade-left" data-aos-delay="90" data-aos-duration="1500">
    <div class="container">
        <h1 class="text-center Our_tech_head">Our Technology</h1>
        <!--  image left  -->
        <div class="row">
            <div class="col-md-6">
                <img src="./assets/img/Our_tech_BG.jpg" alt="" class="w-100" />
            </div>
            <div class="col-md-6">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <h1 class="display-3">AI</h1>
                        <p class="lead our_tech_p">AI technologies power self-driving car systems. Developers of
                            self-driving cars use vast amounts of data from image recognition systems, along with
                            machine learning and neural networks, to build systems that can drive autonomously.<br><br>

                            The neural networks identify patterns in the data, which is fed to the machine learning
                            algorithms. That data includes images from cameras on self-driving cars from which the
                            neural network learns to identify traffic lights, trees, curbs, pedestrians, street signs
                            and other parts of any given driving environment.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Tech End-->

<!-- Media -->
<section class="media_section">
    <div class="text-center media_head">
        <p>Media Newsfeeds Links</p>
        <h1><strong>Learn More about Autonomous Cars</strong></h1>
    </div>
    <div class="media_content">
        <div class="container">
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="text-center box box_media">
                        <a href="https://www.tesla.com/">
                            <img src="./assets/img/media_1.jpg" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="text-center box box_media">
                        <a href="https://www.hyliion.com/">
                            <img src="./assets/img/media_3.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="text-center box">
                        <a href="https://www.lucidmotors.com/">
                            <img src="./assets/img/media_2.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Media End-->
<!-- About US -->
<section class="d-flex justify-content-center align-items-center" id="About_US" data-aos="fade-right"
    data-aos-delay="90" data-aos-duration="1500"
    style="background: url(&quot;assets/img/about_BG.jpg&quot;) bottom / cover no-repeat;height: 85vh;">
    <div class="text-center about_us_con">
        <h3>About US</h3>
        <h1 style="font-size: 60px;margin-top: 20px;margin-bottom: 20px;"><strong>Who We Are</strong></h1>
        <p class="text-left" style="font-size: 21px;margin-bottom: 50px;">
            Founded in 1948 in Newcastle, United Kingdom, Driverless opened its first U.K. storefront in Los Angeles,
            CA, in 1959. What began as a nimble operation with eight industrious associates would quickly grow to
            astounding heights.<br> <br>

            For nearly four decades Driverless has challenged to exceed government requirements – as the first automaker
            to meet the Clean Air Act standards in the 1970s, then demonstrating low-emissions vehicle technology that
            led the state of California to adopt new, more stringent emissions regulations.<br><br>

            Through it all, our goal never changed: create a safer, smarter world in which people experience the joy of
            mobility.</p>

        <a href="#" style="padding: 15px 20px;background: #2B95D3;color: rgb(255,255,255);">Learn More</a>
    </div>
</section>

<!--  features-->
<section class="features-boxed" data-aos="fade-left" data-aos-delay="90" data-aos-duration="1500">
    <div class="container">
        <div class="intro">
            <p class="text-center">WHAT WE DO</p>
            <h1 class="text-center">Services Our Cars Offer</h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="text-left box"><i class="fas fa-code-branch icon"></i>
                    <h3 class="name">Navigate on Autopilot</h3>
                    <p class="description">Active guidance from highway on-ramp to off-ramp</p><a class="learn-more"
                        href="#">Learn more »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="text-left box"><i class="fas fa-solar-panel icon"></i>
                    <h3 class="name">Green Energy </h3>
                    <p class="description">Our car fully electric and it use EV batteries. So it never generate any
                        harmful exhaust. Better for our air and reduce air pollution. EVs are also quieter than
                        petrol/diesel cars, which means less noise pollution.</p><a class="learn-more" href="#">Learn
                        more »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="text-left box"><i class="fas fa-mobile-alt icon"></i>
                    <h3 class="name">Fully Remote Control </h3>
                    <p class="description">Our cars are fully remote controlable. Owners can easily control their cars
                        by their mobile phone.</p><a class="learn-more" href="#">Learn more »</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  features End-->

<!-- News Letter -->
<section class="newsletter-subscribe" id="Subscrib-news">
    <div class="container">
        <div class="intro">
            <h1 class="text-center">Subscribe our Newsletter</h1>
            <p class="text-center">Subscribe to our newsletter to receive the latest news and new offers first.</p>
            <?php
            if (isset($_POST['submit'])) {
                $email=$_POST['email'];
                $query = "INSERT INTO `news_letter` (email) VALUES ( '$email')";
                $result = mysqli_query($conn, $query);

                if ($result==1) {
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Subscribe Successful.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
            }
        ?>
        </div>
        <form class="form-inline" method="post" action="index.php#Subscrib-news">
        
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="submit" type="submit">Subscribe </button>
            </div>
        </form>
    </div>
</section>
<!-- News Letter End-->
<script src="./assets/js/count.js"></script>

<?php
    include 'inc/footer.php';
?>