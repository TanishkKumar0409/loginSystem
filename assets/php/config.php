<?php
$host="localhost";
$username="root";
$password="";
$databasename="loginsystem";
$connection=mysqli_connect($host,$username,$password,$databasename);
if(!$connection){
    echo "connection not establish";
}