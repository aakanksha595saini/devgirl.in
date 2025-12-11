<?php
session_start();
include "../db_conn.php";
if (isset($_POST['email']) && isset($_POST['password'])) {

    $loginUser = mysqli_real_escape_string($mysqli, $_POST['email']);
    $loginpassword = mysqli_real_escape_string($mysqli, $_POST['password']);

    $sqlCall = "SELECT * FROM user WHERE email='".$loginUser."'";
    $callusers = mysqli_query($mysqli, $sqlCall);
    $checkCall = mysqli_fetch_assoc($callusers);

    $Hpassword = password_verify($loginpassword, $checkCall['password']);

    if (empty($loginUser)) {
        header("Location: ../../login.php?error=Username is requireda");
        exit();
    } else if (empty($loginpassword)) {
        header("Location: ../../login.php?error=Password is requiredb");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email= '$loginUser' ";
        $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $loginUser && $Hpassword == 1) {

                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
             
                header("Location: ../backend.php");
                exit();
            } else {
                header("Location: ../../login.php?error=Incorrect Passwordc");
                exit();
            }
        } else {
            header("Location: ../../login.php?error=Incorrect User Name and Passwordd");
            exit();
        }
    }
} else {
    header("Location: ../../login.php");
    exit();
}
