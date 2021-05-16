<?php
session_start();
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'admin';
$dbName = 'poip';
$dbport = 3308;

$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName,$dbport); 


?>