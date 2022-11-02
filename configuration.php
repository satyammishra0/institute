<?php
//  --------------------------- 
//  Connection to the database 
//  --------------------------- 
$serverName = 'localhost';
$dbuserName = 'root';
$password = '';
$dbName = "institute";


$conn = mysqli_connect($serverName, $dbuserName, $password, $dbName);

if ($conn) {
    echo "Connection established";
}
