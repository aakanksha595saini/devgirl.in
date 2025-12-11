<?php

include "assets/db_conn.php";

$achievement_set = mysqli_query($mysqli, "SELECT * FROM `certificates`");
// while($achievements =mysqli_fetch_array($achievement_set)) {
//     echo $achievements['title'];
    
// }
?>
<div class="mil-section mil-op-space-90">

    <div class="mil-bg-item" style="bottom: 0%; left: 25%; transform: rotate(-25deg)"></div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 mil-mb-60">

                <div class="mil-text-right-adapt">
                    <!-- <p class="mil-upper mil-mb-30">Certificates</p> -->
                    <h2 class="mil-up mil-mb-60">Achievements</h2>
                    <!-- <p>Extensive education in developing web pages using: HTML5, CSS3, JavaScript, Bootstrap.</p> -->
                    <p>"Turning Goals into Gold: Celebrating Milestones, Embracing Achievements."</p>
                </div>

            </div>
            <div class="col-xl-6">

                <div class="swiper-container mil-timeline-slider-2">
                    <div class="swiper-wrapper">
                        <!-- Gallery start -->
                        <?php while($achievements = mysqli_fetch_array($achievement_set)) {
                                  
                                   ?>
                        <div class="swiper-slide">
                            <div class="mil-icon-box mil-mb-60">
                               

                                <div class="mil-grid-item fil-gallery">
                                    <a href="#gallery" class="mil-portfolio-item mil-long-item mil-mb-60 mfp-gallery">
                                        <div class="mil-cover">
                                            <img src="#gallery" alt="cover">

                                        </div>
                                        <div class="mil-project-descr">
                                            <p class="mil-upper mil-accent mil-mb-15">Certificates and Badges</p>
                                            <!-- <h4 class="mil-up">White Mountains</h4> -->
                                        </div>
                                    </a>
                                       <!-- loop start -->
                                
                                    <div id="gallery" class="mfp-hide">
                                      
                                        <a href="<?php echo $achievements['img_path']; ?>"></a>
                                        <!-- <a href="assets/img/portfolio/3.jpg"></a>
                                        <a href="assets/img/portfolio/4.jpg"></a> -->
                                       
                                    </div>
                                  
                                </div>
                               
                                <!-- loop end  -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- <div class="swiper-slide">
                            <div class="mil-icon-box mil-mb-60">
                                <div class="mil-grid-item fil-gallery">
                                    <a href="#gallery-1" class="mil-portfolio-item mil-long-item mil-mb-60 mfp-gallery">
                                        <div class="mil-cover">
                                            <img src="assets/img/portfolio/2.jpg" alt="cover">
                                        </div>
                                        <div class="mil-project-descr">
                                            <p class="mil-upper mil-accent mil-mb-15">Gallery</p>
                                            <h4 class="mil-up">White Mountains</h4>
                                        </div>
                                    </a>
                                    <div id="gallery-1" class="mfp-hide">
                                        <a href="assets/img/portfolio/2.jpg"></a>
                                        <a href="assets/img/portfolio/3.jpg"></a>
                                        <a href="assets/img/portfolio/4.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Gallery End -->

                    </div>
                    <!-- pagination start -->

                    <div class="col-lg-6">

                        <div class="mil-timeline-nav-2">
                            <div class="mil-timeline-2-pagination mil-upper mil-mb-30"></div>
                            <div class="mil-slider-nav mil-mb-30">
                                <div class="mil-prev mil-timeline-2-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <div class="mil-next mil-timeline-2-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pagination end -->
                </div>
            </div>
        </div>

    </div>
</div>