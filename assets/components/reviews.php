<?php

include "assets/db_conn.php";

$query_reviews = mysqli_query($mysqli, "SELECT * FROM `feedback`");

if ($query_reviews != "") {

    ?>

    <div class="mil-section mil-op-space-90">

        <div class="mil-bg-item" style="bottom: -5%; right: 0; transform: rotate(-25deg)"></div>

        <div class="container">
            <div class="mil-text-center-adapt">
                <p class="mil-upper mil-mb-30">Result of my <span class="mil-accent">Work</span></p>
                <h2 class="mil-up mil-mb-60">Testimonials</h2>
                <!--<p class="mil-mb-60">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>-->
            </div>

            <div class="mil-divider"></div>

            <div class="row">
                <div class="col-xl-8">

                    <div class="swiper-container mil-reviews-slider">
                        <div class="swiper-wrapper">
                            <?php while ($res_reviews = mysqli_fetch_array($query_reviews)) { ?>
                                <div class="swiper-slide">

                                    <div class="row">

                                        <div class="col-lg-3">

                                            <div class="mil-client">
                                                <img src="<?php echo $res_reviews['photo']; ?>" alt="client">
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-7">
                                            <p class="mil-mb-30">
                                                <?php echo $res_reviews['message']; ?>
                                            </p>
                                            <p class="mil-upper mil-text-lg mil-mb-15">
                                                <?php echo $res_reviews['name']; ?>
                                            </p>
                                            <p class="mil-mb-30">
                                                <?php echo $res_reviews['job_role']; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">

                    <div class="mil-reviews-nav">
                        <div class="mil-slider-nav mil-mb-30">
                            <div class="mil-prev mil-reviews-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                            <div class="mil-next mil-reviews-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="mil-reviews-pagination mil-upper mil-mb-30"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php } ?>