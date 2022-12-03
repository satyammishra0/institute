<?php
//  --------------------------- 
//  Connection to the database 
//  --------------------------- 
// $serverName = 'localhost';
// $dbuserName = 'root';
// $password = '';
// $dbName = "institute";

$serverName = 'localhost';
$dbuserName = 'u809849815_user';
$password = 'Satyammi_007';
$dbName = "institute";



$conn = mysqli_connect($serverName, $dbuserName, $password, $dbName);

if ($conn) {
    // echo "Connection established";
}


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
