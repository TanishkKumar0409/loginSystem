<?php
if(isset($_POST['Rbtn'])){
    header("location:../../inner-pages/confirm");
}
if(isset($_POST['Rlogout'])){
    header("location:logout");
}