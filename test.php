<?php
session_start();
//echo $_SESSION["hname"];
$posted_data=$_SESSION["hname"];
$_POST['name']=$posted_data;
//print_r($_POST);
echo $_POST['name'];
?>