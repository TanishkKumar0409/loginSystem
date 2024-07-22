<?php
include "config.php";
if (isset($_POST['Rbtn'])) {
    $Rname = $_POST['Rname'];
    $Remail = $_POST['Remail'];
    $Rphone = $_POST['Rphone'];
    $Raddress = $_POST['Raddress'];
    $Rpassword = md5($_POST['Rpassword']);
    $Rcpassword = md5($_POST['Rcpassword']);
    if ($Rpassword == $Rcpassword) {
        $insert = "INSERT INTO users (user_name,user_email,user_phone,user_address,user_password) VALUES ('$Rname','$Remail','$Rphone','$Raddress','$Rpassword')";
        $insertquery = mysqli_query($connection, $insert);
        header("location:../../inner-pages/dashboard.php");
        session_start();
        $_SESSION['email']=$Remail;
        $_SESSION['password']=$Rpassword;
    }else {
        echo "Password Missmatch";
    }
}
