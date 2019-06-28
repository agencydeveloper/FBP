<?php
session_start();
$dbname = "localhost";
$username = "root";
$password = "";
$database = "milloginnew";
$mysqli = new mysqli($dbname, $username, $password, $database);
 
$query = "SELECT * FROM logindetail";
?>
