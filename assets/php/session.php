<?php
include "config.php";
session_start();
$Semail = $_SESSION['email']??$_SESSION['UPemail'];
$Spassword = $_SESSION['password']??$_SESSION['UPpassword'];
if ($Semail && $Spassword) {
    $select = "SELECT * FROM users WHERE user_email='$Semail' AND user_password='$Spassword'";
    $selectquery = mysqli_query($connection, $select);
    $data = $selectquery->fetch_assoc();
    if ($data > 0) {
        $name = $data['user_name'];
        $email = $data['user_email'];
        $phone = $data['user_phone'];
        $address = $data['user_address'];
        $password = $data['user_password'];
    }
}