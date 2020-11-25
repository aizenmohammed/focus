<?php

$host = "localhost"; 
$user = "root"; 
$password = "12345678"; 
$dbname = "newproject"; 

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>