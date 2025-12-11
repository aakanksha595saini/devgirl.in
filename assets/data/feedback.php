<?php

include "../db_conn.php";


if($_POST['message'] != "" && $_POST['role'] != ""){
    
  $key = $_POST['key'];
  $role = $_POST['role'];
  $message = $_POST['message'];
  // from FORM submit
  
  
  $query_feedback_check = mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM `feeback_link` WHERE `link` = '".$key."'"));
  // For auth data valid
  
  $photo = $_FILES['photo'];

  $filename = $photo['name'];
  $fileerror = $photo['error'];
  $filetmp = $photo['tmp_name'];
  
  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));
  $fileextstore = array('png','jpg','jpeg','jfif');
  
  if(in_array($filecheck,$fileextstore)){
  
       $destinationfile = '../img/feedback/'.$query_feedback_check['name'].'.'.$fileext[1]; 
       
       $destinationfile1 = 'assets/img/feedback/'.$query_feedback_check['name'].'.'.$fileext[1]; 
        move_uploaded_file($filetmp,$destinationfile);
  }
  else
  {
      $destinationfile1 = 'assets/img/feedback/default.png'; 
  }
  // For Submit DP
  
  
  $query_feedback = mysqli_query($mysqli,"INSERT INTO `feedback`(`name`, `number`, `photo`, `job_role`, `message`) VALUES ('".$query_feedback_check['name']."','".$query_feedback_check['number']."','".$destinationfile1."','".$role."','".$message."')");
    
        if($query_feedback){
            
            $query_delete = mysqli_query($mysqli,"DELETE FROM `feeback_link` WHERE `link` = '".$query_feedback_check['link']."'");
            
            if($query_delete){
                $message = urlencode("Subject: Thanks for Your Feedback! \n\nHi ".$query_feedback_check['name'].",\n\nThanks for sharing your feedback—it means a lot to us!\n\nBest,\nAakanksha Saini");
                $response = file_get_contents("https://wa.gurdeep.net/api/send.php?number=".$query_feedback_check['number']."&type=text&message=".$message."&instance_id=65A7FEFDA5C70&access_token=84c0f289be32f907198842da34cab140");
                if($response){
                
                header("Location: https://aakanksha.devgirl.in/thank-you.php");
                }
                
            }
            
        }else{
            
            header('location: '.$_SERVER['HTTP_REFERER']);
        }
            
    
    
}


?>









