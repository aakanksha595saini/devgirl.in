<?php

session_start();
if(isset($_SESSION['name']) && isset($_SESSION['email']))
{
    
?>
    <!DOCTYPE html>
<html lang="en-US">

<head>

    <title>Welcome - Aakanksha Portfolio </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="css/plugins/bootstrap-grid.css" type="text/css" media="all">

    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css" type="text/css" media="all">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css" type="text/css" media="all">
    <!-- fontawesome -->
    <link rel="stylesheet" href="fonts/font-awesome/css/all.min.css" type="text/css" media="all" />


    <!-- treto css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>





    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .iti {
            width: 100%;
        }

        /* The alert message box */
        .alert {
            padding: 20px;
            background-color: #20B2AA;
            /* Red */
            color: white;
            margin-bottom: 15px;
        }

        /* The close button */

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            /* transition: 0.3s; */
        }

        /* When moving the mouse over the close button */
        .closebtn:hover {
            color: black;
        }
    </style>




</head>

<body>

    
    <!-- frame -->
<div class="mil-frame">

<!-- top panel -->
<div class="mil-top-panel mil-tp-2">
    <div class="mil-tp-frame">
        <a href="index.php" class="mil-logo">
            <img src="img/logo.png" alt="logo">
        </a>
        <nav>
            <ul>
                 <li>
                    <a href="../index.php">Home</a>
                </li>
                
            </ul>
        </nav>
        <div class="mil-menu-btn">
            <span></span>
        </div>
    </div>

    <div class="mil-social"> 
        <ul>
        <li>
                <a href="https://github.com/aakanksha595saini" target="_blank" class="social-icon">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/aakanksha_amy" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/aakanksha-s-453179182/" target="_blank" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            
        </ul>
    </div>
</div>
<!-- top panel end -->

<!-- footer -->
<div class="mil-footer">
    <p class="mil-upper mil-upper-sm">© 2024 <span class="mil-accent">Aakanksha.</span> All rights reserved.</p>
</div>
<!-- footer end -->

</div>
<!-- frame end -->

    <!-- wrapper -->
    <div>
        <div class="mil-page">

            <div class="mil-bg-item" style="top: 3%; right: 15%; transform: rotate(-45deg)"></div>

            <div class="container">

                <div class="mil-top-banner" style="padding-top: 125px">
                    <h2 class="mil-up">Create review</h2>
                </div>

                <div class="mil-contact">
                    <div class="row justify-content-between">
                        
                    <div class="col-lg-4">
                    <div class="mil-contact-card mil-mb-90">
                                <p class="mil-upper mil-mb-30">Name</p>
                                <p>
                                    <a href="#"><?php echo $_SESSION['name']; ?></a> <br>
                                </p>
                            </div>
                            

                            <div class="mil-contact-card mil-mb-30">
                                <p class="mil-upper mil-mb-30">Email</p>
                                <p>
                                    <a href="mailto:aakanksha.saini595@gmail.com"> <?php echo $_SESSION['email']; ?></a><br>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-7">
                        <?php if(isset($_GET['message']) && $_GET['message'] == "success")
                        {
                          echo  "<div class='alert'>
                                <span class='closebtn' onclick='this.parentElement.style.display=none;'>&times;</span>
                               Thank You ".$_SESSION['name']."!<br>Message Sent successfully
                            </div>";  
                        }
                        if(isset($_GET['error']))
                        {                        
                            echo "<div class='alert alert-danger' role='alert'>
                            <span onclick='this.parentElement.style.display = 'none';' class='closebtn'>&times;</span>
                            Please enter correct details!
                          </div>";
                            
                             }
                             ?>
                        <form action="data/feeback_link.php" class="cform-two" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="mil-upper">Full Name <span class="mil-accent">*</span></label>
                                    <input type="text" class="mil-mb-30" name="name">
                                </div>
                                <div class="col-lg-12">
                                    <label class="mil-upper">Number <span class="mil-accent">*</span></label>
                                    <input type="number" class="mil-mb-30" name="number">
                                </div>

                               
                                <div class="col-lg-12 mil-text-row">
                                    
                                    <button type="submit" class="mil-button">Send Key</button>
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

    <!-- jquery js -->
<script src="js/plugins/jquery.min.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<!-- magnific-popup js -->
<script src="js/plugins/magnific-popup.js"></script>
<!-- onepage js -->
<script src="js/plugins/onepage.js"></script>
<!-- swiper js -->
<script src="js/plugins/swiper.min.js"></script>
<!-- isotope js -->
<script src="js/plugins/isotope.min.js"></script>

<!-- treto js -->
<script src="js/main.js"></script>
</body>



</html>
<?php
}else{
    header("Location: ../Login.php");
   
    exit();
}
?>