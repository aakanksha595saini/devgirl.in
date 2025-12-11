<!DOCTYPE html>
<html lang="en-US">

<?php include "assets/components/head-links.php";?>

<body>

    
    <?php include "assets/components/navbar.php";?><!-- frame -->

    <!-- wrapper -->
    <div>
        <div class="mil-page">

            <div class="mil-bg-item" style="top: 3%; right: 15%; transform: rotate(-45deg)"></div>

            <div class="container">

                <div class="mil-top-banner" style="padding-top: 125px">
                    <h2 class="mil-up">Login</h2>
                </div>

                <div class="mil-contact">
                    <div class="row justify-content-between">
                        
                        <div class="col-lg-7">

                        <form action="assets/data/login.php" class="cform-two" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="mil-upper">Your email address <span class="mil-accent">*</span></label>
                                    <input type="email" class="mil-mb-30" name="email">
                                </div>
                                <div class="col-lg-12">
                                    <label class="mil-upper">Password <span class="mil-accent">*</span></label>
                                    <input type="password" class="mil-mb-30" name="password">
                                </div>

                               
                                <div class="col-lg-12 mil-text-row">
                                    
                                    <button type="submit" class="mil-button">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>

                    </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- wrapper end -->

    <?php include "assets/components/bottom-links.php";?><!-- bottom-links -->
</body>



</html>
