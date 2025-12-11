 <?php


if(isset($_POST['checkmark']) && isset($_POST['name'])){
 
 $name = $_POST['name'];
 $country_code = $_POST['country_code'];
 $number = $_POST['number'];
 $contact_num = '+'.$country_code . $number;
 $email = $_POST['email'];
 $message = $_POST['message'];


 $final_message2 = urlencode("*Message From Website*\n\nName:\n".$name."\n\nEmail:\n".$email."\n\nNumber:\n+".$contact_num."\n\nMessage:\n".$message); // for me
 file_get_contents("https://wa.gurdeep.net/api/send.php?number=918267870985&type=text&message=".$final_message2."&instance_id=65A7FEFDA5C70&access_token=84c0f289be32f907198842da34cab140");

 header('location: '.$_SERVER['HTTP_REFERER'].'?message=absdbevjcdjdjfgdfdsjkcbdkj&name='.$name);
}


 ?>