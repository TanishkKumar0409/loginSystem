<?php
include "config.php";
include "session.php";
if(isset($_POST['Cbtn'])){
    $Cpassword=md5($_POST['Cpassword']);
    if($Cpassword==$Spassword){
        header("location:../../inner-pages/update.php");
    }
}
if(isset($_POST['Ubtn'])){
    echo $Uname=$_POST['Uname'];
    echo $Uemail=$_POST['Uemail'];
    echo $Uphone=$_POST['Uphone'];
    echo $Uaddress=$_POST['Uaddress'];
    echo $Upassword=$_POST['Upassword'];
    echo $ucpassword=$_POST['Ucpassword'];
}