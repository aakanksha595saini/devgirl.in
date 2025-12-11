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
                    <h2 class="mil-up">Contact Me</h2>
                </div>

                <div class="mil-contact">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">

                            

                            <div class="mil-contact-card mil-mb-30">
                                <p class="mil-upper mil-mb-30">Email</p>
                                <p>
                                    <a href="mailto:aakanksha.saini595@gmail.com">aakanksha.saini595@gmail.com</a><br>
                                </p>
                            </div>

                            <div class="mil-contact-card mil-mb-90">
                                <p class="mil-upper mil-mb-30">Phone</p>
                                <p>
                                    <a href="tel:+91 8267870985">+91 8267870985</a> <br>
                                </p>
                            </div>

                            <?php if(isset($_GET['message']) && $_GET['message'] == "absdbevjcdjdjfgdfdsjkcbdkj"){
                          echo  "<div class='alert'>
                                <span class='closebtn' onclick='this.parentElement.style.display=none;'>&times;</span>
                               Thank You ".$_GET['name']."!<br>Connect you soon
                            </div>";    
                             }?>

                        </div>
                        <div class="col-lg-7">

                        <form action="assets/data/message.php" class="cform-two" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="mil-upper">Your full name <span class="mil-accent">*</span></label>
                                    <input type="text" class="mil-mb-30" name="name">
                                </div>

                                <div class="col-lg-6">
                                    <label class="mil-upper">Phone Number<span class="mil-accent">*</span></label>
                                    <input type="hidden" class="country_code" value="91" name="country_code">
                                    <input type="number" class="mil-mb-30 mobile_code" name="number">
                                </div>

                                <div class="col-lg-12">
                                    <label class="mil-upper">Your email address <span class="mil-accent">*</span></label>
                                    <input type="email" class="mil-mb-30" name="email">
                                </div>

                                <div class="col-lg-12">
                                    <label class="mil-upper">Your message <span class="mil-accent">*</span></label>
                                    <textarea class="mil-mb-30" name="message"></textarea>
                                </div>
                                <div class="col-lg-12 mil-text-row">
                                    <label class="mil-checkbox mil-mb-30">
                                        by sending, I accept the <a href="#.">terms and conditions</a>.
                                        <input type="checkbox" name="checkmark" >
                                        <span class="mil-checkmark"></span>
                                    </label>
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
