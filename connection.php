<?php

$dbhost = "127.0.0.1"; 
$dbuser = "root";
$dbpass = "";          
$dbname = "login_sample.db";
$dbport = 3307;        


$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if (!$con) {
    die("Failed to connect: " . mysqli_connect_error());
}