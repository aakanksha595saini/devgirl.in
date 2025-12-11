<?php

include "../db_conn.php";

$name = $_POST['name'];

$number = "91" . $_POST['number'];

$randum = rand(111, 999);

$key = password_hash($randum, PASSWORD_DEFAULT);

$link = "http://localhost/feedback.php?key=" . $key;

if (empty($name) || empty($number)) {
    header("Location: ../backend.php?error=Username and correct contact is required");
    exit();
} else
    {
        if ($number != "") {
            if (floor(log10($number) + 1) == 12) {
                $query = mysqli_query($mysqli, "INSERT INTO `feeback_link`(`name`, `number`, `link`) VALUES ('" . $name . "','" . $number . "','" . $key . "')");
                //$message = urlencode("Subject: Your Feedback Matters\n\nDear ".$name.",\n\nWe value your partnership and would love your feedback to improve our services. Please take a moment to complete this brief survey:\n\n".$link."\n\nThank you for your time and continued collaboration.\n\nBest,\nAakanksha Saini");
                $message = urlencode("Subject: Your Feedback Matters\n\nDear " . $name . ",\n\nPlease take a moment to complete this brief survey:\n\n" . $link . "\n\nThank you for your time and continued collaboration.\n\nBest,\nAakanksha Saini");
                $response = file_get_contents("https://wa.gurdeep.net/api/send.php?number=" . $number . "&type=text&message=" . $message . "&instance_id=65A7FEFDA5C70&access_token=84c0f289be32f907198842da34cab140");
                if ($response) {

                    header("Location: ../backend.php?message=success");
                }

            }
           
            else 
              header("Location: ../backend.php?error=Enter 10 digit contact number");

        }
        else  header("Location: ../backend.php?error=Check you have entered correct format");

    }

// if($response){

//     header("Location: ../../backend.php?message=absdbevjcdjdjfgdfdsjkcbdkj");
// }



?>


<!-- 
"Subject: Your Feedback Matters\n\n

Dear ".$name.",\n\n

We value your partnership and would love your feedback to improve our services. Please take a moment to complete this brief survey:\n\n

".$link."\n\n

Thank you for your time and continued collaboration.\n\n

Best,\n
Aakanksha Saini -->