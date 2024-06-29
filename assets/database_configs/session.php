<?php
include "config.php";
session_start();
$s_email=$_SESSION['s-email'];
$s_password=$_SESSION['s-password'];
$select="SELECT * FROM login_and_signup WHERE email = '$s_email' and password = '$s_password'";
$select_query=mysqli_query($connection,$select);
$data=$select_query->fetch_assoc();
if($data>0){
    $sname=$data['name'];
    $sphone=$data['phone'];
    $semail=$data['email'];
    $saddress=$data['address'];
}