<?php
include "config.php";
if(isset($_POST['Lbtn'])){
    $Lemail=$_POST['Lemail'];
    $Lpassword=md5($_POST['Lpassword']);
    $select="SELECT * FROM users WHERE user_email='$Lemail' AND user_password='$Lpassword'";
    $selectquery=mysqli_query($connection,$select);
    $Sdata=$selectquery->fetch_assoc();
    if($Sdata>0){
        session_start();
        $_SESSION['email']=$Lemail;
        $_SESSION['password']=$Lpassword;
        header("location:../../inner-pages/dashboard");
    }
}