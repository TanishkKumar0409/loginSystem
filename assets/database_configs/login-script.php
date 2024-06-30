<?php
include "config.php";
if(isset($_POST['login-button'])){
    $login_email=$_POST['login-email'];
    $login_password=md5($_POST['login-password']);
    $select="SELECT * FROM login_and_signup WHERE email='$login_email' and password='$login_password'";
    $select_query=mysqli_query($connection,$select);
    $data=$select_query->fetch_assoc();
    if($data>0){
        session_start();
        $_SESSION['s-email']=$data['email'];
        $_SESSION['s-password']=$data['password'];
        header('location: ../../interfaces/dashboard.php');
    }else{
        echo "Your are not Existing User";
    }
}