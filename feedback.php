
<?php



if(isset($_GET['key'])){
       
    include "assets/db_conn.php";
    $query = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM `feeback_link` WHERE `link` = '".$_GET['key']."'"));
    
    if($query > ""){
    
    
    
?>


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

                <div class="mil-top-banner">
                    <p class="mil-upper mil-mb-30">Feedback Form<span class="mil-accent"></span></p>
                    <h2 class="mil-up mil-mb-20">Hello <?php echo $query['name'];?> </h2>
                    <p class="mil-upper ">Please Fill the feedback carefully <span class="mil-accent">Dont Forgot to upload you Photo</span></p>
                </div>

                <div class="mil-contact">
                    <div class="row justify-content-between">
                        
                        <div class="col-lg-12">

                            <form action="assets/data/feedback.php" class="cform" method="post" enctype="multipart/form-data">
                                <label class="mil-upper">Your full name <span class="mil-accent">*</span></label>
                                <input type="text" class="mil-mb-30" disabled value="<?php echo $query['name'];?>" name="name">
                                <input type="hidden" name="key" value="<?php echo$_GET['key'];?>">
                                
                                <label class="mil-upper">Your phone number <span class="mil-accent">*</span></label>
                                <input type="tel" class="mil-mb-30" disabled value="+<?php echo $query['number'];?>" name="text">
                                
                                <label class="mil-upper">Job Role <span class="mil-accent">*</span></label>
                                <input type="text" class="mil-mb-30" name="role">
                                
                                
                                <label class="mil-upper">Add your feedback here <span class="mil-accent">*</span></label>
                                <textarea class="mil-mb-30" name="message"></textarea>
                                
                                
                                <label class="mil-upper">Display Photo<span class="mil-accent">*</span></label>
                                <div class="upload-btn-wrapper mil-mb-30">
                                  <button class="btntt">Click Upload</button>
                                  <input type="file" name="photo" />
                                </div>
                                <br>
                                 <button type="submit" class="mil-button">Submit Feedback</button>
                               
                            </form>

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


<?php 


}else{
    
 header("Location: index.php");
}
}else{
    
    header("Location: index.php");
}


?>



