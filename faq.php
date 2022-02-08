<?php
include 'inc/db.php';
include 'inc/header.php';
?>
<section id="faq">
  <div class="accordion_bk">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-9 mx-auto text-white text-center">
          <h1 class="display-4">New Owner Frequently Asked Questions</h1>
<?php
$name= $_SESSION["fullname"];
$email=$_SESSION["email"];
$mess=$_SESSION["message"];
if (isset($_POST['finalsubmit'])) {
  $query = "INSERT INTO `user_messages` (full_name, email, message) VALUES ( '$name' ,'$email', '$mess')";
            $result = mysqli_query($conn, $query);
            echo '<div class="alert alert-success">Message Sent</div>';
            header("Refresh:1");
} 
?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <!-- Accordion -->
          <div id="accordionExample" class="accordion shadow">
            <div class="card card_faq_a">
              <div id="headingOne" class="faq-card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne"
                    class="d-block position-relative text-white text-uppercase collapsible-link py-2">Where can I find
                    Warranty information for my Car?</a></h6>
              </div>
              <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                class="collapse collaps show">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0 card_p">To locate limited warranty information for your vehicle,
                    please
                    refer
                    to your Warranty and Maintenance booklet found in your Owner’s Manual. If you do not have an
                    Owner’s
                    Manual for your vehicle, you can order one at http://literature.vw.com/welcome.asp or by calling
                    our
                    toll-free number at 1-800-544-8021. </p>
                </div>
              </div>
            </div>
            <div class="card card_faq_a">
              <div id="headingtwo" class="faq-card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapsetwo"
                    aria-expanded="false" aria-controls="collapseOne"
                    class="d-block position-relative text-white text-uppercase collapsible-link py-2">
                    Why do my brakes make a squealing noise sometimes when it’s cold?</a></h6>
              </div>
              <div id="collapsetwo" aria-labelledby="headingOne" data-parent="#accordionExample"
                class="collapse collaps ">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0 card_p">If your car has been sitting for a while, if it is wet, or
                    even
                    cold
                    outside, the brakes can oxidize and rust may form. So when the brakes are used for the first time,
                    they may make a squealing noise. After a few stops, the rust will essentially wear off and the
                    noise
                    will disappear as well. If brake noise continues, please visit your local VW dealer.</p>
                </div>
              </div>
            </div>
            
            <div class="card card_faq_a">
              <div id="headingthree" class="faq-card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapseOne"
                    class="d-block position-relative text-white text-uppercase collapsible-link py-2">
                    How does Automatic Emergency Braking work?</a></h6>
              </div>
              <div id="collapsethree" aria-labelledby="headingOne" data-parent="#accordionExample"
                class="collapse collaps ">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0 card_p">If your car is equipped with Autopilot hardware, Automatic
                    Emergency
                    Braking automatically applies full braking in situations where a collision is considered imminent
                    by
                    the forward-looking camera and the radar sensor.

                    To cancel Automatic Emergency Braking while it is engaged, press on either the accelerator or the
                    brake pedal. It is your responsibility to drive safely and remain in control of your Tesla at all
                    times.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="card card_faq_a">
              <div id="headingfour" class="faq-card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapseOne"
                    class="d-block position-relative text-white text-uppercase collapsible-link py-2">
                    How do I operate the charge port?</a></h6>
              </div>
              <div id="collapsefour" aria-labelledby="headingOne" data-parent="#accordionExample"
                class="collapse collaps ">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0 card_p">Push the button on the Tesla charging connector to open your
                    charge
                    port. You can also open the charge port from the car’s touchscreen or by pressing on the port
                    cover
                    when your car is unlocked. White color indicator means your car is ready for charging. After
                    plugging in, a blue color indicator means your car is preparing to charge. When the indicator
                    turns
                    green, charging is in-progress.</p>
                </div>
              </div>
            </div>
            
            <div class="card card_faq_a">
              <div id="headingfive" class="faq-card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapsefive"
                    aria-expanded="true" aria-controls="collapseOne"
                    class="d-block position-relative text-white text-uppercase collapsible-link py-2">How do I turn my
                    car on and off?
                  </a></h6>
              </div>
              <div id="collapsefive" aria-labelledby="headingOne" data-parent="#accordionExample"
                class="collapse collaps ">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0 card_p">You can start your Tesla by pressing on the brake pedal and
                    putting into gear. In Model 3, if you
                    are not using your phone key, place your key card on the console and put the car into gear.
                    You can turn off your Tesla by putting the car in park, exiting the car and closing the door
                    behind
                    you, or on your touchscreen through Controls > Safety & Security > Power Off.</p>
                </div>
              </div>
            </div>
            <div class="btn_faq">
              <form action="" method="POST">
              <input type="submit" name="finalsubmit" value="Final Submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'inc/footer.php';
?>