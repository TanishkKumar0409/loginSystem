<?php
include "config.php";
include "session.php";
if (isset($_POST['Cbtn'])) {
    $Cpassword = md5($_POST['Cpassword']);
    if ($Cpassword == $Spassword) {
        header("location:../../inner-pages/update.php");
    }
}
if (isset($_POST['Ubtn'])) {
    $Uname = $_POST['Uname'];
    $Uemail = $_POST['Uemail'];
    $Uphone = $_POST['Uphone'];
    $Uaddress = $_POST['Uaddress'];
    $Upassword = md5($_POST['Upassword']);
    $ucpassword = md5($_POST['Ucpassword']);
    if ($Upassword == $ucpassword) {
        $update = "UPDATE users SET user_name='$Uname', user_email='$Uemail' , user_phone='$Uphone' , user_address='$Uaddress' , user_password='$Upassword'  WHERE user_email='$Semail' AND user_password='$Spassword'";
        $updatequery = mysqli_query($connection, $update);
        session_start();
        session_destroy();
        session_start();
        $_SESSION['UPemail']=$Uemail;
        $_SESSION['UPpassword']=$Upassword;
        header("location:../../inner-pages/dashboard");
    } else {
        echo "incorrect password ";
    }
}
