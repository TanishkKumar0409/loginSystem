<?php
include "config.php";
if (isset($_POST['submit-button'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm-password']);
    if ($password == $confirm_password) {
        $insert = "INSERT INTO login_and_signup (name,phone,email,address,password) VALUES('$name','$phone','$email','$address','$password')";
        $insert_query=mysqli_query($connection,$insert);
        session_start();
        $_SESSION['s-email']=$email;
        $_SESSION['s-password']=$password;
        header('location: ../../interfaces/dashboard.php');
    } else {
        echo "Password Doesn't Match";
    }
}
