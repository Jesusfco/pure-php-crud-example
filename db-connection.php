<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "monica";

$conn = mysqli_connect($host, $user, $password, $database);
 
// check connection 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}