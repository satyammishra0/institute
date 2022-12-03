<?php
//  --------------------------- 
//  Connection to the database 
//  --------------------------- 
$serverName = 'localhost';
$dbuserName = 'root';
$password = '';
$dbName = "institute";

//  --------------------------- 
//  Connection to the db for online 
//  --------------------------- 
// $serverName = 'localhost';
// $dbuserName = 'u809849815_user';
// $password = 'Satyammi_007';
// $dbName = "u809849815_institute";



$conn = mysqli_connect($serverName, $dbuserName, $password, $dbName);

if ($conn) {
    // echo "Connection established";
}


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
