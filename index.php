<!DOCTYPE html>
<html lang="en-US">
<?php include "assets/components/head-links.php";?><!-- main head links -->
 
<body class="mil-custom-scroll">

<?php include "assets/components/navbar.php";?><!-- navbar --> 
    
    <div class="mil-onepage">
        <section>

        <?php include "assets/components/main.php";?> <!-- main -->
    
        <?php include "assets/components/about.php";?><!-- about --> 

        <?php include "assets/components/education.php";?><!-- education -->
        
        <?php include "assets/components/skills.php";?><!--  Coding skills -->
         
        <?php include "assets/components/testing_skills.php";?><!--  Testing skills -->

      
    
        <?php include "assets/components/experience.php";?><!-- experience -->
        
        <?php include "assets/components/services.php";?><!-- services -->
        
        <?php include "assets/components/reviews.php";?><!-- reviews -->
      
        <?php include "assets/components/contacts.php";?><!-- contacts -->
        

        </section>
    </div>
    

    <!-- pagination -->
    <div class="mil-pagination">
        <div class="mil-dot mil-active" data-index="-1" data-name="Home"></div>
        <div class="mil-dot" data-index="0" data-name="About"></div>
        <div class="mil-dot" data-index="1" data-name="Education"></div>
        <div class="mil-dot" data-index="2" data-name="Coding Skills"></div>
        <div class="mil-dot" data-index="3" data-name="Testing Skills"></div>
        
      
        <div class="mil-dot" data-index="5" data-name="Experience"></div>
        <div class="mil-dot" data-index="6" data-name="Services"></div>
        
        
        <?php if($query_reviews != ""){
        echo "<div class='mil-dot' data-index='6' data-name='Testimonials'></div>";
         }?>
        
        <div class="mil-dot" data-index="7" data-name="Contacts"></div>
    </div>
    <!-- pagination end -->


    <?php include "assets/components/bottom-links.php";?><!-- bottom-links -->
    
</body>


</html>
