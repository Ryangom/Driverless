<?php
    $page='car';
    include 'inc/header.php';
?>
    <section id="Car_page">
        <div class="Car_page_Head" >
            <h1 >Driverless ID.4</h1>
            <p >The first driverless electric car for everyone.</p>
        </div>
        <div class="Down_arrow" >
            <a href="#Car_info">
                <svg class="arrows car_arrow">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </a>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <section id="Car_info" >
        <div class="row">
            <div class="col-xl-7">
                <div class="Car_info_img" >
                    <img src="./assets/img/Car_Page/Car_info.jpg" >
                </div>
            </div>
            <div class="col">
                <div class="d-flex Car_info_right" >
                    <ul class="list-group Car_info_right_ul">
                        <li class="list-group-item">
                            <h3>Range</h3>
                            <span>390 mi(est.)</span>
                        </li>
                        <li class="list-group-item">
                            <h3>Peak Power</h3>
                            <span>1,000 hp</span>
                        </li>
                        <li class="list-group-item">
                            <h3>Wheels</h3>
                            <span>19" or 21"</span>
                        </li>
                        <li class="list-group-item">
                            <h3>Cargo</h3>
                            <span>28 cu ft</span>
                        </li>
                    </ul>
                    <ul class="list-group Car_info_right_ul">
                        <li class="list-group-item" >
                            <h3>Acceleration</h3>
                            <span>1.99s&nbsp; 0-70mph*</span>
                        </li>
                        <li class="list-group-item">
                            <h3>Range</h3>
                            <span>200 mph</span>
                        </li>
                        <li class="list-group-item">
                            <h3>Weight</h3>
                            <span>4,300 lbs</span>
                        </li>
                        <li class="list-group-item" >
                            <h3>Powertrain</h3>
                            <span>Motor</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="Car_order" >
        <div class="Car_order_BG">
            <div class="d-flex justify-content-around car_overlay">
                <div class="car_overlay_info">
                    <h2 >1000 hp</h2>
                    <p >Peak Power</p>
                </div>
                <div class="car_overlay_info">
                    <h2 >8.45s</h2>
                    <p>155 mph 1.5 mile</p>
                </div>
                <div class="car_overlay_info">
                    <h2 >3.5s</h2>
                    <p>0-80 mph</p>
                </div>
            </div>
        </div>
        <div class="Car_order_more">
            <div class="row">
                <div class="col-xl-4 d-xl-flex justify-content-xl-center align-items-xl-center">
                    <a class="Order_Btn" href="#">Order Now</a>
                </div>
                <div class="col">
                    <p style="font-size: 27px;width: 80%;">With the longest range and quickest acceleration of any electric vehicle in production, Model S Plaid is the highest performing sedan ever built. Both Long Range and Plaid powertrains, with updated battery architecture, are capable of back-to-back, consistent 1/4 mile runs.<br></p>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'inc/footer.php';
?>