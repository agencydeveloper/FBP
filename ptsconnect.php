<?php
session_start();
$dbname = "localhost";
$username = "root";
$password = "";
$database = "mil";
$mysqli = new mysqli($dbname, $username, $password, $database);
 
$query = "SELECT * FROM employee";
?>
