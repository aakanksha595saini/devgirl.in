<?php

include "assets/db_conn.php";

$skill_set = mysqli_query($mysqli, "SELECT * FROM `testing_skills`");
 ?>

<div class="mil-section mil-op-space-90">

            <div class="mil-bg-item" style="bottom: 15%; left: 7%;"></div>
            <div class="mil-bg-item mil-bg-item-large" style="top: -15%; right: 25%; transform: rotate(-35deg)"></div>

            <div class="container">
                <div>
                    <p class="mil-upper mil-mb-30">“From Bugs to Brilliance: A Tester’s Journey” <span class="mil-accent">work</span></p>
                    <h2 class="mil-up mil-mb-60">Testing Skills</h2>
                </div>
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-10">

                        <div class="row">
                        <?php while($skill_res = mysqli_fetch_array($skill_set)){?>
                            <div class="col-xl-6 mil-mb-10">                          

                                <div class="mil-text-row">
                                    <div class="mil-icon">
                                        <div class="mil-text-icon no-textured"><i class="<?php echo $skill_res['icon']; ?>"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper"><?php echo $skill_res['tittle']; ?></span>
                                        <!-- <div class="mil-progress-track">
                                            <div class="mil-progress" style="width:<?php echo $skill_res['skill_range']; ?>">
                                                <span class="mil-upper mil-upper-sm mil-accent"><?php echo $skill_res['skill_range']; ?></span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                               

                            </div>
                            <?php }?>
                            <!-- <div class="col-xl-6 mil-mb-40">

                                <div class="mil-text-row">
                                    <div class="mil-icon-box">
                                        <div class="mil-text-icon no-textured"><i class="fab fa-css3"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper">CSS</span>
                                        <div class="mil-progress-track">
                                            <div class="mil-progress" style="width: 80%">
                                                <span class="mil-upper mil-upper-sm mil-accent">80%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 mil-mb-40">

                                <div class="mil-text-row">
                                    <div class="mil-icon-box">
                                        <div class="mil-text-icon no-textured"><i class="fa-brands fa-node-js"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper">JavaScript</span>
                                        <div class="mil-progress-track">
                                            <div class="mil-progress" style="width: 75%">
                                                <span class="mil-upper mil-upper-sm mil-accent">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 mil-mb-40">

                                <div class="mil-text-row">
                                    <div class="mil-icon-box">
                                        <div class="mil-text-icon no-textured"><i class="fa-brands fa-php"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper">PHP /Laravel</span>
                                        <div class="mil-progress-track">
                                            <div class="mil-progress" style="width: 75%">
                                                <span class="mil-upper mil-upper-sm mil-accent">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 mil-mb-40">

                                <div class="mil-text-row">
                                    <div class="mil-icon-box">
                                        <div class="mil-text-icon no-textured"><i class="fa-brands fa-python"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper">Python</span>
                                        <div class="mil-progress-track">
                                            <div class="mil-progress" style="width: 90%">
                                                <span class="mil-upper mil-upper-sm mil-accent">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <!-- <div class="col-xl-6">

                                <div class="mil-text-row">
                                    <div class="mil-icon-box">
                                        <div class="mil-text-icon no-textured"><i class="fa-solid fa-vial-virus"></i></div>
                                    </div>
                                    <div class="mil-progress-inline">
                                        <span class="mil-upper">Selenium</span>
                                        <div class="mil-progress-track">
                                            <div class="mil-progress" style="width: 55%">
                                                <span class="mil-upper mil-upper-sm mil-accent">55%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                        </div>

                    </div>
                </div>
            </div>

        </div>