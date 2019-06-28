<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "milloginnew";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$hname = mysqli_real_escape_string($conn, $_POST['hname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
}

if(empty($hname) || empty($password))
{
		header("location: login.php?login=empty");
		exit();
	}
		else
		{

		$sql="SELECT * FROM logindetail WHERE hname ='$hname'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location: login.php?login=error_wrong_username");
			exit();
		}
	
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
			if (count($row)) 
		{
	   	if ($row["status"]=='Unverified')
	   	{
	   		//echo"<script>alert('Please Contact Founders and IC's');</script>";
			header("location: login.php?login=status_Unverified_account_or_Banned");
			exit();
		}
		else
		{
				if($password === $row['password'])
				{ 
				header("location:home.php");
				$_SESSION["hname"] = "$hname";
				exit();
				}
				else
				{
						header("location: login.php?login=error_wrong_password");
						exit();
				}
			
	        }
	    }
}
}
?>
