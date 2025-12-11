<div class="mil-section mil-op-space-90">

    <div class="mil-bg-item" style="bottom: -5%; right: 0; transform: rotate(-25deg)"></div>

    <div class="container">

        <p class="mil-upper mil-mb-30">Contact <span class="mil-accent">me</span></p>
        <h2 class="mil-up mil-mb-60">Let's Catch Up</h2>

        <div class="row justify-content-between">
            <div class="col-lg-4">

                

                <div class="mil-contact-card mil-mb-30"> 
                    <p class="mil-upper mil-mb-30">It'e me</p>
                    <p>
                        <a href="#">Aakanksha saini</a> <br>
                    </p>
                </div>
                <div class="mil-contact-card mil-mb-30">
                    <p class="mil-upper mil-mb-30">Email</p>
                    <p>
                        <a href="mailto:aakanksha.saini595@gmail.com">aakanksha.saini595@gmail.com</a><br>
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

                <form action="assets/data/message" class="cform-two" method="post">
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
                                by sending, I accept the <a href="#">terms and conditions</a>.
                                <input type="checkbox" name="checkmark">
                                <span class="mil-checkmark"></span>
                            </label>
                            <button type="submit" class="mil-button">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="alert-success" style="display: none;">
                    <h5>Thanks, your message is sent successfully.</h5>
                </div>

            </div>

        </div>

    </div>
</div>