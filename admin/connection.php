<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="novega";
$admin_name="novega@gmail.com";
$admin_password="password";
$connect=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$connect){
   die("Failed Connection");
}
?>

