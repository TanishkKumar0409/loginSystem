<?php
session_start();
if(isset($_POST['Rbtn1'])){
    $_SESSION['R']='Rbtn1';
    header("location:../../inner-pages/confirm");
}
if(isset($_POST['Rbtn2'])){
    $_SESSION['R']='Rbtn2';
    header("location:../../inner-pages/confirm");
}
if(isset($_POST['Rlogout'])){
    header("location:logout");
}